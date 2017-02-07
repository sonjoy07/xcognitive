<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Website_model
 *
 * @author sonjoy
 */
class Website_model extends CI_Model
{
    //put your code here
    function get_last_blog()
    {
        return $this->db->limit(1)->order_by('blog_id', 'desc')->get('blogs')->row();
    }

    function get_some_blog()
    {
        return $this->db->limit(10)->order_by('blog_id', 'desc')->get('blogs')->result();
    }

    function latest_post()
    {
        return $this->db->limit(5)->order_by('blog_id', 'desc')->get('blogs')->result();
    }

    function latest_category()
    {
        return $this->db->limit(5)->order_by('category_id', 'desc')->get('blog_category')->result();
    }

    function get_all($table)
    {
        return $this->db->get($table)->result();
    }

    function save($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function get_comments_by_blog_id($id)
    {
        return $this->db->where('blog_id', $id)->order_by('comment_id', 'desc')->get('comments')->result();
    }

    function get_all_setting()
    {
        return $this->db->get('settings')->row();
    }

    function get_published_blog()
    {
        return $this->db->where('publication_status', 1)->order_by('blog_id', 'desc')->get('blogs')->result();
    }

    function get_experts_info()
    {
        $sql = "select * from expert_details where publication_status = 1 order by rand() limit 3 ";
        return $this->db->query($sql)->result();
    }
    function get_experts_sidebar_suggestion()
    {
        $sql = "select * from expert_details where publication_status = 1 order by rand() limit 5 ";
        return $this->db->query($sql)->result();
    }

    function get_info_by_id($id, $table_name, $name)
    {
        return $this->db->where($name, $id)->get($table_name)->row();
    }
}
