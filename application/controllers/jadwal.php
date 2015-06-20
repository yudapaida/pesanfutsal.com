<?php
/**
* 
*/
class Jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function lihat_jadwal(){

	// ambil post dari ajax	
		$tgl = $this->input->post('tgl');
		$id_lap = $this->input->post('id');

		$waktu=array("07.00","08.00","09.00","10.00","11.00","12.00","13.00","14.00","15.00","16.00","17.00","18.00","19.00","20.00","21.00","22.00");
		$button=array();
		

	// data transaksi	
		$this->load->model('jadwal_model');
		$transaksi = $this->jadwal_model->list_transaksi($id_lap,$tgl);
		// $namateam = $transaksi['nama_team'];
		// foreach ($transaksi as $key) {
		// 	print_r($key[0]);	# code...
		// }
		// print_r($transaksi[0]['nama_team']);
		// die();

		for ($i=0; $i < count($transaksi) ; $i++) { 
				$jam[]=$transaksi[$i]['jam'];
				$stat[]=$transaksi[$i]['status'];
				// $team[]=$transaksi['nama_team'];
				$lap[]=$transaksi[$i]['id_lapangan'];

			}

		// print_r($team);
		// die();

	// compare jam di t_transaksi dengan daftar jam
		foreach($waktu as $t) {
		    if(in_array($t, $jam, true) ) {
		        $button[]="disabled";
		        $status[] = "Booked";
		        $tombol[] = "Booked";
		        // $namateam[] = $transaksi[$t]['nama_team'];
		    } else {
		        $button[]="";
		        $status[] = "Free";
		        $namateam[] = "Free";
		        $tombol[] = "Booking";
		    }
		}

		// foreach ($namateam as $key) {
		// 	print_r($key);	# code...
		// }		
		// die();


	// data lapangan
		$lapangan = $this->jadwal_model->jadwal_lapangan($id_lap);

		foreach ($lapangan as $item) {
			echo '<br>';
			echo '<br>';
			
			echo '<div class="section-title"><h2><span>'.strtoupper($item['nama_lap']).'</span></h2></div>';
			echo 		'<table>';
			echo			'<thead>';
			echo 				'<tr>';
			echo					'<th>NO</th>';
			echo					'<th>JAM</th>';
			echo					'<th>STATUS</th>';
			echo 					'<th></th>';
			echo				'</tr>';
			echo			'</thead>';
			echo			'<tbody>';
			for ($i=0; $i < 16; $i++) { 
			
				echo				'<tr>';
				echo					'<td>'.($i+1).'</td>';
				echo					'<td>'.$waktu[$i].'</td>';
				echo					'<td>'.$status[$i].'</td>';
				// echo					'<td>'.$namateam[$i].'</td>';
				// echo 					'<td>Booked By Komsi</td>';
				// echo 					'<td>Booking</td>';
				echo					'<td><a href="'.base_url('jadwal/pesan').'?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam='.$waktu[$i].'&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[$i].'>'.$tombol[$i].'</button></a></td>';
				echo				'</tr>';
			}
			echo			'</tbody>';
			echo		'</table>';

		}
												
	}

	public function pesan(){
		if(!$this->session->userdata('akun')){
			redirect('futsal/login');
		}else{	
			$id_lap = $_GET['id_lap'];
			$id_futsal = $_GET['id_futsal'];
			$jam = $_GET['jam'];
			$tgl= $_GET['tgl'];

			$this->load->model('jadwal_model');
			$this->jadwal_model->pesan($id_lap,$id_futsal,$jam,$tgl);
			redirect('member');
		}
	}

}