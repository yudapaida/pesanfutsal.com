<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Futsal_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	public function list_futsal(){
		$query = $this->db->query('select * from operator WHERE status="confirmed"');
		return $query->result_array();
	}

}