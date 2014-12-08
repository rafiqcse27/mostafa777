<?php

class Profile_m extends MY_Model {

    public $_table = 'users';
    protected $_table_name = 'users';
    protected $_order_by = 'id desc';
    protected $_timestamps = False;
    public $primary_key = 'id';
    public $rules = array(
        'username' => array(
            'field' => 'username',
            'label' => 'Name',
            'rules' => 'trim|required|min_length[3]|xss_clean'
        ),
        'phone' => array(
            'field' => 'phone',
            'label' => 'Mobile No',
            'rules' => 'trim|required|min_length[3]|is_numaric|xss_clean'
        ),
       
    );

    public function __construct() {
        parent::__construct();
        $this->_database = $this->db;
    }

    public function get_new() {
        $profile = new stdClass();
        $profile->name = '';
        $profile->phone = '';
        $profile->location = '';
        $profile->joining_date = date('Y-m-d');
        $profile->career_onjective = '';
        $profile->publication = '';
        $profile->experience_details = '';
        $profile->education_details = '';
        $profile->research_interest = '';
        return $profile;
    }
    public function get_associate_lecture($id){
        $where_array=  array('lectures_and_results.user_id' => $id, 'lectures_and_results.active' => '1');
        $this->db->select('lectures_and_results.id AS lrid, lectures_and_results.user_id, lectures_and_results.course_code, lectures_and_results.title, lectures_and_results.created, lectures_and_results.type, lectures_and_results.slug, lectures_and_results.year, lectures_and_results.session, lectures_and_results.content, lectures_and_results.attachment1, lectures_and_results.attachment2, lectures_and_results.attachment3, lectures_and_results.created, lectures_and_results.modified, lectures_and_results.active, courses.id AS course_id, courses.course_code, courses.course_title, users.id, users.username');
        $this->db->from('lectures_and_results');
        $this->db->join('courses', 'lectures_and_results.course_code = courses.id');
        $this->db->join('users', 'lectures_and_results.user_id = users.id');
        $this->db->where($where_array);
        $this->db->order_by('lectures_and_results.id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function get_single($id) {
        $where_array = array('active' => '1', 'id' => $id);
        $this->db->where($where_array);

        $query = $this->db->get('users');
   
        return $query->result_array();
    }

}
