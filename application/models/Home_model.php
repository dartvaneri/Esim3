<?php
	class Home_model extends CI_Model {
		public function getNames(){
			$Name = array(
							array("Etunimi" => "Jussi", "Sukunimi" => "Virta"),
							array("Etunimi" => "Antti", "Sukunimi" => "Korva"),
							array("Etunimi" => "Mikko", "Sukunimi" => "Koivu"),
						);
			return $Name;
		}
	}
?>