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

		for ($i=0; $i < count($transaksi) ; $i++) { 
				$jam[]=$transaksi[$i]['jam'];
				$stat[]=$transaksi[$i]['status'];
				$team[]=$transaksi[$i]['nama_team'];
				$lap[]=$transaksi[$i]['id_lapangan'];

			}

	// compare jam di t_transaksi dengan daftar jam
		foreach($waktu as $t) {
		    if(in_array($t, $jam, true) ) {
		        $button[]="disabled";
		    } else {
		        $button[]="";
		    }
		}	

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
			echo 					'<th>NAMA TEAM</th>';
			echo 					'<th></th>';
			echo				'</tr>';
			echo			'</thead>';
			echo			'<tbody>';
			for ($i=0; $i < 16; $i++) { 
			
				echo				'<tr>';
				echo					'<td>'.($i+1).'</td>';
				echo					'<td>'.$waktu[$i].'</td>';
				echo					'<td>Booked by KOMSI</td>';
				echo					'<td>BOOKING</td>';
				echo					'<td><a href="pesan?id_lap='.$item['id_lap'].'&&id_futsal='.$item['id_futsal'].'&&jam=07.00&&tgl='.$tgl.'"><button class="btn btn-success" '.$button[$i].'> Booking </button></a></td>';
				echo				'</tr>';
			}
			echo			'</tbody>';
			echo		'</table>';

		}
												
	}



	public function pesan(){
		
	}
}