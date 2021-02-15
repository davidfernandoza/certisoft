<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cguardarsecretaria extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');
		}

		$params['usuario']=$this->session->userdata('Rol');
		if($params['usuario']=='REGULAR'){
			redirect('cinicio');
		}

		$params['NomP']='Nueva secretaría';

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/guardarsecretaria');
		$this->load->view('front_end/footer');

	}

	function guardar(){
		$this->load->model('Miplan');

		$params['idSec']=$_GET["ids"];
		$params['NombreS']=strtoupper($_GET["nombre"]);
		$params['DescripcionS']=strtoupper($_GET["descripcion"]);

		if (isset($_GET["guardar"])) {
			$mensaje=$this->Miplan->guardar_secretaria($params['idSec'],$params['NombreS'],$params['DescripcionS']);
			if ($mensaje=='1') {
				redirect('csecretarias');
			}else{
				$this->session->set_flashdata('Mensaje','SI');
				redirect('Cguardarsecretaria');		
			}
		}else{
			
			redirect('csecretarias');
		}
	}

	function cancel(){
		redirect('cinicio');		
	}
}
