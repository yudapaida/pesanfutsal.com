<?php
	/**
	* 
	*/
	class Member extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('member_model');
			if(!$this->session->userdata('akun'))
			{
				redirect('futsal/login');
			}
		}

		public function index()
		{
			$data = $this->member_model->view_transaksi();
			$data['data'] = $data;
			$this->load->view('header');
			$this->load->view('member_page',$data);
			$this->load->view('footer');
		}

		public function profile()
		{
			$data['profile'] = $this->member_model->view_profile();
			$this->load->view('header');
			$this->load->view('edit_profil',$data);
			$this->load->view('footer');
		}

		public function update_profile()
		{
			$result=$this->member_model->update_profile($_POST['first_name'],$_POST['last_name'],
			$_POST['id_card'],$_POST['ttl'],$_POST['team_name'],$_POST['address'],$_POST['phone']);

			if($result){
				redirect('member');
			}
		}

		public function password()
		{
			$data['user'] = $this->member_model->change_password();
			$this->load->view('header');
			$this->load->view('change_password',$data);
			$this->load->view('footer');
		}

		public function update_password()
		{
			$result = $this->member_model->update_password($_POST['username'],$_POST['pass_lama'],$_POST['pass_baru'],$_POST['pass_baru2']);

			if($result){
				redirect('member');
			}
		}
		public function konfirmasi()
		{
			$id_transaksi = $_GET['no'];
			$data = $this->member_model->konfirmasi_bayar($id_transaksi);
			$data['transaksi'] = $data;
			$this->load->view('header');
			$this->load->view('konfirmasi_bayar',$data);
			$this->load->view('footer');
		}
	}
?>