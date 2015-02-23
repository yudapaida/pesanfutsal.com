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
			$query = $this->db->query('SELECT * FROM operator');
			return $query->result_array();
		}

		public function delete_operator($id_futsal)
		{
			$query = "DELETE FROM operator WHERE id_futsal='$id_futsal'";
			$this->db->query($query);
		}

		public function konfirmasi($id_futsal)
		{
			$query = "UPDATE operator SET status='confirmed' WHERE id_futsal=$id_futsal";
			$result = $this->db->query($query);
			return TRUE;
		}
	}
?>