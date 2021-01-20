<?php
class TestModel  extends CI_Model  {


	function __construct()
    {
        parent::__construct();
    }
    public function GetData($key){
     $this->db->like('email', $key);
     $query=$this->db->get('usertable');
     $result=$query->result_array();
     return $result;
     // echo $this->db->last_query();die;

    }
}