<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarcontrato extends CI_Controller {

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
    	$idc = $_GET['idc'];
    	$params['idc'] = $idc;
    	$params['secretarias']=$this->Miplan->lista_secretarias();
		$params['NomP']='Actualizar contrato';
		$params['contrato']=$this->Miplan->detalle_contrato($idc,$ide);
		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/actualizarcontrato');
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


	function actualizar(){
		$this->load->model('Miplan');

		$params['idc']=$_GET["idc"];
		$params['ide']=$_GET["ide"];
		$params['idcar']=$_GET["cargo"];
		$params['fi']=$_GET["fi"];
		$params['ff']=$_GET["ff"];

		if (isset($_GET["guardar"])) {
			$this->Miplan->actualizar_contrato($params['idc'],$params['idcar'],$params['ide'],$params['fi'],$params['ff']);
			
			?>
			<body onload="document.form1.submit();">
				<form name="form1" id="form1" method="get" action="<?php echo base_url()?>ccontratos">
					<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
				</form>
			</body>
			<?php		
		}	
	}

	function cancel(){
		$params['ide']=$_GET['ide'];
		?>
		<body onload="document.form1.submit();">
			<form name="form1" id="form1" method="get" action="<?php echo base_url()?>ccontratos">
				<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
			</form>
		</body>
		<?php
	}
}
