<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cguardarempleado extends CI_Controller {

	public function index()  
	{
		$this->load->model('Miplan');
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');
		}

		$params['usuario']=$this->session->userdata('Rol');
		if ($params['usuario']=='REGULAR') {
			redirect('cinicio');
		}
		
		$datos['NomP']='Nuevo empleado';
		$this->load->view('front_end/header',$datos);
		$this->load->view('front_end/menu');
		$this->load->view('paginas/guardarempleado');
		$this->load->view('front_end/footer');

	}

	function guardar(){
		$this->load->model('Miplan');
		$params['idEmpleado']=$_GET["id"];
		$params['Nombre']=strtoupper($_GET["nombre"]);
		$params['Apellido']=strtoupper($_GET["apellido"]);
		$params['Caja']=$_GET["caja"]; 

		if (isset($_GET["guardar"])) {
			$mensaje=$this->Miplan->guardar_empleado($params['idEmpleado'],$params['Nombre'],$params['Apellido'],$params['Caja']);
			if ($mensaje=='1') {
				redirect('cempleados');
			}else{
				$this->session->set_flashdata('MensajeE','SI');
				redirect('Cguardarempleado');
			}
		}else{
			redirect('cempleados'); 
		}				
	}

	function cancel(){
		redirect('cempleados');		
	}
}
