<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author sonjoy
 */
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->load->library('tank_auth');
        $this->load->model('role');
        $this->role->check_access();
        if (!$this->tank_auth->is_logged_in()|| $this->session->userdata('user_id')==2) {         //not logged in
            redirect('login');
            return 0;
        }
        $this->load->model('checkuser');
        $this->load->library('grocery_CRUD');
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        $this->load->model('common_model');


        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
//        $this->ckeditor->config['toolbar'] = array(
//            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList')
//        );
//        $this->ckeditor->config['language'] = 'it';
        $this->ckeditor->config['width'] = '100%';
        $this->ckeditor->config['height'] = '300px';

//Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor, '../../assets/ckfinder/');
    }

    //put your code here
    function index()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('subjects')
            ->set_subject('Subject')
            ->set_field_upload('subject_icon')
            ->set_field_upload('icon', 'assets/uploads/files')
            ->order_by('subject_id', 'desc')
            ->unset_jquery();
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['active'] = 'dash';
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function add_subject()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('subjects')
            ->set_subject('Subject')
            ->set_field_upload('subject_icon')
            ->set_field_upload('icon', 'assets/uploads/files')
            ->callback_after_upload(array($this,'example_callback_after_upload'))
            ->order_by('subject_id', 'desc')
            ->unset_jquery();
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['active'] = 'ex';
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function settings()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('settings')
            ->set_subject('Settings')
                ->field_type('about_section','text')
            ->set_field_upload('logo')
            ->set_field_upload('logo', 'assets/uploads/logo')
            ->set_field_upload('bg_video')
            ->set_field_upload('video', 'assets/uploads/video')
            ->order_by('setting_id', 'desc')
            ->unset_add()
            ->unset_delete()
            ->unset_read()
            ->unset_columns('youtube_video')
            ->unset_jquery();
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['active'] = 'ex';
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function blogCategory()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('blog_category')
            ->set_subject('Blog Category')
            ->order_by('category_id', 'desc')
            ->unset_jquery();
        $output = $crud->render();
        $data['glosary'] = $output;        
        $data['active'] = 'blog';
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function blog_list()
    {
        
        $data['active'] = 'blog';
        $data['get_all_info'] = $this->common_model->get_all('blogs', 'blog_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'blog/blog_table', $data);
    }

    function add_blog()    
    {
        $data['active'] = 'blog';
        $data['get_category'] = $this->common_model->get_all('blog_category', 'category_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'blog/add_blog', $data);
    }

    function edit_blog($id)
    {
    
        $data['active'] = 'blog';
        $data['get_blog_info'] = $this->common_model->get_all_info_by_id('blogs', $id, 'blog_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'blog/update_blog', $data);
    }

    function save_blog()
    {
        $post = $this->input->post();
//        var_dump($post);die;
        $data['blog_title'] = $post['blog_title'];
        $data['auther_name'] = $post['auther_name'];
        $data['author_email'] = $post['author_email'];
        $data['category_id'] = $post['category_id'];
        $data['short_description'] = $post['short_description'];
        $data['long_description'] = $post['long_description'];
        $data['publication_status'] = $post['publication_status'];

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
        redirect('admin/blog_list');
    }

    function update_blog()
    {
        $post = $this->input->post();
        $id = $post['blog_id'];
//        var_dump($post);die;
        $data['blog_title'] = $post['blog_title'];
        $data['auther_name'] = $post['auther_name'];
        $data['author_email'] = $post['author_email'];
        $data['category_id'] = $post['category_id'];
        $data['short_description'] = $post['short_description'];
        $data['long_description'] = $post['long_description'];
        $data['publication_status'] = $post['publication_status'];

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
        }
        $this->common_model->update('blogs', $data, $id, 'blog_id');
        redirect('admin/blog_list/');
    }

    function expert_list()
    {
//        $skills = $this->common_model->get_all_subject();
//        $crud = new grocery_CRUD();
//        $crud->set_table('expert_details')
//            ->set_subject('Expert Details')
//            ->field_type('language','multiselect',
//                array( "english"  => "English", "hindi" => "Hindi", "bangla" => "Bangla"))
//            ->field_type('skills','multiselect',$skills)
//            ->set_field_upload('experts_image')
//            ->set_field_upload('expert', 'assets/uploads/expert')
//
//            ->order_by('expert_id', 'desc')
//            ->unset_jquery();
////        $crud->unique_fields('name');
//        $output = $crud->render();
//        $data['glosary'] = $output;
        $data['get_all_info'] = $this->common_model->get_all('expert_details', 'expert_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/expert_table', $data);
    }
    function add_expert()
    {
        $data['get_subjects'] = $this->common_model->get_all('subjects', 'subject_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/add_expert', $data);
    }

    function save_expert(){
        $post = $this->input->post();
//        var_dump($post);die;
        $data['expert_name'] = $post['expert_name'];
        if(!empty($post['language'])) {
            $data['skills'] = implode(',', $post['skills']);
        }
        $data['expert_designation'] = $post['expert_designation'];
        if(!empty($post['language'])) {
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
        } else {
            $data['experts_image'] = '';
        }

        $expet_id = $this->common_model->insert('expert_details',$data);
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
    function edit_expert($id)
    {
        $data['get_subjects'] = $this->common_model->get_all('subjects', 'subject_id');
        $data['get_all_info'] = $this->common_model->get_all_info_by_id('expert_details',$id, 'expert_id');
        $data['geExpertSchedule'] = $this->common_model->geExpertSchedule($id);
//        var_dump($data['geExpertSchedule']);die;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/edit_expert', $data);
    }

    function update_expert(){
        $post = $this->input->post();
//        var_dump($post);die;
        $id = $post['expert_id'];
        $data['expert_name'] = $post['expert_name'];

        if(!empty($post['language'])) {
            $data['skills'] = implode(',', $post['skills']);
        }
        $data['expert_designation'] = $post['expert_designation'];
        if(!empty($post['language'])) {
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

        $expet_id = $this->common_model->update('expert_details',$data,$id,'expert_id');
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

    function services(){
        $crud = new grocery_CRUD();
        $crud->set_table('services')
            ->set_subject('Services')
            ->set_field_upload('icon')
            ->order_by('service_id', 'desc')
            ->unset_add()
            ->unset_delete()
            ->unset_jquery();
        $output = $crud->render();
        $data['glosary'] = $output;
//        $data['get_all_info'] = $this->common_model->get_all('blogs', 'blog_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function book_download(){
        $crud = new grocery_CRUD();
        $crud->set_table('book_download')
            ->set_subject('Book Download')
            ->set_field_upload('book_front_image')
//            ->callback_after_upload(array($this,'example_callback_after_upload'))
            ->set_field_upload('book_download_file')
            ->order_by('book_id', 'desc')
            ->unset_jquery();
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function expert_schedule(){
        $data['experts'] = $this->common_model->get_all('expert_details','expert_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/add_expert_schedule', $data);
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

    function example_callback_after_upload($uploader_response,$field_info, $files_to_upload)
    {
        $this->load->library('Image_moo');
//Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;

        $this->Image_moo->load($file_uploaded)->resize(800,600)->save($file_uploaded,true);

        return true;
    }

}
