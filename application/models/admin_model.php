<?php
	/**
	* 
	*/
	class Admin_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function view_konfirmasi()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT konfirmasi.nama_member as 'nama',konfirmasi.nama_team as 'team', konfirmasi.lokasi as 'lokasi', konfirmasi.lapangan as 'lapangan' , konfirmasi.tgl_booking as 'tgl', konfirmasi.jam as 'jam', konfirmasi.harga as 'harga',konfirmasi.gambar as 'gambar', konfirmasi.id_transaksi as 'id_transaksi', transaksi.status as 'status' FROM transaksi,konfirmasi,user,operator WHERE user.id_user=operator.id_user AND operator.id_futsal=transaksi.id_futsal AND transaksi.id_transaksi=konfirmasi.id_transaksi AND operator.nama_futsal=konfirmasi.lokasi AND username='$username' order by id_konfirmasi";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function konfirmasi($id_transaksi)
		{
			$query = "UPDATE transaksi SET status='booked' WHERE id_transaksi=$id_transaksi";
			$result = $this->db->query($query);
			return TRUE;
		}

		public function view_lap()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT lapangan.id_lap, lapangan.nama_lap, lapangan.deskripsi, lapangan.pagi, lapangan.siang, lapangan.malam FROM user, operator, lapangan WHERE lapangan.id_futsal=operator.id_futsal AND operator.id_user = user.id_user AND username='$username' order by nama_lap";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function delete_lap($id_lap)
		{
			$query = "DELETE FROM lapangan WHERE id_lap='$id_lap'";
			$this->db->query($query);
		}

		public function insert_lap($filename)
		{
			$username = $this->session->userdata('akun');

			//print_r($username);
			$query ="SELECT id_futsal as id from user,operator where operator.id_user = user.id_user AND username='$username'";
			$foreign = $this->db->query($query);
			foreach ($foreign->result() as $key) {
				$coba = $key->id;
			}

			//insert data member
			$data['nama_lap']=$_POST['nama_lap'];
			$data['deskripsi']=$_POST['deskripsi'];
			$data['pagi']=$_POST['pagi'];
			$data['siang']=$_POST['siang'];
			$data['malam']=$_POST['malam'];
			$data['id_futsal']= $coba;
			$data['gambar']=$filename;

			$result = $this->db->insert('lapangan', $data);
		}

		public function get_lapangan($id_lap)
		{
			$query = "SELECT * FROM lapangan WHERE id_lap=$id_lap";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function update_lap($id_lap,$nama_lap,$deskripsi,$pagi,$siang,$malam)
		{
		$query="UPDATE lapangan SET nama_lap='$nama_lap',
									 deskripsi='$deskripsi',
									 pagi='$pagi',
									 siang='$siang',
									 malam='$malam'
				where id_lap=$id_lap";
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
				redirect('admin/password');
				// $data = "FALSE";
				// return $data;
			}
			elseif ($pass_baru != $pass_baru2) {
				// echo "password baru beda";
				redirect('admin/password');
			}
			else {
				$query = "UPDATE user SET password=md5('$pass_baru') WHERE username='$username'";
				$data = $this->db->query($query);
				// redirect('member');
				return TRUE;
			}
		}

		public function view_profile()
		{
			$username = $this->session->userdata('akun');
			$query = "SELECT nama_futsal as 'nama', alamat, id_kota, no_rek as 'rekening',phone, deskripsi FROM user, operator WHERE user.id_user=operator.id_user AND username='$username'";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function update_profile($nama_futsal,$alamat,$id_kota,$no_rek,$phone,$deskripsi)
		{
			$username = $this->session->userdata('akun');
			$queryuser = "SELECT operator.id_user as 'id' FROM user,operator WHERE operator.id_user=user.id_user AND username='$username'";
			$id_user = $this->db->query($queryuser);
			foreach ($id_user->result() as $key) {
				$coba = $key->id;
			}
			$query="UPDATE operator SET nama_futsal='$nama_futsal',
									 alamat='$alamat',
									 id_kota='$id_kota',
									 no_rek='$no_rek',
									 phone='$phone',
									 deskripsi='$deskripsi'
				where id_user=$coba";
		$result=$this->db->query($query);
		return TRUE;
		}
	}
?>