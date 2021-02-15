<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusuarios extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}
		$this->load->model('Miplan');
		$datos['usuarios']=$this->Miplan->lista_usuarios();
		$datos['NomP']='Usuarios';
		$datos['usuario']=$this->session->userdata('Rol');
		if($datos['usuario']=='REGULAR'){
			redirect('cinicio');
		}
		
		$this->load->view('front_end/header',$datos);
		if ($datos['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			redirect('cinicio');
		}
		$this->load->view('paginas/usuarios');
	}

	// Muesta un usuario por identificacion
	public function detalle()
	{
		$this->load->model('Miplan');

		$idUsuario=NULL;
		$editar=NULL;
		$borrar=NULL;

		$idUsuario=$_GET["idUsuario"];

		$datos['detalle']=$this->Miplan->detalle_usuario($idUsuario);
		$params['idUsuario']=$datos['detalle']->idUsuarios;
		$params['Nombre']=$datos['detalle']->Nombre;
		$params['Apellido']=$datos['detalle']->Apellido;
		$params['Telefono']=$datos['detalle']->Telefono;
		$params['Email']=$datos['detalle']->Email;
		$params['Contrasena']=$datos['detalle']->Contrasena;
		$params['Rol']=$datos['detalle']->Rol;
		$params['Estado']=$datos['detalle']->Estado;
		$this->load->view('front_end/actualizarusuario',$params);
		
	} 
}
