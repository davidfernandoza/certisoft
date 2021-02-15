<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccontrasena extends CI_Controller {

	public function index()
	{
		$this->load->view('paginas/contra');

	}

	public function  email(){
		$this->load->model('Miplan');
		$this->load->library('encryption');
		$idu=$_GET["id"];
		$veri=$this->Miplan->verificar_usuario($idu);
		if($veri=='1')
		{
			$datos['detalle']=$this->Miplan->detalle_usuario($idu);
			$Nombre=$datos['detalle']->Nombre.' '.$datos['detalle']->Apellido;
			$Email=$datos['detalle']->Email;
			$Contrasena=$this->encryption->decrypt($datos['detalle']->Contrasena);
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.googlemail.com',
				'smtp_user' => 'certisoftalcaldia@gmail.com',
				'smtp_pass' => 'certisoftalcaldia1',
				'smtp_port' => '465',
				'smtp_crypto' => 'ssl',
				'mailtype' => 'html',
				'wordwrap' => TRUE,
				'charset' => 'utf-8',
				'newline' => "\r\n"
			);
			$this->load->library('email');
			$this->email->initialize($config);
			$this->email->from('certisoftalcaldia@gmail.com');
			$this->email->subject('Recuperación de contraseña');
			$this->email->message('Apreciado '.$Nombre.' su contraseña es: <br><br>'.$Contrasena);
			$this->email->to($Email);
			$this->email->send();
			redirect('clogin');
		}else{
			$this->session->set_flashdata('Mensaje','Usuario o Contrasena errados');
			redirect('Ccontrasena');
		}
	}

}
