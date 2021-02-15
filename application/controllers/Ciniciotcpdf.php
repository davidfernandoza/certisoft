<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ciniciotcpdf extends CI_Controller {

    function _construct()
    {
        parent::_construct();
        $this->load->model('Miplan');
    }
    
    public function index()
    {
        $idc = $_GET['idc'];
        $ide = $_GET['ide'];
        $this->load->model('Miplan');
        if ($this->session->userdata('CS') == FALSE){
            redirect('clogin'); 
        }

        $params['usuario']= $this->session->userdata('Rol');
        if($params['usuario']=='EMPLEADO'){
            redirect('cinicio');
         }
        $id =1;
        $datos['contrato'] = $this->Miplan->contrato_empleado($idc);
        $datos['salario'] = $this->Miplan->salario_contrato($idc);
        $datos['certificado'] = $this->Miplan->detalle_certificado($id);


        if ($params['usuario']=='ADMINISTRADOR') 
        {
            $this->load->view('paginas/pdf', $datos);
            $this->load->view('front_end/editpdf');
        }
        else
        {
            $this->load->view('paginas/pdf', $datos);
            $this->load->view('front_end/editpdfe');
        }    
        
    }

 
    public function empleadosdepto() {
        $this->load->model('Mimodelo');
        $depto=$_POST['depto'];
        $empleados=$this->Mimodelo->empleadosdepto($depto);
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        /*$pdf->SetAuthor('German Gonzalez Bedoya');
        $pdf->SetTitle('Departamentos');
        $pdf->SetSubject('\nEmpleados por departamento');
        $pdf->SetKeywords('impresión, prueba');
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));
 ¨
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
// Establecer el tipo de letra
 
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('freemono', '', 6, '', true);
 */
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
//fijar efecto de sombra en el texto
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
 
// Establecemos el contenido para imprimir
        //preparamos y maquetamos el contenido a crear
        $titulo="<img src='".base_url()."assets/logos/alcaldia_100.png'><h1>Empleados del departamento<h1><br><br>";
        $cuerpo="";
        foreach ($empleados as $item) {
            $cuerpo=$cuerpo."El empleado con cedula $item->CC y nombre $item->Nombre trabaja en el departamento $item->NomDepto<br><br>";
        }

        $html=$titulo.$cuerpo;
 
// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
 
// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Documento.pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
}