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
        $this->load->library('ckeditor');

        $this->load->library('ckfinder');

        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
        $this->ckeditor->config['width'] = '100%';
        $this->ckeditor->config['height'] = '300px';

//Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor, '../../assets/ckfinder/');
        
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
    
    function add_blog(){
        $data['get_category'] = $this->common_model->get_all('blog_category', 'category_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'add_blog', $data);
    }
    
    function save_blog()
    {
        $post = $this->input->post();
//        var_dump($post);die;
        $data['user_id'] = $this->session->userdata('user_id');
        $data['blog_title'] = $post['blog_title'];
        $data['auther_name'] = $post['auther_name'];
        $data['author_email'] = $post['author_email'];
        $data['category_id'] = $post['category_id'];
        $data['short_description'] = $post['short_description'];
        $data['long_description'] = $post['long_description'];
        $data['publication_status'] = '2';
        $data['user_id'] = '2';

        if (!empty($_FILES['blog_image']['name'])) {
//            var_dump($_FILES);die;
            $config['upload_path'] = './uploads/blog_image/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2097152';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_image')) {
                $image_data = $this->upload->data();
                $this->image_resize($image_data['full_path'], $image_data['file_name'], 900, 300);

                $data['blog_image'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        } else {
            $data['blog_image'] = '';
        }
        $this->common_model->insert('blogs', $data);
        $sdata['message'] = "<div class='alert alert-success no-border'><button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button><span class='text-semibold'>Well done!</span> Your Post is Pending for Admin's Pemission.</div>";
        $this->session->flashdata($sdata);
        redirect('user_controller/add_blog');
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
}
