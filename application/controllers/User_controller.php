<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_controller
 *
 * @author sonjoy
 */
class User_controller extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        
        $this->load->library('form_validation');
        
        $this->load->helper('security');

        $this->load->library('tank_auth');

        $this->lang->load('tank_auth');
        
        $this->load->model('website_model');
        
        $this->load->model('common_model');
         if (!$this->tank_auth->is_logged_in()|| $this->session->userdata('user_type')!=2) {         //not logged in
            redirect('website');
            return 0;
        }
        
    }
    
    public function index(){
        
    }
    
    function userProfile() {
        $user_id = $this->session->userdata('user_id');
        $data['user_profile'] = $this->website_model->get_user_profile($user_id);
        $data['user_info'] = $this->website_model->get_user_info($user_id);
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts Deailts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'userProfile', $data);
    }

    function resetPasswords() {
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts Deailts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'resetPassword', $data);
    }
    
    function payment_details() {
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'payment_details', $data);
    }

    function save_comments() {
        $data['comments'] = $this->input->post('comment');
        $data['blog_id'] = $this->input->post('blog_id');
        $data['user_id'] = 1;
        $data['comments_date'] = Date('Y-m-d H:s:i');
//        var_dump($data);die;
        $id = $this->website_model->save('comments', $data);
        $info['get_comment'] = $this->common_model->get_all_info_by_id('comments', $id, 'comment_id');
        $this->load->view($this->config->item('WEBSITE_THEME') . 'comments', $info);
    }
    
    function appoinment() {
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'appoinment', $data);
    }
}
