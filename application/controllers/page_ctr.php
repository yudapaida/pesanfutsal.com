<?php
/**
* 
*/
class Page_ctr extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login_page()
	{
		$this->load->view('header');
		$this->load->view('login_page');
		$this->load->view('footer');
	}

	public function user_reg()
	{
		$this->load->view('header');
		$this->load->view('user_reg');
		$this->load->view('footer');
	}

	public function member_area(){
		$this->load->view('header');
		$this->load->view('member_page');
		$this->load->view('footer');
	}
}
?>