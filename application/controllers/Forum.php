<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Forum
 *
 * @author sonjoy
 */
class Forum extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->helper('security');

        $this->load->library('tank_auth');

        $this->lang->load('tank_auth');

        $this->load->model('website_model');
		
        $this->load->model('forum_model');

        $this->load->model('common_model');
         if (!$this->tank_auth->is_logged_in()|| $this->session->userdata('user_type')==1) {         //not logged in
            redirect('website/user_login');
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
	 
	 function index(){
		 $data['get_forum'] = $this->common_model->get_all('forum','forum_id');
		 $data['get_forum_category'] = $this->forum_model->get_forum_category();
		 $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Discussions';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'forum', $data);
	 }
	 
	 function save_forum(){
		 $post = $this->input->post();
		 $data['forum_description'] = $post['forum_description'];
		 $data['forum_category_id'] = $post['category_id'];
		 $data['user_id'] = $this->session->userdata('user_id');
		 $data['publication_status'] = 1;
		 // $data['user_id'] = 1;
		 $id = $this->common_model->insert('forum',$data);
		 
		 $info['get_forum']= $this->forum_model->get_forum_by_forum_id($id);
		 $this->load->view($this->config->item('WEBSITE_THEME') . 'ajax_forum_details', $info);
	 }
	

    function image_resize($path, $file, $width, $height) {
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
