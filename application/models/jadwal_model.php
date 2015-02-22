<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function list_transaksi($id_lap,$tgl_booking){
		$query = "SELECT * FROM transaksi WHERE id_lapangan='$id_lap' AND tgl_booking='$tgl_booking'";
		$data = $this->db->query($query);
		
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return FALSE;
		}

    }

    public function jadwal_lapangan($id_lap){
    	$query = "SELECT * FROM lapangan WHERE id_lap='$id_lap'";
    	$data = $this->db->query($query);
    	return $data->result_array();
    }


    public function pesan($id_lap,$id_futsal,$jam,$tgl)
    {
        
        $username = $this->session->userdata('akun');
        $querymember = "SELECT id_member,team_name FROM user,member WHERE member.id_user = user.id_user AND username='$username'";
        $member = $this->db->query($querymember);
        foreach ($member->result() as $key) {
            $idmember = $key->id_member;
            $team = $key->team_name;
        }
        $jamint = intval($jam);

        if ($jamint <=12) {
            $harga = 'pagi';
        }
        elseif($jamint <=18) {
            $harga = 'siang';
        }
        else {
            $harga = 'malam';
        }   

        // print_r($harga);
        // die();


        $queryharga = "SELECT lapangan.$harga FROM lapangan WHERE id_lap='$id_lap'";
        $harga_lap = $this->db->query($queryharga)->result_array();
        // print_r($harga_lap[0][$harga]);
        // die();

        $data['id_futsal'] = $id_futsal;
        $data['id_lapangan'] = $id_lap;
        $data['id_member'] = $idmember;
        $data['jam'] =$jam;
        $data['harga'] = $harga_lap[0][$harga];
        $data['nama_team'] = $team;
        $data['tgl_booking'] = $tgl;

        $result = $this->db->insert('transaksi',$data);

    }
}