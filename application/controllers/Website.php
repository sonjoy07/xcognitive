<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('website_model');

        $this->load->model('common_model');
        
        $this->load->model('Google_user', 'user');
        
        $this->load->model('Facebook_user', 'fuser');

        $this->load->helper(array('form', 'url'));
        
        $this->load->library('tank_auth');

        $this->lang->load('tank_auth');

        
        
         $this->load->library('ckeditor');

        $this->load->library('ckfinder');

        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
        $this->ckeditor->config['width'] = '100%';
        $this->ckeditor->config['height'] = '300px';

//Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor, '../../assets/ckfinder/');
        $data['settings'] = $this->website_model->get_all_setting();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'empty', $data);
    }

    function index() {
        $data['get_blogs'] = $this->website_model->get_published_blog();
        $data['get_services'] = $this->website_model->get_published_services();
        $data['subjects'] = $this->website_model->get_all('subjects');
        $data['settings'] = $this->website_model->get_all_setting();
        $data['experts'] = $this->website_model->get_experts_info();
        $data['bookDownloads'] = $this->website_model->get_all_published_book_download();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'welcome', $data);
    }

    function expert() {
        $data['getSubjects'] = $this->website_model->get_subjects();
        $data['getAllExpertsInfo'] = $this->website_model->get_all('expert_details');
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'expert', $data);
    }

    function blog() {
        $data['blog'] = 'blog';
        $data['get_last_blog'] = $this->website_model->get_last_blog();
        $data['get_some_blog'] = $this->website_model->get_some_blog();
        $data['latest_post'] = $this->website_model->latest_post();
        $data['archives'] = $this->website_model->getArchivesValue();
        $data['latest_category'] = $this->website_model->latest_category();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'blog', $data);
    }
    function blogs_by_user($id) {
        $data['blog'] = 'blog';
        $data['get_last_blog'] = $this->website_model->get_last_blog_by_user($id);
        $data['get_some_blog'] = $this->website_model->get_some_blog_by_user($id);
        $data['latest_post'] = $this->website_model->latest_post();
        $data['archives'] = $this->website_model->getArchivesValue();
        $data['latest_category'] = $this->website_model->latest_category();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'blog', $data);
    }

    function blog_details($id) {
        $data['comments_by_blog_id'] = $this->website_model->get_comments_by_blog_id($id);
        $data['archives'] = $this->website_model->getArchivesValue();
//        echo'<pre>';print_r($data);die;
        $data['blog_details'] = $this->common_model->get_all_info_by_id('blogs', $id, 'blog_id');
        $data['latest_post'] = $this->website_model->latest_post();
        $data['latest_category'] = $this->website_model->latest_category();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'blog_details', $data);
    }

    function categoryWiseBlog($id) {
        $data['get_some_blog'] = $this->website_model->get_some_blog_by_category_id($id);
        $data['latest_post'] = $this->website_model->latest_post();
        $data['archives'] = $this->website_model->getArchivesValue();
        $data['latest_category'] = $this->website_model->latest_category();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'categoryWiseBlog', $data);
    }

    function save_feedback() {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['message'] = $this->input->post('message');
//        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_id'] = 1;
        $this->website_model->save('testimonial', $data);
        return 1;
    }

    function expert_details($id) {
        $data['get_expert_info'] = $this->website_model->get_info_by_id($id, 'expert_details', 'expert_id');
        $data['sidebar_suggestion'] = $this->website_model->get_experts_sidebar_suggestion();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts Deailts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'expert_details', $data);
    }

    function getSubjectWiseExpert() {
        $subject = $this->input->post('subject');
        $data['getSubjectWiseExpert'] = $this->website_model->getSubjectWiseExpert($subject);
        $this->load->view($this->config->item('WEBSITE_THEME') . 'search_expert', $data);
    }

    function getSearchDetails() {
        $search = $this->input->post('search');
        $data['getSubjectWiseExpert'] = $this->website_model->getSearchDetails($search);
        $this->load->view($this->config->item('WEBSITE_THEME') . 'search_blog', $data);
    }
    
    function user_login(){
        $this->facebook_login();        
        $this->google_login();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| User Registration';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'user_registration', $data);
    }

    function google_login() {
        //        google login
        include_once APPPATH . "libraries/google-api-php-client/Google_Client.php";
        include_once APPPATH . "libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
        $this->load->model('Google_user', 'user');
        // Google Project API Credentials
        $clientId = '360401156619-0uekqaffh3lpos5nvc9kodreat7942qs.apps.googleusercontent.com';
        $clientSecret = 'npn-r76weci7ZCEKwW6Sjpmk';
        $redirectUrl = site_url('website');

        // Google Client Configuration
        $gClient = new Google_Client();
        $gClient->setApplicationName('Xcognitive');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_REQUEST['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }

        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['username'] = $userProfile['given_name'];
            $userData['email'] = $userProfile['email'];
            $userData['locale'] = $userProfile['locale'];
            $userData['user_image'] = $userProfile['picture'];
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
            if (!empty($userID)) {
                $data['userData'] = $userData;
                $this->session->set_userdata('userData', $userData);
                $this->session->set_userdata('user_type', 2);
                $this->session->set_userdata('status', 1);
                $this->session->set_userdata('username', $userData['username']);
            } else {
                $data['userData'] = array();
            }
        } else {
            $data['authUrl'] = $gClient->createAuthUrl();
        }
        $data["mainContent"] = $this->load->view($this->config->item('WEBSITE_THEME') . 'empty', $data);
    }

    function facebook_login() {
        // Include the facebook api php libraries
        include_once APPPATH . "libraries/facebook-api-php-codexworld/facebook.php";

        // Facebook API Configuration
        $appId = '1918679698377445';
        $appSecret = 'dc3a8667cb74402b4ecb3008a0d86036';
        $redirectUrl = site_url('website');
        $fbPermissions = 'email';

        //Call Facebook API
        $facebook = new Facebook(array(
            'appId' => $appId,
            'secret' => $appSecret
        ));
        $fbuser = $facebook->getUser();

        if ($fbuser) {
            $userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['username'] = $userProfile['first_name'];
            $userData['email'] = $userProfile['email'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/' . $userProfile['id'];
            $userData['user_image'] = $userProfile['picture']['data']['url'];
            // Insert or update user data
            $userID = $this->fuser->checkUser($userData);
            if (!empty($userID)) {
                $data['userData'] = $userData;
                $this->session->set_userdata('userData', $userData);
                $this->session->set_userdata('user_type', 2);
                $this->session->set_userdata('status', 1);
                $this->session->set_userdata('username', $userData['username']);
            } else {
                $data['userData'] = array();
            }
        } else {
            $fbuser = '';
            $data['facebookUrl'] = $facebook->getLoginUrl(array('redirect_uri' => $redirectUrl, 'scope' => $fbPermissions));
        }
//        var_dump($data['facebookUrl']);exit;
        $data["mainContent"] = $this->load->view($this->config->item('WEBSITE_THEME') . 'empty', $data);
    }

    function expert_registration() {
        $data['get_subjects'] = $this->common_model->get_all('subjects', 'subject_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts Deailts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'expert_registration', $data);
    }

    function save_expert() {
        $post = $this->input->post();
//        var_dump($post);die;
        $data['expert_name'] = $post['expert_name'];
        if (!empty($post['skills'])) {
            $data['skills'] = implode(',', $post['skills']);
        }
        $data['expert_designation'] = $post['expert_designation'];
        if (!empty($post['language'])) {
            $data['language'] = implode(',', $post['language']);
        }
        $data['facebook_link'] = $post['facebook_link'];
        $data['twitter_link'] = $post['twitter_link'];
        $data['linkedin_link'] = $post['linkedin_link'];
        $data['expert_about'] = $post['expert_about'];
        $data['education'] = $post['education'];
        $data['publication_status'] = '2';

        if (!empty($_FILES['experts_image']['name'])) {
//            var_dump($_FILES);die;
            $config['upload_path'] = './uploads/expert_image/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2097152';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('experts_image')) {
                $image_data = $this->upload->data();
                $this->image_resize($image_data['full_path'], $image_data['file_name'], 900, 300);

                $data['experts_image'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        } else {
            $data['experts_image'] = '';
        }
        if (!empty($_FILES['expert_cv']['name'])) {
//            var_dump($_FILES);die;
            $config['upload_path'] = './uploads/expert_cv/';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf|docx';
            $config['max_size'] = '2097152';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('expert_cv')) {
                $image_data = $this->upload->data();
                $data['expert_cv'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        } else {
            $data['expert_cv'] = '';
        }

        $expet_id = $this->common_model->insert('expert_details', $data);
        //        schedule insert
        
       
        $sdata['message'] = "<div class='alert alert-success no-border'><button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button><span class='text-semibold'>Well done!</span> Your Request is Pending for Admin's Pemission.</div>";
        $this->session->set_flashdata($sdata);
        redirect('website/expert_registration');
    }
    
    function image_resize($path, $file, $width, $height)
    {
        $config_resize['image_library'] = 'gd2';
        $config_resize['source_image'] = $path;
        $config_resize['create_thumb'] = FALSE;
        $config_resize['maintain_ratio'] = TRUE;
        $config_resize['width'] = $width;
        $config_resize['height'] = $height;
        $config_resize['new_image'] = './uploads/blog_image/thumb/' . $file;
        $this->load->library('image_lib', $config_resize);
        $this->image_lib->resize();
    }
	function forum(){
		$data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Discussions';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'forum', $data);
	}
	function forum_details(){
		$data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Discussions';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'forum_details', $data);
	}

   

}
