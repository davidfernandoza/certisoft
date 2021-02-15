<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarcargo extends CI_Controller {

	public function index()
	{
		$this->load->model('Miplan');
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}

		$params['usuario']=$this->session->userdata('Rol');
		if($params['usuario']=='REGULAR'){
			redirect('cinicio');
		}

    	$cargo = $_GET['idc'];
		$datos['detalle']=$this->Miplan->detalle_cargo($cargo);
		$params['secretarias']=$this->Miplan->lista_secretarias();
		$params['idC']=$datos['detalle']->idCargo;
		$params['NomC']=$datos['detalle']->NombreC;
		$params['DesC']=$datos['detalle']->DescripcionC;
		$params['idS']=$datos['detalle']->idSecretaria;
		$params['NombreS']=$datos['detalle']->NombreS;
		$params['NomP']='Actualizar cargo';
		
		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/actualizarcargo');
		$this->load->view('front_end/footer');

	}

	function actualizarda(){
		$this->load->model('Miplan');

		$params['idc']=$this->input->get("idc");
		$params['NombreC']=strtoupper($this->input->get("nombre"));
		$params['DescripcionC']=strtoupper($this->input->get("descripcion"));		
		$params['ids']=$this->input->get("ids");

		if (isset($_GET["actualizar"])) {
			$this->Miplan->actualizar_cargo($params['idc'],$params['NombreC'],$params['DescripcionC'],$params['ids']);
		}

		redirect('ccargos');
	}

	function cancel(){
		redirect('ccargos');
	}

}
