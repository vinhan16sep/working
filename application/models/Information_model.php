<?php

class Information_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function fetch_all($type){
        $query = $this->db->select('*')
            ->from($type)
            ->where('is_deleted', 0)
            ->get();

        if($query->num_rows() > 0){
            return $query->result_array();
        }

        return false;
    }

    public function fetch_all_pagination($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('information');
        $this->db->where('is_deleted', 0);
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");

        return $result = $this->db->get()->result_array();
    }

    public function get_all_product($id, $limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('client_id', $id);
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");

        return $result = $this->db->get()->result_array();
    }

    public function fetch_all_by_type($type){
        $query = $this->db->select('*')
            ->from('information')
            ->where('type', $type)
            ->where('is_deleted', 0)
            ->get();

        if($query->num_rows() > 0){
            return $query->result_array();
        }

        return false;
    }

    public function fetch_latest_informations($quantity){
        $query = $this->db->select('*')
            ->from('information')
            ->where('is_deleted', 0)
            ->order_by('created_at', 'desc')
            ->limit($quantity)
            ->get();

        if($query->num_rows() > 0){
            return $query->result_array();
        }

        return false;
    }

    public function count_all() {
        $query = $this->db->select('*')
            ->from('information')
            ->where('is_deleted', 0)
            ->get();

        return $query->num_rows();
    }

    public function count_informations() {
        $query = $this->db->select('*')
            ->from('information')
            ->get();

        return $query->num_rows();
    }

    public function count_companys() {
        $query = $this->db->select('*')
            ->from('company')
            ->get();

        return $query->num_rows();
    }

    public function count_all_product() {
        $query = $this->db->select('*')
            ->from('product')
            ->get();

        return $query->num_rows();
    }

    public function count_product($id) {
        $query = $this->db->select('*')
            ->from('product')
            ->where('client_id', $id)
            ->get();

        return $query->num_rows();
    }

    public function fetch_by_id($type, $id){
        $query = $this->db->select('*')
            ->from($type)
            ->where('id', $id)
            ->where('is_deleted', 0)
            ->limit(1)
            ->get();

        if($query->num_rows() == 1){
            return $query->row_array();
        }

        return false;
    }

    public function fetch_by_user_id($type, $id){
        $query = $this->db->select('*')
            ->from($type)
            ->where('client_id', $id)
            ->limit(1)
            ->get();

        if($query->num_rows() == 1){
            return $query->row_array();
        }

        return false;
    }

    public function fetch_product_by_user_and_id($type, $user_id, $id){
        $query = $this->db->select('*')
            ->from($type)
            ->where('id', $id)
            ->where('client_id', $user_id)
            ->limit(1)
            ->get();

        if($query->num_rows() == 1){
            return $query->row_array();
        }

        return false;
    }

    public function insert($type, $data){
        $this->db->set($data)
            ->insert($type);

        if($this->db->affected_rows() == 1){
            return $this->db->insert_id();
        }

        return false;
    }

    public function insert_company($type, $data){
        $this->db->set($data)
            ->insert($type);

        if($this->db->affected_rows() == 1){
            return $this->db->insert_id();
        }

        return false;
    }

    public function insert_product($type, $data){
        $this->db->set($data)
            ->insert($type);

        if($this->db->affected_rows() == 1){
            return $this->db->insert_id();
        }

        return false;
    }

    public function update($type, $id, $information){
        $this->db->set($information)
            ->where('id', $id)
            ->update($type);

        if($this->db->affected_rows() == 1){
            return true;
        }

        return false;
    }

    public function delete($type, $id){
        $this->db->set('is_deleted', 1)
            ->where('id', $id)
            ->update($type);

        if($this->db->affected_rows() == 1){
            return true;
        }

        return false;
    }

    public function fetch_all_company_pagination($limit = NULL, $start = NULL) {
        $this->db->select('company.*, users.company as company');
        $this->db->from('company');
        $this->db->join('users', 'users.id = company.client_id');
        $this->db->limit($limit, $start);
        $this->db->order_by("company.id", "desc");

        return $result = $this->db->get()->result_array();
    }

    public function fetch_company_by_id($id){
        $this->db->select('company.*, users.*, information.*');
        $this->db->from('company');
        $this->db->join('users', 'users.id = company.client_id');
        $this->db->join('information', 'information.client_id = company.client_id');
        $this->db->where('company.id', $id);
        $this->db->where('company.is_submit', 1);
        return $result = $this->db->get()->row_array();
    }
}