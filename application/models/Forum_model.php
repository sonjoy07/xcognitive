<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Forum_model
 *
 * @author sonjoy
 */
class Forum_model extends CI_Model
{
    //put your code here
    function get_forum_category(){
		return $this->db->where('publication_status',1)->get('forum_category')->result();
	}
	function get_forum_by_forum_id($id){
		return $this->db->where('forum_id',$id)->get('forum')->row();
	}
}
