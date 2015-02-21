<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Lokasi_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	public function daftar_lokasi(){
		$query = $this->db->query('SELECT * FROM lokasi');
		return $query->result_array();
	}

}