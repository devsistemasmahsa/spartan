<?php 

if (isset($_POST['folio']) and isset($_POST['codi']) and isset($_POST['descripcion']) and isset($_POST['tiempo']) and isset($_POST['usuario']) and isset($_POST['sucursal'])) {
	require '../Modelo/conexion.php';
	$folio=trim($_POST['folio']);
	$cod=strtoupper($_POST['codi']);
	$descripcion=strtoupper($_POST['descripcion']);
	$tiempo=trim($_POST['tiempo']);
	$usuario=strtoupper($_POST['usuario']);
	$sucursal=strtoupper($_POST['sucursal']);

	date_default_timezone_set('America/Hermosillo');
	$clock = strftime("%H:%M:%S", time());
	$fecha= date("d-m-Y")." - ".$clock;

	
    	$registramarca = "INSERT INTO manodeobra (num_listadomo,codigomo,descripcionmo,horasmo,usuario,fecha_reg,sucursal_reg) VALUES ($folio,'$cod','$descripcion',$tiempo,'$usuario','$fecha','$sucursal')";
    	$eje_registramarca = mysqli_query($conexionbdwm, $registramarca) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>120</td>
						<td>
							<ul style="list-style:none;"><br>
							    <li>Verifique el tipo de dato que envia</li>
							    <li>Verifique que la consulta sql este bien escrita</li>
							    <li>Verifique los parametros que envia</li>
							</ul>
						</td>
					</tr>
    			</table>
    		');
    	mysqli_close($conexionbdwm);
    	header('Location: ../Vista/manodeobra.php?l='.base64_encode($folio).'');
    
}else{
	echo "<table border='1px' align='center'>
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>101</td>
						<td>
							<ul style='list-style:none;'><br>
							    <li>Falto completar información obligatoria</li>
							</ul>
						</td>
					</tr>
    	</table> ";
}



	/*if (() != null) {
    		echo "holi";
    	}else
    	{
    		$error=100;
    		$buscaerror = "SELECT codigo,descripcion FROM errores WHERE codigo=$error";
    		$eje_buscaerror = mysqli_query($conexionbdwm, $buscaerror) or die("no se puede checar");
    		$row=mysqli_fetch_array($eje_buscaerror);
    		extract($row);
    		echo "
    		<center>
    			<table>
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>".$codigoerror."</td>
						<td>".$descripcion."</td>
					</tr>
    			</table>	
			</center>
    		".mysqli_error();
    		

    	}*/
 ?>