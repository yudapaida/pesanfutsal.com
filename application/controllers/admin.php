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

		public function do_upload()
		{
			//memasukkan data operator dan upload gambar
			$config['upload_path'] = './assets/image/futsal/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width']  = '1900';
			$config['max_height']  = '1200';

			// $this->load->model('Crud_model','crud',TRUE);
			// $this->crud->operator_insert();

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload())
			{
			$this->load->view('konfirmasi_bayar');
			}
			else
			{
				$data = array('unggah_data' => $this->upload->data());
				foreach ($data as $value) {
					$filename = $value['file_name'];
					$this->admin_model->insert_lap($filename);
				}
				//$this->load->view('berhasil');
				redirect('admin/lapangan');
			}
		}

		public function tambah_lap()
		{
			$this->load->view('header_admin');
			$this->load->view('tambah_lapangan');
			$this->load->view('footer');
		}

		public function insert_lap()
		{
			$this->do_upload();
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

		public function password()
		{
			$data['user'] = $this->admin_model->change_password();
			$this->load->view('header_admin');
			$this->load->view('change_password_admin',$data);
			$this->load->view('footer');
		}
		public function update_password()
		{
			$result = $this->admin_model->update_password($_POST['username'],$_POST['pass_lama'],$_POST['pass_baru'],$_POST['pass_baru2']);

			// if($result == 'FALSE'){
			// 	// $data['alert'] = "Coba Alert";
			// 	redirect('admin/password');
			// }
			// else {
			// 	redirect('admin');
			// }
			if($result){
				redirect('admin');
			}
		}

		public function profile()
		{
			$this->load->model('lokasi_model');
			$datafutsal['profile'] = $this->admin_model->view_profile();
			$datafutsal['data'] = $this->lokasi_model->daftar_lokasi();
			$this->load->view('header_admin');
			$this->load->view('edit_data_futsal', $datafutsal);
			$this->load->view('footer');
		}

		public function update_profile()
		{
			$result=$this->admin_model->update_profile($_POST['nama_futsal'],$_POST['alamat'],
			$_POST['id_kota'],$_POST['no_rek'],$_POST['phone'],$_POST['deskripsi']);

			if($result){
				redirect('admin');
			}
		}

		public function laporan()
		{
			$this->load->view('header_admin');
			$this->load->view('laporan_admin');
			$this->load->view('footer');
		}
	}
?>