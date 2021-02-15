<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregistrarempleado2 extends CI_Controller {

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
		
		if (empty($_GET['ide'])) {
			redirect('Cregistrarempleado');
		}
		$ide=$_GET['ide'];
		$comprobar=$this->Miplan->comprobar_empleado($ide);
		if ($comprobar==2) {
			$this->session->set_flashdata('Mensaje','SI');
			redirect('Cregistrarempleado');
		}
		$datos['NomP']='Registrar empleado';
		$datos['empleado']=$this->Miplan->detalle_empleado($ide);
		$this->load->view('front_end/header',$datos);
		$this->load->view('front_end/menu');
		$this->load->view('paginas/registrarempleado2');
		$this->load->view('front_end/footer');

	}

	function registrar(){
		$this->load->model('Miplan');
		$params['idEmpleado']=$_GET["id"];
		$params['Nombre']=strtoupper($_GET["nombre"]);
		$params['Apellido']=strtoupper($_GET["apellido"]);
		$params['Telefono']=$_GET["telefono"];
		$params['Email']=$_GET["email"];
		$params['Contrasena']=$_GET["contrasena"];
		$params['Rol']=$_GET["rol"];
		$params['Estado']=$_GET["estado"]; 
 

		if (isset($_GET["registrar"])) {
			$mensaje=$this->Miplan->guardar_usuario($params['idEmpleado'],$params['Nombre'],$params['Apellido'],$params['Telefono'],$params['Email'],$params['Contrasena'],$params['Rol'],$params['Estado']);
			if ($mensaje=='1') {
				redirect('cusuarios');
			}else{
				$this->session->set_flashdata('MensajeE','SI');
				redirect('Cregistrarempleado');
			}
		}else{
			redirect('cusuarios'); 
		}				
	}

	function cancel(){
		redirect('cusuarios');		
	}
}
