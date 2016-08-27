<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classificacao extends MY_Controller {

	public function rodada() {
		$this->load->model('GetPontuacao_Model');

		$arrDados['objDados'] = $this->GetPontuacao_Model->getClassificacaoRodada();
		$this->load->view('classificacao/classificacao', $arrDados);
	}

	public function mensal() {
		$this->load->model('GetPontuacao_Model');

		$arrDados['objDados'] = $this->GetPontuacao_Model->getClassificacaoMensal();
		$arrDados['mensal'] = TRUE;
		$this->load->view('classificacao/classificacao', $arrDados);
	}

	public function anual() {
		$this->load->model('GetPontuacao_Model');

		$arrDados['objDados'] = $this->GetPontuacao_Model->getClassificacaoAnual();
		$arrDados['anual'] = TRUE;
		$this->load->view('classificacao/classificacao', $arrDados);
	}
}
