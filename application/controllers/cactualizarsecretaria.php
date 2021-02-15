<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarsecretaria extends CI_Controller {

	public function index()
	{
		$this->load->model('Miplan');
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}

		$params['usuario']= $this->session->userdata('Rol');
		if($params['usuario']=='REGULAR'){
			redirect('cinicio');
		}
		
		$params['idsec']=$_GET["ids"];
		$datos['detalle']=$this->Miplan->detalle_secretaria($params['idsec']);
		$params['NombreS']=$datos['detalle']->NombreS;
		$params['DescripcionS']=$datos['detalle']->DescripcionS;
		
		$params['NomP']='Actualizar secretaría';
		
		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/actualizarsecretaria');
		$this->load->view('front_end/footer');

	}

	function actualizarda(){
		$this->load->model('Miplan');

		$params['idsec']=$this->input->get("ids");
		$params['NombreS']=strtoupper($this->input->get("nombre"));
		$params['DescripcionS']=strtoupper($this->input->get("descripcion"));

		if (isset($_GET["actualizar"])) {
			$this->Miplan->actualizar_secretaria($params['idsec'],$params['NombreS'],$params['DescripcionS']);
			redirect('csecretarias');
		}	
		//redirect('cverprograma');		
	}

	function cancel(){
		redirect('csecretarias');	
	}

}
