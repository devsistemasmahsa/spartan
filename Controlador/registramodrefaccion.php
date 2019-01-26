<?php 

if (isset($_POST['listado']) and isset($_POST['codigo']) and isset($_POST['cantidad']) and isset($_POST['parte']) and isset($_POST['descripcionrefaccion']) and isset($_POST['usuario']) and isset($_POST['sucursal'])) {
	require '../Modelo/conexion.php';
	$listado=trim($_POST['listado']);
	$codigo=strtoupper($_POST['codigo']);
	$cantidad=trim($_POST['cantidad']);
	$parte=strtoupper($_POST['parte']);
	$descripcionrefaccion=strtoupper($_POST['descripcionrefaccion']);
	
	$nombre=strtoupper($_POST['usuario']);
	$sucursal=strtoupper($_POST['sucursal']);

	date_default_timezone_set('America/Hermosillo');
	$clock = strftime("%H:%M:%S", time());
	$fecha= date("d-m-Y")." - ".$clock;

    $registrarefaccion = "INSERT INTO refacciones (num_listadoref,cantidadref,no_parteref,descripcionref,codigoref,sucursal_reg,fecha_reg,usuario) VALUES ($listado,$cantidad,'$parte','$descripcionrefaccion','$codigo','$sucursal','$fecha','$nombre')";
    $eje_rregistrarefaccion = mysqli_query($conexionbdwm, $registrarefaccion) or die('
				<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>106</td>
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
    	header('Location: ../Vista/modrefacciones.php?l='.base64_encode($listado).'');
    
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