<?php
/**
* 
*/
class Users_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	public function fetch_all_users_groups(){
        $query = $this->db->select('*')
            ->from('users_groups')
            ->where('group_id', 3)
            ->get();

        if($query->num_rows() > 0){
            return $query->result_array();
        }

        return false;
    }

    public function count_all_users_groups(){
        $query = $this->db->select('*')
            ->from('users_groups')
            ->where('group_id', 3)
            ->get();

        return $query->num_rows();
    }
}