<?php
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
			if(!$this->session->userdata('akun'))
			{
				redirect('futsal/login');
			}
		}

		public function index()
		{
			$data = $this->admin_model->view_konfirmasi();
			$data['data'] = $data;

			$this->load->view('header_admin');
			$this->load->view('admin_page',$data);
			$this->load->view('footer');
		}

		public function konfirmasi_status()
		{
			$id_transaksi=$_GET['no'];
			$this->admin_model->konfirmasi($id_transaksi);
			redirect('admin');
		}

		public function lapangan()
		{
			$data = $this->admin_model->view_lap();
			$data['data']=$data;

			$this->load->view('header_admin');
			$this->load->view('view_lapangan',$data);
			$this->load->view('footer');
		}

		public function delete_lap()
		{
			$id_lap=$_GET['no'];
			$this->admin_model->delete_lap($id_lap);
			redirect('admin/lapangan');
		}

		public function tambah_lap()
		{
			$this->load->view('header_admin');
			$this->load->view('tambah_lapangan');
			$this->load->view('footer');
		}

		public function insert_lap()
		{
			$this->admin_model->insert_lap();
			redirect('admin/lapangan');
		}

		public function edit_lap()
		{
			$id_lap=$_GET['no'];
			$data["lapangan"] = $this->admin_model->get_lapangan($id_lap);

			$this->load->view('header_admin');
			$this->load->view('update_lapangan',$data);
			$this->load->view('footer');
		}

		public function update_lap()
		{
			$id_lap=$_GET['no'];
			$result=$this->admin_model->update_lap($id_lap,$_POST['nama_lap'],$_POST['deskripsi'],
			$_POST['pagi'],$_POST['siang'],$_POST['malam']);
		
			if($result){
				redirect('admin/lapangan');
			}
		}
	}
?>