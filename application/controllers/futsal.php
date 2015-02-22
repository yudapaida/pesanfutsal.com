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


	public function register()
	{
		$this->load->view('header');
		$this->load->view('user_reg');
		$this->load->view('footer');
	}


	public function login()
	{
		$this->load->view('header');
		$this->load->view('login_page');
		$this->load->view('footer');
	}

	public function memberarea(){
		$this->load->view('header');
		$this->load->view('member_page');
		$this->load->view('footer');
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
			

		// data tempat futsal
			$this->load->model('futsal_model'); 
			$futsal = $this->futsal_model->profile_futsal($id_futsal);

	   	// data lapangan
			$lapangan = $this->futsal_model->list_lapangan($id_futsal);
			foreach ($lapangan as $item) {
				$lap['lapangan'][0]="-Pilih Lapangan-";
				$lap['lapangan'][$item['id_lap']] = $item['nama_lap'];
			}

		// parsing data
			$data['futsal'] = $futsal;
			$data['lapangan'] = $lap;
		 			
			$this->load->view('header');
			$this->load->view('tempat_futsal',$data);
			$this->load->view('footer');
	}



}