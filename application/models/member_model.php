<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	

    public function insert_member(){

    // Buat forign_key id_user untuk tabel member
    	$query ="SELECT max(id_user)+1 as id from user";
		$foreign = $this->db->query($query);
		foreach ($foreign->result() as $key) {
			$coba = $key->id;
		}

	// insert data ke tabel user
		$password =$_POST['password'];
		$data_user['username']=$_POST['username'];
		$data_user['password'] = md5($password);
		$data_user['role'] = 'user';
		$insert_user = $this->db->insert('user', $data_user);

	// insert data ke tabel member
		$data['first_name']=$_POST['first_name'];
		$data['last_name']=$_POST['last_name'];
		$data['id_card']=$_POST['id_card'];
		$data['ttl']=$_POST['ttl'];
		$data['team_name']=$_POST['team_name'];
		$data['address']=$_POST['address'];
		$data['phone']=$_POST['phone'];
		$data['id_user']= $coba;
		$insert_member =  $this->db->insert('member', $data);

		return $insert_user && $insert_member;
    }
}