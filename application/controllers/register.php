<?php
/**
* 
*/
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


	public function member(){

			$this->load->model('member_model');
			$this->member_model->insert_member();
			redirect(base_url());
		
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
			$this->load->library('image_lib');
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
					$this->member_model->insert_admin($filename);
				}
				//$this->load->view('berhasil');
				

				//resize 
				$fileNameResize = $config['upload_path'].$filename;
				$size=array(
						array('name'	=> 'thumb','width'	=> 72, 'height'	=> 72, 'quality'	=> '100%')
					);
				$resize = array();
				foreach($size as $r){	
				$resize = array(
					"width" => $r['width'],
					"height" => $r['height'],
					"quality" => $r['quality'],
					"source_image" => './assets/image/futsal/'.$filename,
					"new image" => './assets/image/icon/'.$filename
					);
				$this->image_lib->initialize($resize);
				$this->image_lib->resize();
				}

				redirect(base_url());
			}
		}


	public function adminfutsal()
	{
		$this->load->model('member_model');
		$this->do_upload();
		$this->member_model->insert_admin();
		redirect(base_url());
	}

}