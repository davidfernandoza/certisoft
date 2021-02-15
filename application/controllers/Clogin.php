<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	public function index()
	{
		$this->load->model('Miplan');
		if ($this->session->userdata('CS')){
			redirect('cinicio');
		}
		$this->load->view('paginas/login');

	}

	public function autenticar()
	{

		if ($this->session->userdata('CS')){
			redirect('cinicio');
		}
		
		$this->load->library('encryption'); 

		$params['id']=$_POST["usuario"];
		$params['contrasena']=$_POST["contrasena"];
		
		$this->load->model('Miplan');

		$datos=$this->Miplan->validar($params['id']);
		$contraen=$datos['contra'];	
		$contrades=$this->encryption->decrypt($contraen);
		if ($datos['val']==1 and ($params['contrasena']==$contrades) and $datos['esta']=='ACTIVO') {
			$this->session->set_userdata('Nombre',$datos['nom'].' '.$datos['ape']);
			$this->session->set_userdata('Rol',$datos['rol']);
			$this->session->set_userdata('Id',$params['id']);
			$this->session->set_userdata('CS',"CERTISOFT");
			redirect('cinicio');	
		}else{
			$this->session->set_flashdata('Mensaje','Usuario o Contrasena errados');
			redirect('clogin');
		}
	}
	
	public function Salir(){
		$this->session->sess_destroy();
		redirect('Clogin');
	} 

}

