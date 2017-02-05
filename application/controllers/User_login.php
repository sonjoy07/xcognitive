<?php

/**
 * Created by PhpStorm.
 * User: sonjoy
 * Date: 2/5/2017
 * Time: 10:41 PM
 */
class User_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id')) {
            echo'bangladesh';
            $this->load->model('role');
            $this->role->check_access();
        }
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->load->helper('security');

        $this->load->library('tank_auth');

        $this->lang->load('tank_auth');
    }


//    login_part////////////////
    function index()
    {

        if ($this->tank_auth->is_logged_in()) {        // logged in
            redirect('');
        } elseif ($this->tank_auth->is_logged_in(FALSE)) {      // logged in, not activated
            $sdata['message'] = '<div class = "alert alert-danger" id="message"><button type = "button" class = "close" data-dismiss = "alert"><i class = " fa fa-times"></i></button><p><strong><i class = "ace-icon fa fa-check"></i></strong> Your Account is not Activated Yet!</p></div>';
            $this->session->set_userdata($sdata);
            redirect('');
        } else {

            $data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND

                $this->config->item('use_username', 'tank_auth'));

            $data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');


            $this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');

            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            $this->form_validation->set_rules('remember', 'Remember me', 'integer');


            // Get login for counting attempts to login

            if ($this->config->item('login_count_attempts', 'tank_auth') AND ($login = $this->input->post('login'))) {

                $login = $this->security->xss_clean($login);
            } else {

                $login = '';
            }


            $data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');

            if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {

                if ($data['use_recaptcha'])
                    $this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
                else
                    $this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
            }

            $data['errors'] = array();


            if ($this->form_validation->run()) {        // validation ok
                if ($this->tank_auth->login(
                    $this->form_validation->set_value('login'), $this->form_validation->set_value('password'), $this->form_validation->set_value('remember'), $data['login_by_username'], $data['login_by_email'] && $this->session->userdata('user_type') == 2)
                ) {        // success
                    redirect('');
                } else {

                    $errors = $this->tank_auth->get_error_message();

                    if (isset($errors['banned'])) {        // banned user
                        $this->_show_message($this->lang->line('auth_message_banned') . ' ' . $errors['banned']);
                    } elseif (isset($errors['not_activated'])) {    // not activated user
                        redirect('/auth/send_again/');
                    } else {             // fail
                        foreach ($errors as $k => $v)
                            $data['errors'][$k] = $this->lang->line($v);
                        $sdata['message'] = ' Your Username or Password is incorrect or You Are Not a Registered Active User!';
                        $this->session->set_userdata($sdata);
                    }
                }
            }

            $data['show_captcha'] = FALSE;

            if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {

                $data['show_captcha'] = TRUE;

                if ($data['use_recaptcha']) {

                    $data['recaptcha_html'] = $this->_create_recaptcha();
                } else {

                    $data['captcha_html'] = $this->_create_captcha();
                }
            }

//            $this->load->view($this->config->item('LOGIN_THEME') . "index", $data);
            redirect('');
        }
    }

    /* Logout user

    *

    * @return void

    */
    function logout()
    {

        unset($_SESSION);

        $this->tank_auth->logout();

        $this->_show_message($this->lang->line('auth_message_logged_out'));
    }

    function _show_message($message)
    {

        $this->session->set_flashdata('message', $message);

        redirect('');
    }

    /**
     * Send email message of given type (activate, forgot_password, etc.)
     *
     * @param    string
     * @param    string
     * @param    array
     * @return    void
     */
    function _send_email($type, $email, &$data)
    {
        $this->load->library('email');
        $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
        $this->email->to($email);
        $this->email->subject(sprintf($this->lang->line('auth_subject_' . $type), $this->config->item('website_name', 'tank_auth')));
        $this->email->message($this->load->view('email/' . $type . '-html', $data, TRUE));
        $this->email->set_alt_message($this->load->view('email/' . $type . '-txt', $data, TRUE));
        $this->email->send();
    }

}