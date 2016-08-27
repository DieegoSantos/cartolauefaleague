<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pontuacao extends MY_Controller {

	public function index() {
		$this->load->model('GetTimes_Model');
        
        $arrDados['objDados'] = $this->GetTimes_Model->getListTimes();
		$this->load->view('pontuacao.php', $arrDados);
	}

	public function salvarPontuacao() {
		$arrPontuacao = $this->input->get('pontuacao');

		foreach ($arrPontuacao as $idTime => $intPontuacao) {
			$arrDados = array();
			$arrDados['idTime'] = $idTime;
			$arrDados['pontuacao'] = $intPontuacao[0];
			$arrDados['mesPontuacao'] = Date('Y-m-d');
			$arrDados['indTipo'] = 'R';	

			$this->db->insert('tblpontuacao', $arrDados);
		}

		$arrMensagem['strMensagem'] = TRUE; 
		redirect(base_url('index.php/Pontuacao'));
	}
}
