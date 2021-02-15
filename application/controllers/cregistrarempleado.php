<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregistrarempleado extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');
		}

		$params['usuario']=$this->session->userdata('Rol');
		if($params['usuario']=='REGULAR'){
			redirect('cinicio');
		}
		
		$params['NomP']='Registrar empleado';

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/registrarempleado');
		$this->load->view('front_end/footer');

	}

	function cancel(){
		redirect('cinicio');		
	}
}
