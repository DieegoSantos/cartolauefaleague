<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends MY_Controller {

        public function listaTimes() {
                $this->load->model('GetTimes_Model');
                $arrDados['objDados'] = $this->GetTimes_Model->getListTimes();
                $this->load->view('times/times_exibir', $arrDados);
        }

	
	public function addTime() {
		$this->load->view('times/times_merge');
	}

	public function saveTime() {

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
}
