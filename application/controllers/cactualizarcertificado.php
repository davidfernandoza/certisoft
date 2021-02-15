<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarcertificado extends CI_Controller {



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
		$id = 1;

			$datos['detalle']=$this->Miplan->detalle_certificado($id);
			$params['NomP']="Actualizar Certificado";
			$params['secretaria']=$datos['detalle']->secretaria;
			$params['subS']=$datos['detalle']->subsecretaria;
			$params['nomS']=$datos['detalle']->nombresecretario;
			$params['cargoS']=$datos['detalle']->cargosecretario;
			$params['firma']=$datos['detalle']->firma;
			$params['lema']=$datos['detalle']->lema;
			$params['direccion']=$datos['detalle']->direccion;
			$params['telefono']=$datos['detalle']->telefono;
			$params['fax']=$datos['detalle']->fax;
			$params['pagina']=$datos['detalle']->pagina;
			$params['correo']=$datos['detalle']->correo;

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/actualizarcertificado');
		$this->load->view('front_end/footer');

	}

	function actualizarda(){
		$this->load->model('Miplan');
		$id = 1;
		$config =[
			"upload_path" => "./assets/images",
			'allowed_types' => "png|jpg"
		];

		$this->load->library("upload", $config);

		if ($this->upload->do_upload('foto_firma')) 
		{
			$data = array("upload_data" => $this->upload->data());
			$params['firma']= "assets/images/".$data["upload_data"]["file_name"];	
		}
		else
		{
			$params['firma']= $this->input->post("firmaor");
		}

			$params['secretaria']=mb_strtoupper($this->input->post("secretaria"),"UTF-8");
			$params['subS']=mb_strtoupper($this->input->post("subsecretaria"),"UTF-8");
			$params['nomS']=mb_strtoupper($this->input->post("nombre"),"UTF-8");
			$params['cargoS']=$this->input->post("cargo");
			$params['lema']=mb_strtoupper($this->input->post("lema"), "UTF-8");
			$params['direccion']=$this->input->post("direccion");
			$params['telefono']=$this->input->post("telefono");
			$params['fax']=$this->input->post("fax");
			$params['pagina']=$this->input->post("pagina");
			$params['correo']=$this->input->post("correo");

			if (isset($_POST["actualizar"])) 
			{
				$this->Miplan->actualizar_certificado($id,$params['secretaria'],$params['subS'],$params['nomS'],$params['cargoS'],$params['firma'],$params['lema'],$params['direccion'],$params['telefono'],$params['fax'],$params['pagina'],$params['correo']);	
			}


		 redirect('cactualizarcertificado');
	}

	function cancel(){
		redirect('cinicio');
	}

}
