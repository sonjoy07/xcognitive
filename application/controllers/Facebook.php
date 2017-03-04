<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Facebook
 *
 * @author sonjoy
 */
class Facebook extends CI_Controller{
    //put your code here
    private $fb;
    public function __construct() {
        parent::__construct();
        $this->load->library('facebooksdk');
        $this->fb = $this->facebooksdk;
    }
    
    public function login(){
        $url = $this->fb->getLoginUrl();
    }
}
