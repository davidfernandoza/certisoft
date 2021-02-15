<?php

class Miplan extends CI_Model{

	public function _construct(){
		parent:: _construct();
	}

	function validar($id)
    {      
        $this->db->select('idUsuarios,Nombre,Apellido,Contrasena,Rol,Estado');
        $this->db->from('usuarios');
        $this->db->where('idUsuarios',$id);
        $this->db->where('Estado','ACTIVO');		
        $resultado=$this->db->get();
        if($resultado->num_rows() != 0){
        	$r=$resultado->row(); 
        	$r= array(
        		'val' => 1,
                'id' => $resultado->row()->idUsuarios,
        		'nom' => $resultado->row()->Nombre,
        		'ape' => $resultado->row()->Apellido,
        		'contra' => $resultado->row()->Contrasena,
                'rol' => $resultado->row()->Rol,
                'esta' => $resultado->row()->Estado
        	);
        }else{
        	$r= array(
        		'val' => 0,
                'id' => NULL,
        		'nom' => NULL,
        		'ape' => NULL,
        		'contra' => NULL,
                'rol' => NULL,
                'esta' => NULL
        	);
        }
        return $r; 
    }

	function lista_usuarios(){
		$consulta=$this->db->get('usuarios');
		return $consulta->result();
	}
  
	function detalle_usuario($id)
	{
		$this->db->where('idUsuarios',$id);
		$consulta=$this->db->get('usuarios');
		return $consulta->row();
	}

    function verificar_usuario($id)
    {
        $this->db->where('idUsuarios',$id);
        $consulta=$this->db->get('usuarios');
        if ($consulta->num_rows() > 0)
        {
            $men='1';
        }else{
            $men='2';
        }
        return $men;
    }

    function comprobar_empleado($id)
    {
        $this->db->where('Cedula',$id);
        $consulta=$this->db->get('empleado');
        if ($consulta->num_rows() > 0)
        {
            $men='1';
        }else{
            $men='2';
        }
        return $men;
    }

	function contar_usuarios()
	{
		$this->db->select('count(idUsuarios) as U');
		$consulta=$this->db->get('usuarios');
		return $consulta->row();
	}

    function contar_contratos($id)
    {
        $this->db->select('count(idCE) as C');
        $this->db->where('Empleado_Cedula',$id);
        $consulta=$this->db->get('contrato');
        return $consulta->row();
    }

    function contar_secretarias()
    {
        $this->db->select('count(idSecretaria) as S');
        $consulta=$this->db->get('secretaria');
        return $consulta->row();
    }

    function contar_cargos()
    {
        $this->db->select('count(*) as C');
        $consulta=$this->db->get('cargo');
        return $consulta->row();
    }

    function contar_empleados()
    {
        $this->db->select('count(*) as E');
        $consulta=$this->db->get('empleado');
        return $consulta->row();
    }

	function actualizar_usuario($id,$nom,$ape,$tel,$ema,$contra,$rol,$esta){
		$this->load->library('encryption');
		$contraen= $this->encryption->encrypt($contra);
		$data = array(
			'idUsuarios' => $id,
            'Nombre' => $nom,
            'Apellido' => $ape,
            'Telefono' => $tel,
            'Email' => $ema,
            'Contrasena' => $contraen,
            'Rol' => $rol,
            'Estado' => $esta
        );
        $this->db->where('idUsuarios', $id);
        $this->db->update('usuarios', $data);
	}

    function actualizar_perfil($id,$nom,$ape,$tel,$ema,$contra){
        $this->load->library('encryption');
        $contraen= $this->encryption->encrypt($contra);
        $data = array(
            'idUsuarios' => $id,
            'Nombre' => $nom,
            'Apellido' => $ape,
            'Telefono' => $tel,
            'Email' => $ema,
            'Contrasena' => $contraen
        );
        $this->db->where('idUsuarios', $id);
        $this->db->update('usuarios', $data);
    }

