<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinicio extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}
		$this->load->model('Miplan');

		$Rol = $this->session->userdata('Rol');
		$nu['idu']=$this->session->userdata('Id');
		$nu['NomP']='Inicio';
		
		if ($Rol=='ADMINISTRADOR') {
			$nu['Usu']=$this->Miplan->contar_usuarios();
			$nu['Sec']=$this->Miplan->contar_secretarias();
			$nu['Car']=$this->Miplan->contar_cargos();
			$nu['Emp']=$this->Miplan->contar_empleados();
			$this->load->view('front_end/header',$nu);
			$this->load->view('front_end/menu');
			$this->load->view('paginas/inicio');
		}else{
			$nu['Con']=$this->Miplan->contar_contratos($nu['idu']);
			$this->load->view('front_end/header',$nu);
			$this->load->view('front_end/menur');
			$this->load->view('paginas/inicioR');
		}
		$this->load->view('front_end/footer');

	}
}
