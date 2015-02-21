<?php
/**
* 
*/
class Page_ctr extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function daftar_tempat()
	{
		// ambil daftar kota	
			$this->load->model('lokasi_model');
			$lokasi = $this->lokasi_model->daftar_lokasi();
			foreach ($lokasi as $item) {
				$kota['kota'][0]="-Pilih Lokasi-";
				$kota['kota'][$item['id_lokasi']]=$item['nama_lokasi'];
			}
		
		// ambil daftar tempat futsal
			$this->load->model('futsal_model');
			$futsal = $this->futsal_model->list_futsal();	
			
		// parsing isi tabel
			$data['futsal']=$futsal;
			$data['kota']=$kota;
			

			$this->load->view('header');
			$this->load->view('daftar_tempat',$data);
			$this->load->view('footer');
		
	}

	public function login_page()
	{
		$this->load->view('header');
		$this->load->view('login_page');
		$this->load->view('footer');
	}

	public function user_reg()
	{
		$this->load->view('header');
		$this->load->view('user_reg');
		$this->load->view('footer');
	}

	public function tempat_futsal()
	{
		$this->load->view('header');
		$this->load->view('tempat_futsal');
		$this->load->view('footer');
	}
	public function member_area(){
		$this->load->view('header');
		$this->load->view('member_page');
		$this->load->view('footer');
	}
}
?>