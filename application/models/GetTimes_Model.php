<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Classe de times
*/
class GetTimes_Model extends CI_Model {

	public function getTable() {
		return 'tbltimes';
	}

	public function getListTimes() {
		$strSQL = $this->db->get($this->getTable());

		return $strSQL->result(); 
	}
	
}