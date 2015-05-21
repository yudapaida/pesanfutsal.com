<?php
	/**
	* 
	*/
	class Index_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
	
		public function popular(){
			$query = "SELECT * from operator ORDER BY id_futsal DESC LIMIT 4";
			$data = $this->db->query($query);

			return $data->result_array();
		}


	}

?>