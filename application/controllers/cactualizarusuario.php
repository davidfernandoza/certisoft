<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarusuario extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}
		$this->load->library('encryption');
		$this->load->model('Miplan');
		$params['usuario']=$this->session->userdata('Rol');

		if ($params['usuario']=='REGULAR') {
			redirect('cinicio');
		}

		$idUsuario=$_GET["idUsuario"];

		$datos['detalle']=$this->Miplan->detalle_usuario($idUsuario);
		 
		$params['idUsuario']=$datos['detalle']->idUsuarios;
		$params['Nombre']=$datos['detalle']->Nombre;
		$params['Apellido']=$datos['detalle']->Apellido;
		$params['Telefono']=$datos['detalle']->Telefono;
		$params['Email']=$datos['detalle']->Email;
		$params['Contrasena']=$this->encryption->decrypt($datos['detalle']->Contrasena);
		$params['Rol']=$datos['detalle']->Rol;
		$params['Estado']=$datos['detalle']->Estado;
		$params['NomP']='Actualizar Usuario';
		

		
		$this->load->view('front_end/header',$params);
		$this->load->view('front_end/menu');
		$this->load->view('paginas/actualizarusuario');
		$this->load->view('front_end/footer');

	}

	function actualizar(){
		$this->load->library('encryption');
		$params['idUsuario']=$_GET["id"];
		$params['Nombre']=strtoupper($_GET["nombre"]);
		$params['Apellido']=strtoupper($_GET["apellido"]);
		$params['Telefono']=$_GET["telefono"];
		$params['Email']=$_GET["email"];
		$params['Contrasena']=$_GET["contrasena"];
		$params['Rol']=$_GET["rol"];
		$params['Estado']=$_GET["estado"];

		if (isset($_GET["actualizar"])) {
			$this->load->model('Miplan');
			$this->Miplan->actualizar_usuario($params['idUsuario'],$params['Nombre'],$params['Apellido'],$params['Telefono'],$params['Email'],$params['Contrasena'],$params['Rol'],$params['Estado']);
		}
					
		redirect('cusuarios');
	}

	function cancel(){
		redirect('cusuarios');		
	}
}
