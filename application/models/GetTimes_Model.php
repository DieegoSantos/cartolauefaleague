<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Classe de times
*/
class GetTimes_Model extends CI_Model {

	public function getTable() {
		return 'tbltimes';
	}

	public function getListTimes(array $arrWhere = array()) {

		if($arrWhere) {
			$arrWhereAux = array();
			foreach($arrWhere as $intKey => $strValue) {
				$arrWhereAux[$intKey] = array($intKey => $strValue);
				$this->db->where($arrWhereAux[$intKey]);
			}
		}

		$strSQL = $this->db->get($this->getTable());

		return $strSQL->result(); 
	}

	public function getFotoTime($idTime) {

		$strSQL = 'SELECT foto from '.$this->getTable().' WHERE idTime = '.$idTime.'';
		$objResult = $this->db->query($strSQL);

		return $objResult->result();
	}
	
}