<?php
	class Asiakas_model extends CI_Model{
		public function haeAsiakas(){
			$this->db->select('Etunimi,Sukunimi,Email');
			$this->db->from('asiakas'); 
			return $this->db->get()->result_array(); 
		}
	}
?>