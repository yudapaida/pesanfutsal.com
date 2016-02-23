<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ctr extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('curl');
		$this->load->library('recaptcha');
		$this->load->library('session');
		//load sessions adn connect to database
	}

	private $data = array('file' =>"", 'data' =>array() );

	public function masuk(){
		//get input from user
		$username= mysql_real_escape_string($_POST['username']);
		$password= mysql_real_escape_string($_POST['password']);

		//recaptcha

		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		$userIp = $this->input->ip_address();

		$publickey= "6LcoQwETAAAAAGZ6IQ7R4Y3yJrQgDPVWFHsDxQpf";
		$this->recaptcha->recaptcha_get_html($publickey);
		$secret='6LcoQwETAAAAAM4iOH5MgzEWFfsw2la7w9UzSiwD';
		$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
		

		$response = $this->curl->simple_get($url);
		$status= json_decode($response, true);
		
		// print_r($response);
		// die();

		
			$this->load->model('login_model','login'); 		//rename login_model jadi login
			$data=$this->login->login($username,$password); //manggil model dan fungsinya

			if($data==FALSE){
				// error messange
				$data['error'] = "Username atau password salah.";

				$this->load->view('header');
				$this->load->view('login_page',$data);
				$this->load->view('footer');
			}
			//direct ke halaman sesuai group usernya
			if($data == "admin"){
				
				$this->session->set_userdata('akun', $username);
				$this->session->set_userdata('level', $data);
				redirect('superadmin');
			}
			if($data == "operator"){
				
				$this->session->set_userdata('akun', $username);
				$this->session->set_userdata('level', $data);
				redirect('admin');
			}
			if($data == "user"){
				
				$this->session->set_userdata('akun', $username);
				$this->session->set_userdata('level', $data);
				redirect('futsal/listfutsal');
			}
			else
			{
				"login gagal";
			}				
	}

	public function logout(){
		$this->session->unset_userdata(array('username'=>""));
		$this->session->sess_destroy();
		redirect(base_url());
	}

	 
}