<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cguardarusuario extends CI_Controller {

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
		
		$datos['NomP']='Nuevo Usuario';
		$this->load->view('front_end/header',$datos);
		$this->load->view('front_end/menu');
		$this->load->view('paginas/guardarusuario');
		$this->load->view('front_end/footer');

	}

	function guardar(){
		$this->load->model('Miplan');
		$params['idUsuario']=$_GET["id"];
		$params['Nombre']=strtoupper($_GET["nombre"]);
		$params['Apellido']=strtoupper($_GET["apellido"]);
		$params['Telefono']=$_GET["telefono"];
		$params['Email']=$_GET["email"];
		$params['Contrasena']=$_GET["contrasena"];
		$params['Rol']=$_GET["rol"];
		$params['Estado']=$_GET["estado"]; 
 

		if (isset($_GET["guardar"])) {
			$mensaje=$this->Miplan->guardar_usuario($params['idUsuario'],$params['Nombre'],$params['Apellido'],$params['Telefono'],$params['Email'],$params['Contrasena'],$params['Rol'],$params['Estado']);
			if ($mensaje=='1') {
				redirect('cusuarios');
			}else{
				$this->session->set_flashdata('Mensaje','SI');
				redirect('cguardarusuario');
			}
		}else{
			redirect('cusuarios'); 
		}				
	}

	function cancel(){
		redirect('cusuarios');		
	}
}
