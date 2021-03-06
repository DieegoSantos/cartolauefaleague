<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends MY_Controller {

        public function listaTimes() {

                $strTipo = $this->input->get('TIPO_TIME');
                $arrWhere = array();
                if($strTipo)
                        $arrWhere['tipoInscricao'] = $strTipo;

                $this->load->model('GetTimes_Model');
                $arrDados['objDados'] = $this->GetTimes_Model->getListTimes($arrWhere);
                $this->load->view('times/times_exibir', $arrDados);
        }

	
	public function addTime() {
		$this->load->view('times/times_merge');
	}

        public function editTime() {
                $this->load->model('GetTimes_Model');

                $intCodTime = $this->input->get('idtime');
                $arrWhere = array();
                if($intCodTime)
                        $arrWhere['idTime'] = $intCodTime;

                $objTimes = $this->GetTimes_Model->getListTimes($arrWhere);
                $arrDados = array();
                foreach ($objTimes as $objResult) {
                        $arrDados['idTime'] = $objResult->idTime;
                        $arrDados['nomeTime'] = $objResult->nomeTime;
                        $arrDados['nomeUser'] = $objResult->nomeUser;
                        $arrDados['tipoInscricao'] = $objResult->tipoInscricao;
                        $arrDados['fotos'] = $objResult->foto;

                }

                $this->load->view('times/times_merge', $arrDados);
        }

	public function saveTime() {

                if($this->input->post('ESCUDO')) {
        		$config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size']     = '500';
                        $config['max_width']  = '2048';
                        $config['max_height']  = '1024';
                        $this->upload->initialize($config);        
                        
                        if(!$this->upload->do_upload('ESCUDO')) {
                                $error = array('error' => $this->upload->display_errors());
                                print_r($error);
                        } else {
                                $data = array('arquivo_data' => $this->upload->data());
                                $strFoto = $data['arquivo_data']['orig_name'];
                        }
                }
                $strTime = $this->input->post('NOM_TIME');
                $strNome = $this->input->post('NOME');
                $strInscricao = $this->input->post('TIPO_INSC');

                $arrDados = array();
                $arrDados['nomeTime'] = $strTime;
                $arrDados['nomeUser'] = $strNome;
                $arrDados['tipoInscricao'] = $strInscricao;
                $arrDados['foto'] = $strFoto;

                if($this->db->insert('tbltimes', $arrDados))
                        redirect(base_url('index.php/Times/listaTimes'));

	}

        public function inserirPontuacao() {
                $this->load->model('GetPontuacao_Model');
                $this->load->model('GetTimes_Model');
                $intCodTime = $this->input->get('idtime');
                $arrDados['intCodTime'] = $intCodTime;
                $arrDados['objDados'] = $this->GetPontuacao_Model->getPontuacaoTimes($intCodTime);
                $arrDados['objFoto'] = $this->GetTimes_Model->getFotoTime($intCodTime);
                $this->load->view('times/inserir_pontuacao', $arrDados);
        }

        public function savePontuacao() {
                $intCodTime = $this->input->get('idtime');
                $intPontuacao = $this->input->get('pontuacao');
                $strDate = Date('Y-m-d');

                $arrDados = array();
                $arrDados['idTime'] = $intCodTime;
                $arrDados['pontuacao'] = $intPontuacao;
                $arrDados['mesPontuacao'] = $strDate;

                if($this->db->insert('tblpontuacao', $arrDados))
                        redirect(base_url('index.php/Times/inserirPontuacao?idtime='.$intCodTime));
        }
}
