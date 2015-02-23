<?php
	/**
	* 
	*/
	class Superadmin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('superadmin_model','super');
		}

		public function index()
		{
			$this->load->view('header');
			$data = $this->super->view_admin();
			$data['data']=$data;
			$this->load->view('superadmin_page',$data);
			$this->load->view('footer');
		}

		public function konfirmasi()
		{
			$id_futsal=$_GET['no'];
			$this->super->konfirmasi($id_futsal);
			redirect('superadmin');
		}

			public function hapus()
		{
			$id_futsal=$_GET['no'];
			$this->super->delete_operator($id_futsal);
			redirect('superadmin');
		}
	}
?>