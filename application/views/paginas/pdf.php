<!doctype html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html"/>
	<meta charset="UTF-8">
	<link rel="icon" href="./assets/logos/icon.ico">
	<link rel="stylesheet" href="./assets/css/pdf.css" media="print">
	<title>	CERTIFICADO</title>
<head>
<body>
	<center>
	<table>
		<tr>
			<td align="center">
				<table>
					<tr align="center">
						<td width="170">
							<img src="<?php echo base_url()?>assets/logos/alcaldia_160.png" width="85">
						</td>
						<td width="450">
							<h3>ADMINISTRACIÓN MUNICIPAL<br>
							SANTA ROSA DE CABAL<br>
							SECRETARÍA <?php echo $certificado->secretaria;?><br>
							SUBSECRETARÍA DE <?php echo $certificado->subsecretaria;?></h3>
						</td>
						<td width="170"></td>
					</tr>
				</table>		
			</td>
		</tr>
		<tr align="center">
			<td>
				<h3>LA SUBSECRETARÍA DE <?php echo $certificado->subsecretaria;?></h3><br>
			</td>	
		</tr>	
		<tr>
			<td>
				<h3 align="CENTER">HACE CONSTAR</h3>
			</td>	
		</tr>
		<tr>
			<td>
			  <P align="justify">
				<font face="arial" size="3" color="black">
					
				Que el señor(a) <?php echo $contrato->NombreE." ".$contrato->ApellidoE;?> con cédula N° <?php echo $contrato->Cedula;?> laboró en la Administración Municipal de Santa Rosa de Cabal en calidad de:
				<br><br>
		        <?php echo $contrato->NombreC;?>, adscrito(a) a la Secretaría de <?php echo $contrato->NombreS;?>, desde 
		        <?php 
		        	//echo $contrato->FechaInicio;
		        	$fi=$contrato->FechaInicio;
		        	$fechaI_dia=substr($fi,8,2);
	     			$fechaI_mes=substr($fi,5,2);
	     			$fechaI_ano=substr($fi,0,4);

	     			$ff=$contrato->FechaFin;
		        	$fechaF_dia=substr($ff,8,2);
	     			$fechaF_mes=substr($ff,5,2);
	     			$fechaF_ano=substr($ff,0,4);
		        ?>
		        el día <?php echo "$fechaI_dia del mes $fechaI_mes del año $fechaI_ano, hasta el día $fechaF_dia del mes $fechaF_mes del año $fechaF_ano";?>. </font>
		        <h3 align="justify">Salarios devengados:</h3>
		    </td>    
		</tr> 
		<?php foreach ($salario as $fila):?>       
	        <tr>
	        	<td>
		        	<table>
						<tr>
							<td><b><font face="arial" size="3" color="black"><?php echo $fila->Anio;?></font></b></td>
						</tr> 
						<tr>
							<td width="50"></td>
							<td width="250"><font face="arial" size="3" color="black">Salario:</font></td>
							<td><font face="arial" size="3" color="black">$<?php echo $fila->Salario;?></font></td>
						</tr>
						<tr>
							<td width="50"></td>
							<td width="250"><font face="arial" size="3" color="black">Gastos de representación:</font></td>
							<td><font face="arial" size="3" color="black">$<?php echo $fila->GastosRepresentacion;?></font></td>			
						</tr>
					</table>
				</td>
			</tr>
		<?php endforeach;?>       
		
		<tr>		
			<td>
				<font face="arial" size="3" color="black">
				<br>

				<br><br><br>

	     		Diligenciado en Santa Rosa de Cabal <? date_default_timezone_set('America/bogota');
	     		$fecha_dia=date("d");
	     		$fecha_mes=date("m");
	     		$fecha_ano=date("Y");
	     		echo "el dia"." ".$fecha_dia." " . "del mes"." ".$fecha_mes." "."del año" . " ".$fecha_ano;?>

	     		<br>

	     		<BR><br>
	     		<img src="<?php echo base_url()?><?php echo $certificado->firma;?>" alt="Firma" style="width:300px; height: 100px">
	     		<br>
		     	<b><?php echo $certificado->nombresecretario;?></b><br>
	         	<?php echo $certificado->cargosecretario;?><br>
	         	</font>
         	</td>
     	</tr>
        <tr>
         	<td align="center">
         		<font face="arial" size="3" color="black">
         		<br><br><br><br>
		         "<?php echo $certificado->lema;?>"<br>
		         Código Postal 661020<br>
		         <?php echo $certificado->direccion;?> Teléfono PBX <?php echo $certificado->telefono;?>-Fax <?php echo $certificado->fax;?><br>
		         <u><?php echo $certificado->pagina;?></u><br>
		         <?php echo $certificado->correo;?><br><br>
		         </font>
		         <input name="Imprimir" type="submit" value="Imprimir" onclick="this.style.visibility='hidden' ; print(); this.style.visibility=''"/>
		         <br>
		         

