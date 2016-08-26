<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Classe de times
*/
class GetPontuacao_Model extends CI_Model {

	public function getTable() {
		return 'tblpontuacao';
	}

	public function getPontuacaoTimes($intCodTime) {

		$strWhere = 'WHERE P.idTime = '.$intCodTime.'';
		
		$strSQL = '
				SELECT
					P.idTime,
					T.nomeTime,
					T.nomeUser,
					P.pontuacao,
					P.mesPontuacao
				FROM '.$this->getTable().' P
				INNER JOIN tbltimes T ON T.idTime = P.idTime
				'.$strWhere.'';

		$objResult =  $this->db->query($strSQL);

		return $objResult->result(); 
	}

	/**
	* Gera classificação anual
	*
	*/
	public function getClassificacaoAnual() {

		$strSQL = '
					SELECT  T.idTime,
							T.nomeTime,
							T.nomeUser,
							T.foto,
							P.pontuacao
					FROM '.$this->getTable().' P
					INNER JOIN tbltimes T ON T.idTime = P.idTime
					WHERE indTipo = "A"
					ORDER BY P.pontuacao DESC';

		$objResult = $this->db->query($strSQL);

		return $objResult->result();
	}
	
}