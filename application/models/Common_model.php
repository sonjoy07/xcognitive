<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common_model
 *
 * @author sonjoy
 */
class Common_model extends CI_Model{
    //put your code here
    public function insert($table,$data){
        $this->db->insert($table,$data);
    }
    public function update($table, $data,$idk,$id_name){
        $this->db->where($id_name,$id)->update($table,$data);
    }
    public function get_all_info_by_id($table,$id,$id_name){
        return $this->db->where($id_name,$id)->get($table)->row();
    }
    public function get_all($table,$name){
        return $this->db->order_by($name,'desc')->get($table)->result();
    }
    function get_all_subject(){
        $subjects =  $this->db->get('subjects')->result_array();
        $data = array();
        foreach ($subjects as $subject){
            $data[$subject['subject_id']] = $subject['subject_name'];
        }
        return $data;
    }
}