    function guardar_usuario($id,$nom,$ape,$tel,$ema,$contra,$rol,$esta){
        $this->load->library('encryption');
        $contraen= $this->encryption->encrypt($contra);
        $this->db->where('idUsuarios',$id);
        $existe=$this->db->get('usuarios');
        if($existe->num_rows() > 0 ){
            $consulta = '2';
        }else{
            $data = array(
                'idUsuarios' => $id,
                'Nombre' => $nom,
                'Apellido' => $ape,
                'Telefono' => $tel,
                'Email' => $ema,
                'Contrasena' => $contraen,
                'Rol' => $rol,
                'Estado' => $esta
            );
            $this->db->insert('usuarios', $data);
            $consulta = '1';
        }
        return $consulta;
    }

    function lista_secretarias(){
        $consulta=$this->db->query("SELECT * FROM secretaria");
        return $consulta->result();
    }

    function lista_cargos(){
        $consulta=$this->db->query('SELECT idCargo, NombreC, NombreS, DescripcionC FROM secretaria, cargo WHERE secretaria_idSecretaria=idSecretaria');
        return $consulta->result();
    }

    function detalle_cargo($id)
    {
        $consulta=$this->db->query("SELECT idCargo, idSecretaria, NombreC, NombreS, DescripcionC FROM secretaria, cargo WHERE secretaria_idSecretaria=idSecretaria AND idCargo=$id");
        return $consulta->row();
    }

    function actualizar_cargo($id,$nom,$des,$sec){
        $data = array(
            'idCargo' => $id,
            'NombreC' => $nom,
            'DescripcionC' => $des,
            'secretaria_idSecretaria' => $sec
        );
        $this->db->where('idCargo', $id);
        $this->db->update('cargo', $data);
    }
    
    function guardar_cargo($id,$nom,$des,$sec){
        
        $this->db->where('idCargo',$id);
        $existe=$this->db->get('cargo');
        if($existe->num_rows() > 0 ){
            $consulta = '2';
        }else{
            $data = array(
                'idCargo' => $id,
                'NombreC' => $nom,
                'DescripcionC' => $des,
                'secretaria_idSecretaria' => $sec,
            );
        
            $this->db->insert('cargo', $data);
            $consulta = '1';
        }
        return $consulta;
    }

    function contrasena($id){
        $this->db->where('idUsuarios',$id);
        $consulta=$this->db->get('usuarios');
        return $consulta->row();
    }

    function lista_empleados(){
        $consulta=$this->db->get('empleado');
        return $consulta->result();
    }

    function detalle_empleado($id)
    {
        $this->db->where('Cedula',$id);
        $consulta=$this->db->get('empleado');
        return $consulta->row();
    }

    function detalle_secretaria($ids)
    {
        $this->db->where('idSecretaria',$ids);
        $consulta=$this->db->get('secretaria');
        return $consulta->row();
    }

    function actualizar_secretaria($ids,$nom,$desc){
        $data = array(
            'idSecretaria' => $ids,
            'NombreS' => $nom,
            'DescripcionS' => $desc
        );
        $this->db->where('idSecretaria', $ids);
        $this->db->update('secretaria', $data);
    }
    
    function guardar_secretaria($id,$nom,$desc){
        
        $this->db->where('idSecretaria',$id);
        $existe=$this->db->get('secretaria');
        if($existe->num_rows() > 0 ){
            $consulta = '2';
        }else{
            $data = array(
                'idSecretaria' => $id,
                'NombreS' => $nom,
                'DescripcionS' => $desc  
            );
        
            $this->db->insert('secretaria', $data);
            $consulta = '1';
        }

        return $consulta;
    }

    function lista_contratos($ide){
        $consulta=$this->db->query("SELECT idCE, FechaInicio, FechaFin, NombreS, NombreC from contrato, cargo, secretaria where idSecretaria=secretaria_idSecretaria AND idCargo=cargo_idCargo AND Empleado_Cedula=$ide" );
        
        return $consulta->result();
    }

    function lista_indicadoresproyectoo(){
        $consulta=$this->db->query("SELECT idIndicadorProyecto,NombreIP,indicadorproyecto.Meta,indicadorproyecto.ValorActual,indicadorproyecto.ValorEsperado,indicadorproyecto.Estado,Nombre,NombreP,idprograma,idProyecto from indicadorproyecto, proyecto, programa where proyecto_idProyecto=idProyecto AND p_p_idprograma=programa_idprograma and programa_idprograma=idprograma");
        
        return $consulta->result();
    }

