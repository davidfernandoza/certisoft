<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csalarios extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('CS') == FALSE){
			redirect('clogin');	
		}

		$datos['usuario']=$this->session->userdata('Rol');

		$this->load->model('Miplan');

		$datos['ide'] = $_GET['ide'];
		$datos['idc'] = $_GET['idc'];
		$datos['idu'] = $_GET['ide'];
		
		$datos['salarios']=$this->Miplan->lista_salarios($datos['idc']);
		$datos['NomP']="Salarios contrato";

		$this->load->view('front_end/header',$datos);
		if ($datos['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/salarios');
	}

	public function eliminar()
	{
		$anio=$_GET['anio'];
		$idc=$_GET['idc'];
		$ide=$_GET['ide'];
		$this->load->model('Miplan');
		$this->Miplan->eliminar_salario($anio,$idc);
		?>
		<body onload="document.form1.submit();">
			<form name="form1" id="form1" method="get" action="<?php echo base_url()?>csalarios">
				<input name="idc"  type="hidden" value="<?php echo $idc ?>" />
				<input name="ide"  type="hidden" value="<?php echo $ide ?>" />
			</form>
		</body>
		<?php
	}

}
