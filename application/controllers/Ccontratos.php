<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccontratos extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');
		}

		$params['usuario']=$this->session->userdata('Rol');

		$this->load->model('Miplan');

    	$ide = $_GET['ide'];
    	$params['ide']=$ide;
    	$params['idu']=$ide;
		$params['NomP']="Contratos";
		$params['contratos']=$this->Miplan->lista_contratos($ide);

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/Contratos');

	}
}
