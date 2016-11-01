<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		echo "Tämä on Home-kontrollerin index-funktio.";
	}
	public function toka(){
		echo "Tämä on Home-kontrollerin toka-funktio.";
	}
	public function kolmas(){
		$Data["Nimet"] = array(
							array("Etunimi" => "Jussi", "Sukunimi" => "Virta"),
							array("Etunimi" => "Antti", "Sukunimi" => "Korva"),
							array("Etunimi" => "Mikko", "Sukunimi" => "Koivu"),
						);
		$Data["User"] = "Pekka";
		$this->load->view("Home/kolmas", $Data);
	}
	public function neljas(){
		$this->load->model("Home_model");
		$Data["Sisalto"] = $this->Home_model->getNames();
		$this->load->view("Home/neljas", $Data);
	}
}
