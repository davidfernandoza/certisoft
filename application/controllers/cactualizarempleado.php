<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarempleado extends CI_Controller {

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

		$params['NomP']='Actualizar empleado';
		$params['ide']=$_GET['ide'];
		$params['empleado']=$this->Miplan->detalle_empleado($params['ide']);
		$params['usuario']=$this->session->userdata('Rol');

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/actualizarempleado');
		$this->load->view('front_end/footer');

	}

	function actualizarda(){
		$this->load->model('Miplan');

		$params['ide']=$_GET["ide"];
		$params['Nombre']=strtoupper($_GET["nombre"]);
		$params['Apellido']=strtoupper($_GET["apellido"]);
		$params['Caja']=$_GET["caja"];
		
		$this->Miplan->actualizar_empleado($params['ide'],$params['Nombre'],$params['Apellido'],$params['Caja']);
		redirect('cempleados');
			
	}

	function cancel(){
		redirect('cempleados');		
	}
}
