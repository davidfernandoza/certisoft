<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cguardarcontrato extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');
		}

		$params['usuario']=$this->session->userdata('Rol');
		if($params['usuario']=='REGULAR'){
			redirect('cinicio');
		}

		$this->load->model('Miplan');

		$ide = $_GET['ide'];
    	$params['ide'] = $ide;
    	$params['secretarias']=$this->Miplan->lista_secretarias();
		$params['NomP']='Nuevo contrato';
		
		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/guardarcontrato');
		$this->load->view('front_end/footer');

	}

	public function llena_cargos()
	{
		$this->load->model('Miplan');
		$options = "";
		if($this->input->post('secretaria'))
		{
			$secretaria = $_POST['secretaria'];
			$cargos = $this->Miplan->lista_cargossec($secretaria);
			foreach($cargos as $fila)
			{
			?>
				<option value="<?php echo $fila->idCargo;  ?>"><?php echo $fila->NombreC ?></option>
			<?php
			}
		}
	}


	function guardar(){
		$this->load->model('Miplan');

		$params['idc']=$_GET["idc"];
		$params['ide']=$_GET["ide"];
		$params['idcar']=$_GET["cargo"];
		$params['fi']=$_GET["fi"];
		$params['ff']=$_GET["ff"];

		if (isset($_GET["guardar"])) {
			$mensaje=$this->Miplan->guardar_contrato($params['idc'],$params['idcar'],$params['ide'],$params['fi'],$params['ff']);
			if ($mensaje=='1') {
				?>
				<body onload="document.form1.submit();">
					<form name="form1" id="form1" method="get" action="<?php echo base_url()?>ccontratos">
						<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
					</form>
				</body>	
				<?php
			}else{
				$this->session->set_flashdata('Mensaje','SI');
				?>
				<body onload="document.form1.submit();">
					<form name="form1" id="form1" method="get" action="<?php echo base_url()?>Cguardarcontrato">
						<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
					</form>
				</body>	
				<?php
			}	
		}	
	}

	function cancel(){
		redirect('cempleados');
	}
}
