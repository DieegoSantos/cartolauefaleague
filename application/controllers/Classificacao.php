<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classificacao extends MY_Controller {

	public function rodada() {
		$this->load->view('classificacao/rodada');
	}

	public function mensal() {
		$this->load->view('classificacao/mensal');
	}

	public function anual() {
		$this->load->view('classificacao/anual');
	}
}
