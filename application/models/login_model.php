<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login_model extends CI_Model {

    function __construct(){
        parent::__construct();
    	$this->load->database();
    }
	
	function login($username, $password){
		$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'";';
		$hasil=$this->db->query($sql);

		if($hasil->num_rows() ==1){
			
			//return group users
			foreach ($hasil->result_array() as $data) {
				$group = $data['role'];		
			}
			return $group;

		}else {
			return FALSE;
		}
	}

}