<?php
	/**
	* 
	*/
	class Superadmin_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function view_admin()
		{
			$query = $this->db->query('SELECT id_futsal,id_user,nama_futsal,alamat, lokasi.nama_lokasi as kota,no_rek,phone,deskripsi,status FROM operator,lokasi WHERE operator.id_kota=lokasi.id_lokasi');
			return $query->result_array();
		}

		public function view_member()
		{
			$query = $this->db->query('SELECT * FROM member');
			return $query->result_array();
		}

		public function delete_operator($id_user)
		{
			$query = "DELETE FROM operator WHERE id_user='$id_user'";
			$this->db->query($query);

			$query2 = "DELETE FROM user WHERE id_user='$id_user'";
			$this->db->query($query2);
		}

		public function konfirmasi($id_futsal)
		{
			$query = "UPDATE operator SET status='confirmed' WHERE id_futsal=$id_futsal";
			$result = $this->db->query($query);
			return TRUE;
		}

		public function delete_member($id_user)
		{
			$query = "DELETE FROM member WHERE id_user='$id_user'";
			$this->db->query($query);

			$query2 = "DELETE FROM user WHERE id_user='$id_user'";
			$this->db->query($query2);
		}

		public function edit_member($id_member)
		{
			$query = "SELECT * FROM member WHERE id_member='$id_member'";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function update_member($id_member,$first_name,$last_name,$id_card,$ttl,$team_name,$address,$phone)
		{
			$query="UPDATE member SET first_name='$first_name',
									 last_name='$last_name',
									 id_card='$id_card',
									 ttl='$ttl',
									 team_name='$team_name',
									 address='$address',
									 phone='$phone'
				WHERE id_member='$id_member'";
				
			$result=$this->db->query($query);
			return TRUE;
		}

	}
?>