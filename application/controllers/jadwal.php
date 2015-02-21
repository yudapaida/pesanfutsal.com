<?php
/**
* 
*/
class Jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function lihat_jadwal(){
		$tgl = $this->input->post('tgl');
		$id_futsal = $this->input->post('id');

		$this->load->model('jadwal_model');
		$transaksi = $this->jadwal_model->lihat_transaksi($id_futsal,$tgl);

		foreach ($transaksi as $item) {
			echo '<p>'.$transaksi['status'].' </p>';
		}

	}
}