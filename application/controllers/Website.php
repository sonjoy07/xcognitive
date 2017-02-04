<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('website_model');
        $this->load->model('common_model');
//        $data['get_all_menu']=$this->common_model->get_all('main_menu');
//        $data['all_category'] = $this->welcome_model->all_category();
//        $data["mainContent"] = $this->load->view($this->config->item('WEBSITE_THEME') .'empty', $data);
    }

    function index()
    {
        $data['get_blogs']= $this->website_model->get_published_blog();
        $data['subjects'] = $this->website_model->get_all('subjects');
        $data['settings'] = $this->website_model->get_all_setting();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'welcome', $data);
    }

    function expert()
    {
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'expert', $data);
    }

    function blog()
    {
        $data['get_last_blog'] = $this->website_model->get_last_blog();
        $data['get_some_blog'] = $this->website_model->get_some_blog();
        $data['latest_post'] = $this->website_model->latest_post();
        $data['latest_category'] = $this->website_model->latest_category();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'blog', $data);
    }

    function blog_details($id)
    {
        $data['comments_by_blog_id'] =$this->website_model->get_comments_by_blog_id($id);

        $data['blog_details'] = $this->common_model->get_all_info_by_id('blogs', $id, 'blog_id');
        $data['latest_post'] = $this->website_model->latest_post();
        $data['latest_category'] = $this->website_model->latest_category();
        $data['theme_asset_url'] = base_url() . $this->config->item('WEBSITE_ASSET');
        $data['Title'] = 'Xcognitive| Experts';
        $data['base_url'] = base_url();
        $this->load->view($this->config->item('WEBSITE_THEME') . 'blog_details', $data);
    }

    function save_comments()
    {
        $data['comments'] = $this->input->post('comment');
        $data['blog_id'] = $this->input->post('blog_id');
        $data['user_id'] = 1;
        $data['comments_date'] = Date('Y-m-d H:s:i');
//        var_dump($data);die;
        $id = $this->website_model->save('comments', $data);
        $info['get_comment'] = $this->common_model->get_all_info_by_id('comments',$id,'comment_id');
        $this->load->view($this->config->item('WEBSITE_THEME') . 'comments', $info);
    }

}