    function setproyecto($idp){
        $this->db->query("UPDATE dato SET proyecto=$idp WHERE id=0");
    }

    function setobservacion($ido){
        $this->db->query("UPDATE dato SET observacion=$ido WHERE id=0");
    }

    function setindicadorp($idi){
        $this->db->query("UPDATE dato SET indicadorp=$idi WHERE id=0");
    }

    function setviene($vi){
        $this->db->query("UPDATE dato SET viene=$vi WHERE id=0");
    }

    function getviene(){
        $consulta=$this->db->query("SELECT viene FROM dato WHERE id=0");
        $viene=$consulta->row()->viene;
        return $viene;
    }

    function getproyecto(){
        $consulta=$this->db->query("SELECT proyecto FROM dato WHERE id=0");
        $proyecto=$consulta->row()->proyecto;
        return $proyecto;
    }

    function getusuario(){
        $consulta=$this->db->query("SELECT usuario FROM dato WHERE id=0");
        $usuario=$consulta->row()->usuario;
        return $usuario;
    }

    function setusuario($usu){
        $this->db->query("UPDATE dato SET usuario=$usu WHERE id=0");
    }

    function getobservacion(){
        $consulta=$this->db->query("SELECT observacion FROM dato WHERE id=0");
        $observacion=$consulta->row()->observacion;
        return $observacion;
    }

    function getindicadorp(){
        $consulta=$this->db->query("SELECT indicadorp FROM dato WHERE id=0");
        $indicadorp=$consulta->row()->indicadorp;
        return $indicadorp;
    }

    function inversiontotalproyecto($idp,$idpr){
        $consulta=$this->db->query("SELECT SUM(Monto) AS Inversion FROM actividadindicador WHERE ip_p_idProyecto=$idp AND ip_p_p_idprograma=$idpr");
        $Inversion=$consulta->row()->Inversion;
        return $Inversion;
    }

    function setprograma($idp){
        $this->db->query("UPDATE dato SET programa=$idp WHERE id=0");
    }

    function getprograma(){
        $consulta=$this->db->query("SELECT programa FROM dato WHERE id=0");
        $programa=$consulta->row()->programa;
        return $programa;
    }

    function setactividad($ida){
        $this->db->query("UPDATE dato SET actividad=$ida WHERE id=0");
    }

    function getactividad(){
        $consulta=$this->db->query("SELECT actividad FROM dato WHERE id=0");
        $actividad=$consulta->row()->actividad;
        return $actividad;
    }

    function setindicadora($idia){
        $this->db->query("UPDATE dato SET indicadora=$idia WHERE id=0");
    }

    function getindicadora(){
        $consulta=$this->db->query("SELECT indicadora FROM dato WHERE id=0");
        $indicadora=$consulta->row()->indicadora;
        return $indicadora;
    }

    function inversiontotalprograma($idp){
        $consulta=$this->db->query("SELECT SUM(Monto) AS Inversion FROM actividadindicador WHERE ip_p_p_idprograma=$idp");
            $Inversion=$consulta->row()->Inversion;
            return $Inversion;
    }

    function guardar_empleado($ide,$nom,$ape,$caj){ 
        $this->db->where('Cedula',$ide);
        $existe=$this->db->get('empleado');
        if($existe->num_rows() > 0 ){
            $consulta = '2';
        }else{
            $data = array(
                'Cedula' => $ide,
                'NombreE' => $nom,
                'ApellidoE' => $ape,
                'Caja' => $caj
            );
        
            $this->db->insert('empleado', $data);
            $consulta = '1';
        }
        return $consulta;
    }

    function detalle_indicadorproyecto($idi,$idp,$idpr){
        $this->db->where('idIndicadorProyecto',$idi);
        $this->db->where('proyecto_idProyecto',$idp);
        $this->db->where('p_p_idprograma',$idpr);
        $consulta=$this->db->get('indicadorproyecto');
        return $consulta->row(); 
    }

