<?php
	/**
	* 
	*/
	class Transaksi_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function insert_konfirmasi($filename)
		{

			$data['nama_member'] = $_POST['nama_user'];
			$data['nama_team'] =$_POST['nama_team'];
			$data['lokasi'] = $_POST['lokasi'];
			$data['lapangan'] = $_POST['lapangan'];
			$data['tgl_booking'] =$_POST['tgl_booking'];
			$data['jam'] = $_POST['jam_mulai'];
			$data['harga'] = $_POST['harga'];
			$data['gambar'] = $filename;
			$data['id_transaksi'] = $_POST['id_transaksi'];

			$result = $this->db->insert('konfirmasi',$data);
		}
	}
?>