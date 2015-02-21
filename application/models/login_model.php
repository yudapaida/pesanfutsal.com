<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login_model extends CI_Model {

    function __construct(){
        parent::__construct();
    	$this->load->database();
    }
	
	function login($username, $password){
		$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'";';
		$hasil=$this->db->query($sql);
		
	
		//print hasil query
		// foreach ($hasil->result() as $data) {
		// 	print_r($data);
		// 	print_r($data->username);
		// }
		// die();

		if($hasil->num_rows() ==1){
			// $data = array('username'=>$username, 'login'=>TRUE);
			
			$this->session->set_userdata('akun', $username);
			
			//return group users
			foreach ($hasil->result_array() as $data) {
				$group = $data['role'];		
			}
			return $group;

		}else {
			echo "username dan password salah";
			return FALSE;
		}
	}

}