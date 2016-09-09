<?php
class Pagamentos extends MY_Controller {

	public function index() {

		$strMesRef = $this->input->get('MES_REF');
		$intTipoPagamento = $this->input->get('TIPO_PGTO');

		$arrWhere = array();

		if($strMesRef)
			$arrWhere['mesReferencia'] = $strMesRef;
		if($intTipoPagamento)
			$arrWhere['tipoPagamento'] = $intTipoPagamento;

		$this->load->model('GetPagamentos_Model');

		$arrDados['objDados'] = $this->GetPagamentos_Model->getListPagantes($arrWhere);
		$this->load->view('pagamentos/list_pagamento', $arrDados);
	}

	public function addPagamento() {
		$this->load->model('GetTimes_Model');

		$arrDados['objDados'] = $this->GetTimes_Model->getListTimes();
		$this->load->view('pagamentos/add_pagamento', $arrDados);
	}

	public function savePagamento() {
		$idTime = $this->input->post('ID_TIME');
		$intTipoPagamento = $this->input->post('TIPO_PGTO');
		$strMesRef = $this->input->post('MES_REF');
		$strDataPagamento = Date('Y-m-d');

		$arrInsert = array();
		$arrInsert['idTime'] = $idTime;
		$arrInsert['tipoPagamento'] = $intTipoPagamento;
		$arrInsert['mesReferencia'] = $strMesRef;
		$arrInsert['datPagamento'] = $strDataPagamento;

		$this->db->insert('tblPagamentos', $arrInsert);

		$this->session->set_flashdata('sucesso','Pagamento registrado com sucesso');
		redirect(base_url('index.php/Pagamentos'));
	}
}