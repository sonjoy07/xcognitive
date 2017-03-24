<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Expert_controller
 *
 * @author sonjoy
 */
class Expert_controller extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->helper('security');

        $this->load->library('tank_auth');

        $this->lang->load('tank_auth');

        $this->load->model('website_model');

        $this->load->model('common_model');
         if (!$this->tank_auth->is_logged_in()|| $this->session->userdata('user_type')!=3) {         //not logged in
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
	
	function expertProfile() {
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
    

    function edit_expert($id) {
        $data['get_subjects'] = $this->common_model->get_all('subjects', 'subject_id');
        $data['get_all_info'] = $this->common_model->get_all_info_by_id('expert_details', $id, 'expert_id');
        $data['geExpertSchedule'] = $this->common_model->geExpertSchedule($id);
//        var_dump($data['geExpertSchedule']);die;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/edit_expert', $data);
    }

    function update_expert() {
        $post = $this->input->post();
//        var_dump($post);die;
        $id = $post['expert_id'];
        $data['expert_name'] = $post['expert_name'];

        if (!empty($post['language'])) {
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
        $data['summary'] = $post['summary'];
        $data['education'] = $post['education'];
        $data['award'] = $post['award'];
        $data['experience'] = $post['experience'];
        $data['publication_status'] = $post['publication_status'];
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
        }
        $this->common_model->time_table_delete($id);

        $expet_id = $this->common_model->update('expert_details', $data, $id, 'expert_id');
        //        schedule insert
        if (!empty($post['sat_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['sat'];
            $time['time'] = $post['sat_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        if (!empty($post['sun_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['sun'];
            $time['time'] = $post['sun_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        if (!empty($post['mon_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['mon'];
            $time['time'] = $post['mon_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        if (!empty($post['tue_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['tue'];
            $time['time'] = $post['tue_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        if (!empty($post['fri_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['fri'];
            $time['time'] = $post['fri_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        if (!empty($post['wed_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['wed'];
            $time['time'] = $post['wed_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        if (!empty($post['thu_time'])) {
            $time = array();
            $time['expert_id'] = $expet_id;
            $time['day_name'] = $post['thu'];
            $time['time'] = $post['thu_time'];
            $this->common_model->insert('expert_schedule', $time);
        }
        redirect('admin/expert_list');
    }

//    add blog
    function add_blog() {
        $data['get_category'] = $this->common_model->get_all('blog_category', 'category_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'add_blog', $data);
    }

    function save_blog() {
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
        $data['user_id'] = '3';

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
        $this->session->set_flashdata($sdata);
        redirect('expert_controller/add_blog');
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
