<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cperfil extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}
		$this->load->model('Miplan');
		$this->load->library('encryption'); 

		$id = $this->session->userdata('Id');

		$datos['detalle']=$this->Miplan->detalle_usuario($id);
		
		$contraen=$datos['detalle']->Contrasena;	
		$contrades=$this->encryption->decrypt($contraen);

		$params['idUsuario']=$datos['detalle']->idUsuarios;
		$params['idu']=$datos['detalle']->idUsuarios;
		$params['Nombre']=$datos['detalle']->Nombre;
		$params['Apellido']=$datos['detalle']->Apellido;
		$params['Telefono']=$datos['detalle']->Telefono;
		$params['Email']=$datos['detalle']->Email;
		$params['Contrasena']=$contrades;
		

		$params['NomP']='Perfil';
		
		$Rol = $this->session->userdata('Rol');

		$this->load->view('front_end/header',$params);
		if ($Rol=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/perfil');
		$this->load->view('front_end/footer');
	}

	function actualizar(){
		$params['idUsuario']=$_GET["id"];
		$params['Nombre']=$_GET["nombre"];
		$params['Apellido']=$_GET["apellido"];
		$params['Telefono']=$_GET["telefono"];
		$params['Email']=$_GET["email"];
		$params['Contrasena']=$_GET["contrasena"];

		if (isset($_GET["actualizar"])) {
			$this->load->model('Miplan');
			$this->Miplan->actualizar_perfil($params['idUsuario'],$params['Nombre'],$params['Apellido'],$params['Telefono'],$params['Email'],$params['Contrasena']);
		}
					
		redirect('cinicio');
	}

}
