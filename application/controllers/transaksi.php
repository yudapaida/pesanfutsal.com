<?php
	/**
	* 
	*/
	class Transaksi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('transaksi_model');
		}

		public function do_upload()
		{
			//memasukkan data operator dan upload gambar
			$config['upload_path'] = './assets/image/konfirmasi/';
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
					$this->transaksi_model->insert_konfirmasi($filename);
				}
				//$this->load->view('berhasil');
				redirect('member');
			}
		}

		public function insert_konfirmasi()
		{
			$id_transaksi =$_GET['no'];
			$this->do_upload();
			$this->transaksi_model->insert_konfirmasi($id_transaksi);
			redirect('member');
		}
	}
?>