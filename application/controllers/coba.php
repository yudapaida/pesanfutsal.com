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
		$this->load->model('index_model');
		$data = $this->index_model->popular();

		print_r($data);
	}
}

?>