    function inversiontotalindicadorp($idi,$idp,$idpr){
        $consulta=$this->db->query("SELECT SUM(Monto) AS Inversion FROM  actividadindicador WHERE ip_p_idProyecto=$idp AND ip_idIndicadorProyecto=$idi AND ip_p_p_idprograma=$idpr");
        $Inversion=$consulta->row()->Inversion;
        return $Inversion;
    }

    function actualizar_empleado($ide,$nom,$ape,$caj){
        $data = array(
            'Cedula' => $ide,
            'NombreE' => $nom,
            'ApellidoE' => $ape,
            'Caja' => $caj
        );
        $this->db->where('Cedula', $ide);
        $this->db->update('empleado', $data);
    }

    function guardar_salario($an,$idc,$sal,$gr){ 
        $existe=$this->db->query("SELECT * FROM salario WHERE Anio=$an AND contrato_idCE=$idc");
        if($existe->num_rows() > 0 ){
            $consulta = '2';
        }else{
            $data = array(
                'Anio' => $an,
                'contrato_idCE' => $idc,
                'Salario' => $sal,
                'GastosRepresentacion' => $gr
            );
        
            $this->db->insert('salario', $data);
            $consulta = '1';
        }
        return $consulta;
    }

    function lista_salarios($idc){
        $consulta=$this->db->query("SELECT * FROM salario WHERE contrato_idCE=$idc");       
        return $consulta->result();
    }

    function lista_cargossec($ids){
        $consulta=$this->db->query("SELECT * FROM cargo WHERE secretaria_idSecretaria=$ids");       
        return $consulta->result();
    }

    function guardar_contrato($idc,$idcar,$ide,$fi,$ff){ 
        $existe=$this->db->query("SELECT * FROM contrato WHERE idCE=$idc AND Empleado_Cedula=$ide");
        if($existe->num_rows() > 0 ){
            $consulta = '2';
        }else{
            $data = array(
                'idCE' => $idc,
                'cargo_idCargo' => $idcar,
                'Empleado_Cedula' => $ide,
                'FechaInicio' => $fi,
                'FechaFin' => $ff
            );
        
            $this->db->insert('contrato', $data);
            $consulta = '1';
        }
        return $consulta;
    }

    function lista_actividadesindicadord($doc){
        $consulta=$this->db->query("SELECT idActividadIndicador,NombreAI,Fecha,actividadindicador.Meta,idUsuarios,CONCAT(usuarios.Nombre,' ',Apellido) as NombreU,Monto,Fuente,actividadindicador.Estado,idprograma,idProyecto,proyecto.Nombre,NombreP,idIndicadorProyecto,NombreIP FROM usuarios,actividadindicador,programa,proyecto,indicadorproyecto WHERE ip_p_idProyecto=proyecto_idProyecto AND ip_p_idProyecto = idProyecto AND ip_idIndicadorProyecto = idIndicadorProyecto AND ip_p_p_idprograma=p_p_idprograma AND usuarios_idUsuarios=idUsuarios AND p_p_idprograma=programa_idprograma AND proyecto_idProyecto=idProyecto AND idprograma=programa_idprograma AND usuarios_idUsuarios=$doc");       
        return $consulta->result();
    }


    function detalle_contrato($idc,$ide){
        $consulta=$this->db->query("SELECT idCE, idSecretaria,idCargo,NombreS,NombreC,FechaInicio,FechaFin FROM contrato,cargo,secretaria WHERE idSecretaria=secretaria_idSecretaria AND idCargo=cargo_idCargo AND Empleado_Cedula=$ide AND idCE=$idc");
        
        return $consulta->row(); 
    }

    function actualizar_contrato($idc,$idcar,$ide,$fi,$ff){
        $data = array(
                'idCE' => $idc,
                'cargo_idCargo' => $idcar,
                'Empleado_Cedula' => $ide,
                'FechaInicio' => $fi,
                'FechaFin' => $ff
            );
        $this->db->where('idCE', $idc);
        $this->db->where('Empleado_Cedula', $ide);
        $this->db->update('contrato', $data);
    }

