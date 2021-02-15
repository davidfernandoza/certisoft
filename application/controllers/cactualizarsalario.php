<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cactualizarsalario extends CI_Controller {

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

		$datos['ide'] = $_GET['ide'];
		$datos['idc'] = $_GET['idc'];
		$datos['anio'] = $_GET['anio'];
		$datos['detalle']=$this->Miplan->detalle_salario($datos['idc'],$datos['anio']);

		$params['ide']=$datos['ide'];
		$params['idc']=$datos['idc'];
		$params['anio']=$datos['detalle']->Anio;
		$params['salario']=$datos['detalle']->Salario;
		$params['gastosR']=$datos['detalle']->GastosRepresentacion;
		$params['NomP']='Actualizar salario';
		

		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/actualizarsalario');
		$this->load->view('front_end/footer');

	}

	function actualizarda(){
		$this->load->model('Miplan');

		$params['idc']=$_GET['idc'];
		$params['ide']=$_GET['ide'];
		$params['anio']=$_GET['anio'];
		$params['salario']=strtoupper($this->input->get("salario"));
		$params['gastosR']=strtoupper($this->input->get("gastosR"));
		
		if (isset($_GET["actualizar"])) {
			$this->Miplan->actulizar_salario($params['anio'],$params['idc'],$params['salario'],$params['gastosR']);
		}

		?>
		<body onload="document.form1.submit();">
			<form name="form1" id="form1" method="get" action="<?php echo base_url()?>csalarios">
				<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
				<input name="idc"  type="hidden" value="<?php echo $params['idc'] ?>" />
			</form>
		</body>	
		<?php	
	}

	function cancel(){
		$params['ide']=$_GET['ide'];
		$params['idc']=$_GET['idc'];
		?>
		<body onload="document.form1.submit();">
			<form name="form1" id="form1" method="get" action="<?php echo base_url()?>csalarios">
				<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
				<input name="idc"  type="hidden" value="<?php echo $params['idc'] ?>" />
			</form>
		</body>	
		<?php	






	}

}
