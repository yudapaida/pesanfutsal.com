<?php
	/**
	* 
	*/
	class Index_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
	
		public function new_comer(){
			$query = "SELECT * from operator ORDER BY id_futsal DESC LIMIT 4";
			$data = $this->db->query($query);

			return $data->result_array();
		}

		public function popular(){
			$query = "SELECT nama_futsal,operator.id_futsal,operator.gambar, count(transaksi.id_futsal) as jumlah FROM transaksi,operator WHERE transaksi.id_futsal=operator.id_futsal GROUP BY operator.nama_futsal ORDER BY jumlah DESC LIMIT 4";
			$data = $this->db->query($query);

			return $data->result_array();
		}


	}

?>