    function guardar_evidencia($nomv,$nom,$dat,$tip,$ida,$idi,$idp,$idpr){ 
        $data = array(
            'NombreV' => $nomv,
            'NombreE' => $nom,
            'Dato' => $dat,
            'Tipo' => $tip,
            'a_ActividadIndicador' => $ida,
            'a_ip_IndicadorProyecto' => $idi,
            'a_ip_p_idProyecto' => $idp,
            'a_ip_p_p_idprograma' => $idpr
        );
        $this->db->insert('evidencia', $data);
    }

    function guardar_documento($nomv,$nom,$dat,$tip,$idp,$idpr){ 
        $data = array(
            'NombreD' => $nomv,
            'NombreA' => $nom,
            'Documento' => $dat,
            'TipoD' => $tip,
            'proyecto_idProyecto' => $idp,
            'p_p_idprograma' => $idpr
        );
        $this->db->insert('docproye', $data);
    }

    public function eliminar_evidencia($evi)
    {
        $this->db->query("DELETE FROM evidencia WHERE idEvidencia=$evi");
    }

    public function lista_evidencias($ida,$idi,$idp,$idpr)
    {
        $consulta=$this->db->query("SELECT * from evidencia WHERE a_ip_p_idProyecto = $idp AND a_ip_IndicadorProyecto = $idi AND a_ActividadIndicador=$ida AND a_ip_p_p_idprograma=$idpr");       
        return $consulta->result();
    }

    public function eliminar_documento($doc)
    {
        $this->db->query("DELETE FROM docproye WHERE iddp=$doc");
    }

    public function lista_documentos($idp,$idpr)
    {
        $consulta=$this->db->query("SELECT * from docproye WHERE proyecto_idProyecto = $idp AND p_p_idprograma=$idpr");       
        return $consulta->result();
    }

    function lista_indicadoresactividad($ida,$idi,$idp){
        $consulta=$this->db->query("SELECT * from indicadoractividad WHERE ap_ip_p_idProyecto = $idp AND ap_ip_idIndicadorProyecto = $idi AND actividadindicador_idactividadindicador=$ida");       
        return $consulta->result();
    }

    function detalle_indicadoractividad($idia,$ida,$idi,$idp){
        $this->db->where('idIndicadorActividad',$idia);
        $this->db->where('actividadindicador_idactividadindicador',$ida);
        $this->db->where('ap_ip_idIndicadorProyecto',$idi);
        $this->db->where('ap_ip_p_idProyecto',$idp);
        $consulta=$this->db->get('indicadoractividad');
        return $consulta->row(); 
    }

    function actualizar_indicadoractividad($idia,$nom,$va,$ve,$ida,$idi,$idp){
        $this->db->query("UPDATE indicadoractividad SET NombreIA='$nom',ValorActual=$va,ValorEsperado=$ve WHERE idIndicadorActividad=$idia AND actividadindicador_idactividadindicador=$ida AND ap_ip_idIndicadorProyecto=$idi AND ap_ip_p_idProyecto=$idp");
    }

    function detalle_indicadoractividad1($idia,$ida,$idi,$idp){
        $this->db->where('idIndicadorActividad',$idia);
        $this->db->where('actividadindicador_idactividadindicador',$ida);
        $this->db->where('ap_ip_idIndicadorProyecto',$idi);
        $this->db->where('ap_ip_p_idProyecto',$idp);
        $consulta=$this->db->get('indicadoractividad');
        $data = array(
                'NombreIA' => $consulta->row()->NombreIA,
                'ValorActual' => $consulta->row()->ValorActual,
                'ValorEsperado' => $consulta->row()->ValorEsperado
            );
        return $data; 
    }

    public function contar_actividadesterminadas($idi,$idp,$idpr)
    {
        $consulta=$this->db->query("SELECT COUNT(*) AS AT FROM actividadindicador WHERE ip_idIndicadorProyecto=$idi AND ip_p_idProyecto=$idp AND ip_p_p_idprograma=$idpr AND Estado='TERMINADA'");
        return $consulta->row()->AT;
    }

    public function contar_actividadesindi($idi,$idp,$idpr)
    {
        $consulta=$this->db->query("SELECT COUNT(*) AS AI FROM actividadindicador WHERE ip_idIndicadorProyecto=$idi AND ip_p_idProyecto=$idp AND ip_p_p_idprograma=$idpr");
        return $consulta->row()->AI;
    }

