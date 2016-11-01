<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Asiakas extends CI_Controller {
		public function listaa(){
			$this->load->model("Asiakas_model");
			$Data["Asiakkaat"] = $this->Asiakas_model->haeAsiakas();
			$this->load->view("Asiakas/listaa", $Data);
		}

	}