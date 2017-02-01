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
    }
    //put your code here
    function index() {
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Insert Info';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }
    
    function blogCategory(){
        $crud = new grocery_CRUD();
        $crud->set_table('blog_category')
                ->set_subject('Blog Category')
                ->order_by('category_id','desc');
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Insert Info';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }
    function blogs(){
        $crud = new grocery_CRUD();
        $crud->set_table('blogs')
                ->set_subject('Blog ')
                ->order_by('blog_id','desc');
//        $crud->unique_fields('name');
        $output = $crud->render();
        $data['glosary'] = $output;
        $data['theme_asset_url'] = base_url() . $this->config->item('THEME_ASSET');
        $data['Title'] = 'Insert Info';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('ADMIN_THEME') . 'starter', $data);
    }
    

}
