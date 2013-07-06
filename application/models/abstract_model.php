<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Abstract_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();        
    }

    /**
     * @since 2013/06/22
     * @desc get all
     * @author Phuc Duong <duongbaphuc@gmail.com>
     * @param string $table
     * @param int $offset 
     * @param int $limit
     * @param string $sort
     * @return object 
     */ 
    function fetchAll($table, $offset = null, $limit = null, $sort = null) {
        if (empty($table)) {
            return FALSE;
        }
        if (!empty($offset) && !empty($limit)) {
            $this->db->limit($limit, $offset);
        }
        if (!empty($sort)) {
            $query = $this->db->order_by($sort, "DESC");
        }
        $query = $this->db->get($table);
        return $query->result_array();
    }

     /**
     * @since 2013/06/22
     * @desc add data
     * @author Phuc Duong <duongbaphuc@gmail.com>
     * @param array $data
     * @param string $table     
     * @return int 
     */ 
    function add($data, $table) {
        if (!empty($data) && is_array($data) && !empty($table)) {
            $data['createdby'] = USER_ID;
            return $this->db->insert($table, $data);
        }
        return FALSE;
    }    

    /**
     * @since 2013/06/22
     * @author Phuc Duong
     * @param array $where array ("id"=>$id)
     * @param string $table Description
     * @return boolean
     */
    function delete($table, $where) {
        $data = $this->getOneRow($table, $where);
        if (!empty($data)) {
            return $this->db->delete($table, $where);
        }
        return FALSE;
    }

    function fetchOneRow($table, $where = NULL) {
        if(!empty($where)){
            $this->db->where($where);
        }
        $query = $this->db->get($table, 1);
        return $query->row_array();
    }

    /**
     * @since 2013/06/22
     * @author Phuc Duong
     * @param array $where array ("id"=>$id)
     * @param string $table Description
     * @param array $where
     * @return boolean
     */
    function edit($data, $table, $where) {
        if(!empty($data) && !empty($table) && is_array($data)){
            if(!empty($where)){
                return $this->db->update($table, $data, $where);
            }else{
                return $this->db->update($table, $data);
            }
        }
        return FALSE;        
    }        

}

?>