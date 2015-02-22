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

}