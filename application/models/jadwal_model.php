<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function list_transaksi($id_lap,$tgl_booking){
		$query = "SELECT * FROM transaksi WHERE id_lapangan='$id_lap' AND tgl_booking='$tgl_booking'";
		$data = $this->db->query($query);
		
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return FALSE;
		}

    }

    public function jadwal_lapangan($id_lap){
    	$query = "SELECT * FROM lapangan WHERE id_lap='$id_lap'";
    	$data = $this->db->query($query);
    	return $data->result_array();
    }
}