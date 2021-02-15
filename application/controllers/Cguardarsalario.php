<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cguardarsalario extends CI_Controller {

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
		$params['NomP']='Nuevo salario del contrato';
		
		$this->load->view('front_end/header',$params);
		if ($params['usuario']=='ADMINISTRADOR') {
			$this->load->view('front_end/menu');
		}else{
			$this->load->view('front_end/menur');
		}
		$this->load->view('paginas/guardarsalario');
		$this->load->view('front_end/footer');

	}

	function guardar(){
		$this->load->model('Miplan');

		$params['anio']=$_GET["anio"];
		$params['ide']=$_GET["ide"];
		$params['idc']=$_GET["idc"];
		$params['salario']=$_GET["salario"];
		$params['gastos']=$_GET["gastos"];

		if (isset($_GET["guardar"])) {
			$mensaje=$this->Miplan->guardar_salario($params['anio'],$params['idc'],$params['salario'],$params['gastos']);
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
					<form name="form1" id="form1" method="get" action="<?php echo base_url()?>Cguardarsalario">
						<input name="idc"  type="hidden" value="<?php echo $params['idc'] ?>" />
						<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
					</form>
				</body>	
				<?php
			}	
		}	
	}

	function cancel(){
		$params['ide']=$_GET["ide"];
		?>
		<body onload="document.form1.submit();">
			<form name="form1" id="form1" method="get" action="<?php echo base_url()?>ccontratos">
				<input name="ide"  type="hidden" value="<?php echo $params['ide'] ?>" />
			</form>
		</body>	
		<?php	
	}
}
