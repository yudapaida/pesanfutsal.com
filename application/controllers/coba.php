<?php
/**
* 
*/
class Coba extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function popular(){
		$this->load->model('coba_model');
		$data = $this->coba_model->popular();

		print_r($data);
	}
}

?>