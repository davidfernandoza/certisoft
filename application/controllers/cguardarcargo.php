<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cguardarcargo extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');
		}
		
		$params['usuario']=$this->session->userdata('Rol');
		if($params['usuario']=='REGULAR'){
			redirect('cinicio');
		}

		$this->load->model('Miplan');
		$params['secretarias']=$this->Miplan->lista_secretarias();
		$params['NomP']='Nuevo cargo';

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/guardarcargo');
		$this->load->view('front_end/footer');

	}

	function guardar(){
		$this->load->model('Miplan');

		$params['idCargo']=$_GET["idc"];
		$params['Nombre']=strtoupper($_GET["nombre"]);
		$params['Descripcion']=strtoupper($_GET["descripcion"]);
		$params['ids']=$_GET["ids"];

		if (isset($_GET["guardar"])) {
			$mensaje=$this->Miplan->guardar_cargo($params['idCargo'],$params['Nombre'],$params['Descripcion'],$params['ids']);
			if ($mensaje=='1') {
				redirect('ccargos');
			}else{
				$this->session->set_flashdata('Mensaje','SI');
				redirect('ccargos');		
			}
		}else{
			redirect('ccargos');
		}
	}

	function cancel(){
		redirect('ccargos');	
	}
}
