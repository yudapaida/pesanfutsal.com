<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function lihat_transaksi($id_futsal, $tgl_booking){
		$query = "SELECT jam,status,nama_team FROM transaksi WHERE id_futsal='$id_futsal' AND tgl_booking='$tgl_booking'";
		$data = $this->db->query($query);
		
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return FALSE;
		}

    }
}