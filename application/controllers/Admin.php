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
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');



        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
//        $this->ckeditor->config['toolbar'] = array(
//            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList')
//        );
//        $this->ckeditor->config['language'] = 'it';
        $this->ckeditor->config['width'] = '100%';
        $this->ckeditor->config['height'] = '300px';

//Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');
    }

    //put your code here
    function index() {
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Insert Info';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function blogCategory() {
        $crud = new grocery_CRUD();
        $crud->set_table('blog_category')
                ->set_subject('Blog Category')
                ->order_by('category_id', 'desc');
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Insert Info';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }

    function add_blog() {
        $crud = new grocery_CRUD();
        $crud->set_table('blogs')
                ->set_subject('Blog ')
                ->order_by('blog_id', 'desc');
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Insert Info';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'blog/add_blog', $data);
    }

}
