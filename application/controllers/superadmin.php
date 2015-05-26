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
			$data = $this->super->view_admin();
			$data['data']=$data;

			$this->load->view('header');
			$this->load->view('superadmin_operator',$data);
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
			$id_user=$_GET['no'];
			$this->super->delete_operator($id_user);
			redirect('superadmin');
		}

		//bagian member
		public function member()
		{
			$data = $this->super->view_member();
			$data['data'] = $data;

			$this->load->view('header');
			$this->load->view('superadmin_member',$data);
			$this->load->view('footer');
		}

		public function edit_member()
		{
			$id_member = $_GET['no'];
			$data['data'] = $this->super->edit_member($id_member);

			$this->load->view('header');
			$this->load->view('superadmin_editmember',$data);
			$this->load->view('footer');
		}

		public function update_member()
		{
			$result=$this->super->update_member($_POST['id_member'],$_POST['first_name'],
			$_POST['last_name'],$_POST['id_card'],$_POST['ttl'],$_POST['team_name'], $_POST['address'], $_POST['phone']);

			if($result){
				redirect('superadmin/member');
			}
		}


		public function hapus_member()
		{
			$id_user = $_GET['no'];
			$this->super->delete_member($id_user);
			redirect('superadmin/member');
		}
	}
?>