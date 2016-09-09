<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Classe de times
*/
class GetPagamentos_Model extends CI_Model {

	public function getTable() {
		return 'tblpagamentos';
	}

	public function getListPagantes(array $arrWhere = array()) {

		if($arrWhere) {
			$arrWhereAux = array();
			foreach($arrWhere as $intKey => $strValue) {
				$arrWhereAux[$intKey] = array($intKey => $strValue);
				$this->db->where($arrWhereAux[$intKey]);
			}
		}

		$this->db->select('T.idTime, T.nomeTime, T.nomeUser, T.foto, PG.tipoPagamento, PG.mesReferencia');
		$this->db->from($this->getTable() . ' PG');
		$this->db->join('tbltimes T', 'T.idTime = PG.idTime');
		$objResult = $this->db->get();

		return $objResult->result(); 
	}	
}