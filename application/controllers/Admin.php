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
        if (!$this->tank_auth->is_logged_in()) {         //not logged in
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
            ->order_by('subject_id', 'desc')
            ->unset_jquery();
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
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
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function blog_list()
    {
        $data['get_all_info'] = $this->common_model->get_all('blogs', 'blog_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'blog/blog_table', $data);
    }

    function add_blog()
    {
        $data['get_category'] = $this->common_model->get_all('blog_category', 'category_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'blog/add_blog', $data);
    }

    function edit_blog($id)
    {
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
        $skills = $this->common_model->get_all_subject();
        $crud = new grocery_CRUD();
        $crud->set_table('expert_details')
            ->set_subject('Expert Details')
            ->field_type('language','multiselect',
                array( "english"  => "English", "hindi" => "Hindi", "bangla" => "Bangla"))
            ->field_type('skills','dropdown',$skills)
            ->set_field_upload('experts_image')
            ->set_field_upload('expert', 'assets/uploads/expert')

            ->order_by('expert_id', 'desc')
            ->unset_jquery();
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
//        $data['get_all_info'] = $this->common_model->get_all('blogs', 'blog_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }
    function add_expert()
    {
        $data['get_subjects'] = $this->common_model->get_all('subjects', 'subject_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/add_expert', $data);
    }
    function edit_expert()
    {
//        $data['get_all_info'] = $this->common_model->get_all('blogs', 'blog_id');
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Xcognetive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'expert/expert_table', $data);
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
