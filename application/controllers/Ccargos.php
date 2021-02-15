<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccargos extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}

		$datos['usuario']=$this->session->userdata('Rol');
		if($datos['usuario']=='REGULAR'){
			redirect('cinicio');
		}

		$this->load->model('Miplan');

		$datos['cargos']=$this->Miplan->lista_cargos();
		$datos['NomP']='Cargos';

		$this->load->view('front_end/header',$datos);
		if ($datos['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/cargos');
	}

}
