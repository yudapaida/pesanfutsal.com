<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	

	    public function insert_member()
	    {

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

	    
	    public function insert_admin($filename)
	    {
	    	$query ="SELECT max(id_user)+1 as id from user";
			$foreign = $this->db->query($query);
			foreach ($foreign->result() as $key) {
				$coba = $key->id;
			}

			//insert data user
			$password =$_POST['password'];
			$data_user['username']=$_POST['username'];
			$data_user['password'] = md5($password);
			$data_user['role'] = 'operator';
			$insert_user = $this->db->insert('user', $data_user);

			//insert data member
			$data['nama_futsal']=$_POST['nama_futsal'];
			$data['alamat']=$_POST['alamat'];
			$data['id_kota'] =$_POST['id_kota'];
			$data['no_rek'] =$_POST['no_rek'];
			$data['phone'] = $_POST['phone'];
			$data['deskripsi']=$_POST['deskripsi'];
			$data['gambar']=$filename;
			$data['id_user']= $coba;

		

			$result = $this->db->insert('operator', $data);
		
			
			
			return $insert_user && $result;
	    }

		public function view_transaksi()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT transaksi.id_transaksi,transaksi.tgl_booking as 'tgl', member.first_name as 'first' , member.last_name as 'last', operator.nama_futsal as 'futsal', lapangan.nama_lap as 'lapangan', transaksi.jam as 'jam' ,transaksi.harga as 'harga', transaksi.status as 'status' FROM member,operator,lapangan,transaksi,user WHERE user.id_user=member.id_user AND member.id_member=transaksi.id_member AND operator.id_futsal=transaksi.id_futsal AND transaksi.id_lapangan=lapangan.id_lap AND username='$username' order by id_transaksi";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function view_profile()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT first_name as 'first', last_name as 'last', id_card as 'card', ttl, team_name as 'team', address, phone FROM user, member WHERE user.id_user=member.id_user AND username='$username'";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function update_profile($first_name,$last_name,$id_card,$ttl,$team_name,$address,$phone)
		{
			$username = $this->session->userdata('akun');
			$queryuser = "SELECT member.id_user as 'id' FROM user,member WHERE member.id_user=user.id_user AND username='$username'";
			$id_user = $this->db->query($queryuser);
			foreach ($id_user->result() as $key) {
				$coba = $key->id;
			}
			$query="UPDATE member SET first_name='$first_name',
									 last_name='$last_name',
									 id_card='$id_card',
									 ttl='$ttl',
									 team_name='$team_name',
									 address='$address',
									 phone='$phone'
				where id_user=$coba";
		$result=$this->db->query($query);
		return TRUE;
		}

		public function change_password()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT username,password FROM user WHERE username='$username'";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function update_password($username,$pass_lama,$pass_baru,$pass_baru2)
		{
			$query_old_pass = "SELECT password FROM user WHERE username='$username'";
			$old_pass = $this->db->query($query_old_pass);
			foreach ($old_pass->result() as $key) {
				$coba = $key->password;
			}
			$pass_lama = md5($pass_lama);
			if ($pass_lama != $coba) {
				// echo "password lama beda";
				// $data['alert'] ="COba Alert";
				redirect('member/password');
				// // $data = "FALSE";
				// return FALSE;
			}
			elseif ($pass_baru != $pass_baru2) {
				// echo "password baru beda";
				redirect('member/password');
			}
			else {
				$query = "UPDATE user SET password=md5('$pass_baru') WHERE username='$username'";
				$data = $this->db->query($query);
				// redirect('member');
				return TRUE;
			}
		}

		public function konfirmasi_bayar($id_transaksi)
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT transaksi.id_transaksi,transaksi.tgl_booking as 'tgl', member.first_name as 'first' , member.last_name as 'last', operator.nama_futsal as 'futsal', lapangan.nama_lap as 'lapangan', transaksi.jam as 'jam' ,transaksi.harga as 'harga', transaksi.nama_team as'team' FROM member,operator,lapangan,transaksi,user WHERE user.id_user=member.id_user AND member.id_member=transaksi.id_member AND operator.id_futsal=transaksi.id_futsal AND transaksi.id_lapangan=lapangan.id_lap AND transaksi.id_transaksi=$id_transaksi AND username='$username' order by id_transaksi";
			$data = $this->db->query($query);
			return $data->result_array();
		}
}