<?php

class Data_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_record(){
        //$query = $this->db->query("SELECT * from patient");
        $query = $this->db->get("patient");
        
        $result = $query->result_array();
        return $result;
    }
}

?>