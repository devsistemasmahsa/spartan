<?php 
//AQUI EVALUAMOS SI VIENE CON O SIN LEVANTAMIENTO DESPÚES CREAMOS EL LISTADO PARA EVITAR FOLIOS DUPLICADOS
// isset($_POST['folio'])
if (isset($_POST['levantamiento'])) {
	require '../Modelo/conexion.php';
	$levantamiento=trim($_POST['levantamiento']);

	if ($levantamiento=1 and isset($_POST['folio'])) {
		$folio=trim($_POST['folio']);
		//CONSULTAMOS DATOS DEL LEVANTAMIENTO
		$buscadatoslev = "SELECT * FROM levantamientos where folio='$folio'";
	    $eje_buscadatoslev = mysqli_query($conexionbdwm, $buscadatoslev) or die("no se puede checar");
		$res_buscadatoslev = mysqli_fetch_array($eje_buscadatoslev);
		extract($res_buscadatoslev);
		/*echo $folio;
		echo $cliente;
		echo $no_economico;
		echo $sucursal;*/

		// BUSCAMOS EL ULTIMO LISTADO
		//SELECT num_listado FROM listados where sucursal='$sucursal'
		$buscalistado = "SELECT num_listado FROM listados WHERE sucursal='$sucursal' ORDER BY num_listado DESC LIMIT 1";
    	$eje_buscalistado = mysqli_query($conexionbdwm, $buscalistado) or die("no se puede checar");

    	$resultado = mysqli_fetch_array($eje_buscalistado);
    	$num_listado=$resultado['num_listado'];
		$last_listado=$num_listado+1;

		date_default_timezone_set('America/Hermosillo');
		$clock = strftime("%H:%M:%S", time());

		$fecha= date("d-m-Y")." - ".$clock;

		// REGISTRAMOS LISTADO
		//$reg_listado="INSERT INTO listados (num_listado,num_levantamiento) values()";
		$reg_listado="INSERT INTO listados (num_listado,num_levantamiento,num_economico,fecha_listado,cliente,sucursal) values($last_listado,$folio,$no_economico,'$fecha','$cliente','$sucursal')";
		$eje_reg_listado=mysqli_query($conexionbdwm,$reg_listado)or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>108</td>
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
    	header('Location: ../Vista/crealistado.php');



	}elseif ($levantamiento=2) {
		// BUSCAMOS EL ULTIMO LISTADO
		//SELECT num_listado FROM listados where sucursal='$sucursal'
		//jalamos sucursal de las variables de sesion 
		$sucursal="HMO";
		$buscalistado = "SELECT num_listado FROM listados WHERE sucursal='$sucursal' ORDER BY num_listado DESC LIMIT 1";
    	$eje_buscalistado = mysqli_query($conexionbdwm, $buscalistado) or die("no se puede checar");

    	$resultado = mysqli_fetch_array($eje_buscalistado);
    	$num_listado=$resultado['num_listado'];
    	$last_listado=$num_listado+1;
		$num_lev="N/A - ".$last_listado;

		date_default_timezone_set('America/Hermosillo');
		$clock = strftime("%H:%M:%S", time());

		$fecha= date("d-m-Y")." - ".$clock;
		
		//falta el tecnico

		//CREAMOS EL LISTADO SIN LEVANTAMIENTO
		//jalamos sucursal de las variables de sesion 
		$sucursal="HMO";
		$reg_listado="INSERT INTO listados (num_listado,num_levantamiento,fecha_listado,sucursal) values($last_listado,$num_lev,'$fecha','$sucursal')";
		$eje_reg_listado=mysqli_query($conexionbdwm,$reg_listado)or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>109</td>
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
    	header('Location: ../Vista/crealistado.php');
	}

	
	
	

    //mysqli_close($conexionbdwm);
    //header('Location: ../Vista/proveedores.php');
    
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