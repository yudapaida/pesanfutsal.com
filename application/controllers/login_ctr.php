<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ctr extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('curl');
		$this->load->library('recaptcha');
		//load sessions adn connect to database
	}

	private $data = array('file' =>"", 'data' =>array() );

	public function masuk(){
		//recaptcha
		$secret='6LcoQwETAAAAAM4iOH5MgzEWFfsw2la7w9UzSiwD';
		$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
		$response = $this->curl->simple_get($url);

		$status= json_decode($response, true);
		$publickey= "6LcoQwETAAAAAGZ6IQ7R4Y3yJrQgDPVWFHsDxQpf";
		$this->recaptcha->recaptcha_get_html($publickey);
		

		$username= $_POST['username'];
		$password= $_POST['password'];
		$this->load->model('login_model','login'); //rename login_model jadi login
		$data=$this->login->login($username,$password); //manggil model dan fungsinya

		//direct ke halaman sesuai group usernya
		if($data == "admin"){
			// redirect('admin_ctr/view_operator');
			echo "admin";
		}
		if($data == "operator"){
			// redirect('lapangan_crud/view_lap');
			echo "operator";
		}
		if($data == "user"){
			redirect('page_ctr/daftar_tempat');	
			echo "user";
		}
		else{
			// redirect('page_ctr/index');
			"login gagal";
		}
		
	}

	public function logout(){
		$this->session->unset_userdata(array('username'=>""));
		$this->session->sess_destroy();
		redirect(base_url());
	}

	 
}