    public function contar_indicadoresterminados($idp,$idpr)
    {
        $consulta=$this->db->query("SELECT COUNT(*) AS IT FROM indicadorproyecto WHERE proyecto_idProyecto=$idp AND p_p_idprograma=$idpr AND Estado='TERMINADO'");
        return $consulta->row()->IT;
    }

    public function contar_proyectosterminados($idpr)
    {
        $consulta=$this->db->query("SELECT COUNT(*) AS PT FROM proyecto WHERE programa_idprograma=$idpr AND Estado='TERMINADO'");
        return $consulta->row()->PT;
    }

    public function contar_proyectosprograma($idpr)
    {
        $consulta=$this->db->query("SELECT COUNT(*) AS PP FROM proyecto WHERE programa_idprograma=$idpr AND programa_idprograma=$idpr ");
        return $consulta->row()->PP;
    }

    public function actualizar_vaindicador($va,$idi,$idp,$idpr)
    {
        $this->db->query("UPDATE indicadorproyecto SET ValorActual=$va WHERE idIndicadorProyecto=$idi AND proyecto_idProyecto=$idp AND p_p_idprograma=$idpr");
    }

    public function actualizar_estadoindicador($es,$idi,$idp,$idpr)
    {
        $this->db->query("UPDATE indicadorproyecto SET Estado='$es' WHERE idIndicadorProyecto=$idi AND proyecto_idProyecto=$idp AND p_p_idprograma=$idpr");
    }

    public function actualizar_vaproyecto($va,$idp,$idpr)
    {
        $this->db->query("UPDATE proyecto SET ValorActual=$va WHERE idProyecto=$idp AND programa_idprograma=$idpr");
    }

    public function actualizar_estadoproyecto($es,$idp,$idpr)
    {
        $this->db->query("UPDATE proyecto SET Estado='$es' WHERE idProyecto=$idp AND programa_idprograma=$idpr");
    }

    public function actualizar_estadoprograma($es,$idpr)
    {
        $this->db->query("UPDATE programa SET Estado='$es' WHERE idprograma=$idpr");
    }
    
    function contrato_empleado($id){
        $consulta=$this->db->query("SELECT * FROM contrato, empleado, secretaria, cargo WHERE idCE=$id AND Cedula=Empleado_Cedula AND idCargo=Cargo_idCargo AND Secretaria_idSecretaria=idSecretaria");
        return $consulta->row();
    } 

    function salario_contrato($id)
    {
        $consulta=$this->db->query("SELECT * FROM salario WHERE Contrato_idCE=$id");
        return $consulta->result();
    } 

    public function eliminar_salario($anio,$idc)
    {
        $this->db->query("DELETE FROM salario WHERE Anio=$anio AND Contrato_idCE=$idc");
    }


    function detalle_certificado($id)
    {
        $consulta=$this->db->query("SELECT * FROM certificados WHERE idcertificado=$id");
        return $consulta->row();
    }

    function actualizar_certificado($id,$sec,$sub,$nom,$car,$fir,$lem,$dir,$tel,$fax,$pag,$cor)
    {
        $data = array(
            'idcertificado' => $id,
            'secretaria' => $sec,
            'subsecretaria' => $sub,
            'nombresecretario' => $nom,
            'cargosecretario' => $car,
            'firma' => $fir,
            'lema' => $lem,
            'direccion' => $dir,
            'telefono' => $tel,
            'fax' => $fax,
            'pagina' => $pag,
            'correo' => $cor
        );
        $this->db->where('idcertificado', $id);
        $this->db->update('certificados', $data);
    }
    function detalle_salario($idc,$anio)
    {
        $consulta=$this->db->query("SELECT * FROM salario WHERE Contrato_idCE=$idc AND Anio=$anio");
        return $consulta->row();
    }
    function actulizar_salario($anio,$idC,$sal,$gas)
    {
        $data = array(
            'Anio' => $anio,
            'Contrato_idCE' => $idC,
            'Salario' => $sal,
            'GastosRepresentacion' => $gas
        );
        $this->db->where('Anio', $anio);
        $this->db->where('Contrato_idCE', $idC);
        $this->db->update('salario', $data);
    }

}