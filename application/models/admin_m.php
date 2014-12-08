<?php

class admin_m extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function get_undone_todo($user_id) {
        $this->db->select()->from('todo')->where(array('user_id' => $user_id, 'status' => 0))->order_by('todoID', 'desc');
        //get the results
        $query = $this->db->get();
        // return results
        return $query->result_array();
    }
    function get_undone_count($user_id) {
        $this->db->select()->where(array('user_id' => $user_id, 'status' => 0))->order_by('todoID', 'desc');
        //get the results
        $query = $this->db->count_all_results('todo');
        return $query;
    }
     function get_total_count($user_id) {
        $this->db->select()->where(array('user_id' => $user_id))->order_by('todoID', 'desc');
        //get the results
        $query = $this->db->count_all_results('todo');
        return $query;
    }
   

}