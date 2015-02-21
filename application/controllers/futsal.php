<?php
/**
* 
*/
class Futsal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function listfutsal(){

		// data lokasi / kota	
			$this->load->model('lokasi_model');
			$lokasi = $this->lokasi_model->daftar_lokasi();
			foreach ($lokasi as $item) {
				$kota['kota'][0]="-Pilih Lokasi-";
				$kota['kota'][$item['id_lokasi']]=$item['nama_lokasi'];
			}
		
		// data list tempat futsal
			$this->load->model('futsal_model');
			$futsal = $this->futsal_model->list_futsal();	
			
		// parsing isi tabel
			$data['futsal']=$futsal;
			$data['kota']=$kota;
			

			$this->load->view('header');
			$this->load->view('daftar_tempat',$data);
			$this->load->view('footer');		
	}


	public function profile(){
			$id_futsal= $_GET['id'];
			$this->load->model('futsal_model');

		// data tempat futsal 
			$futsal = $this->futsal_model->profile_futsal($id_futsal);

	    // data lapangan
			$lapangan = $this->futsal_model->jadwal_futsal($id_futsal);
			
		// parsing dua tabel
			$data['futsal'] = $futsal;
			$data['lapangan'] = $lapangan; 			


			$this->load->view('header');
			$this->load->view('tempat_futsal',$data);
			$this->load->view('footer');
	}



}