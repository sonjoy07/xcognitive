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

    function get_some_blog_by_category_id($id){
        return $this->db->limit(10)->where('category_id',$id)->order_by('blog_id', 'desc')->get('blogs')->result();
    }

    function getArchivesValue()
    {
        $years = $this->db->select('*,Year(published_date) as year,Month(published_date) as month,COUNT(*) AS TOTAL')->group_by('year,month')->order_by('blog_id','desc')->get('blogs')->result();
        $i = 0;
        foreach ($years as $year){
            $y = $year->year;
            $m = $year->month;
            $years[$i]->posts=$this->db->where('Year(published_date)',$y)->where('Month(published_date)',$m)->get('blogs')->result();
            $i++;
        }
        return $years;
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

    function get_subjects()
    {
        $sql = "select * from subjects  order by rand() limit 5 ";
        return $this->db->query($sql)->result();
    }

    function get_info_by_id($id, $table_name, $name)
    {
        return $this->db->where($name, $id)->get($table_name)->row();
    }

    function get_published_services()
    {
        return $this->db->where('publication_status', 1)->get('services')->result();
    }

    function get_user_type($user_id)
    {
        return $this->db->where('user_id', $user_id)->get('user_type')->row();
    }

    function getSubjectWiseExpert($subject)
    {
        $results = $this->db->get('expert_details')->result();
        $data = array();
        foreach ($results as $result) {
//            echo gettype($result);
            $skills = explode(',', $result->skills);
            if (is_array($skills)) {
                foreach ($skills as $skill) {
                    if ($skill == $subject) {
                        $data['skills'] = $this->db->where('expert_id', $result->expert_id)->get('expert_details')->result();
                    }
                }
            }
            $data['skillss'] = $this->db->where('skills', $subject)->get('expert_details')->result();


        }
        return $data;

    }
     function get_user_info($user_id){
        return $this->db->where('id',$user_id)->get('users')->row();
     }
     function get_user_profile($user_id){
        return $this->db->where('user_id',$user_id)->get('user_info')->row();
     }

     function getSearchDetails($search){
         return $this->db->like('blog_title',$search)->or_like('short_description',$search)->or_like('long_description')->get('blogs')->result();
     }

     function get_all_published_book_download(){
         return $this->db->where('publication_status',1)->get('book_download')->result();
     }
}
