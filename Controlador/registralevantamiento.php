<?php 
if (isset($_POST['folio']) and isset($_POST['noeconomico']) and isset($_POST['cliente']) and isset($_POST['sucursal']) and isset($_POST['tipolev'])) {
	require '../Modelo/conexion.php';
	$folio=trim($_POST['folio']);
	$noeconomico=trim($_POST['noeconomico']);
	$cliente=trim($_POST['cliente']);
	$sucursal=trim($_POST['sucursal']);
	$tipolev=trim($_POST['tipolev']);

	date_default_timezone_set('America/Hermosillo');
	$clock = strftime("%H:%M:%S", time());
	$fecha= date("d-m-Y")." - ".$clock;
	

	// SE VALIDA QUE NO EXISTA EL USUARIO
	$buscalevantamiento = "SELECT * FROM levantamientos WHERE folio=$folio and sucursal='$sucursal' and tipolevantamiento=$tipolev";
    $eje_buscalevantamiento = mysqli_query($conexionbdwm, $buscalevantamiento) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscalevantamiento);
    if ($resultado > 0) {
    	mysqli_close($conexionbdwm);
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {//SI NO EXISTE SE GUARDA EN LA BASE DE DATOS
    	$registralevantamiento = "INSERT INTO levantamientos (folio,cliente,no_economico,sucursal,fechalevantamiento,tipolevantamiento,estatustablero) VALUES ($folio,$cliente,'$noeconomico','$sucursal','$fecha',$tipolev,1)";
    	$eje_registralevantamiento = mysqli_query($conexionbdwm, $registralevantamiento) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>107</td>
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
    	header('Location: ../Vista/crealevantamiento.php');
    }
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