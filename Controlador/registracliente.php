<?php 

if (isset($_POST['nombre']) and isset($_POST['direccion']) and isset($_POST['telefono']) and isset($_POST['correo']) and isset($_POST['representante']) and isset($_POST['nosae']) and isset($_POST['sucursal'])) {
	require '../Modelo/conexion.php';
	$nombre=trim($_POST['nombre']);
	$direccion=trim($_POST['direccion']);
	$telefono=trim($_POST['telefono']);
	$correo=trim($_POST['correo']);
	$representante=trim($_POST['representante']);
	$nosae=trim($_POST['nosae']);
	$sucursal=trim($_POST['sucursal']);

	// SE VALIDA QUE NO EXISTA EL USUARIO
	$buscausuario = "SELECT nombre FROM cliente WHERE nombre='$nombre'";
    $eje_buscausuario = mysqli_query($conexionbdwm, $buscausuario) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscausuario);
    if ($resultado > 0) {
    	mysqli_close($conexionbdwm);
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {//SI NO EXISTE SE GUARDA EN LA BASE DE DATOS
    	$registrausuario = "INSERT INTO cliente (nombre,direccion,representante,correo,telefono,clave_sae,sucursal) VALUES ('$nombre','$direccion', '$representante', '$correo', $telefono, $nosae, '$sucursal')";
    	$eje_registrausuario = mysqli_query($conexionbdwm, $registrausuario) or die('
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
    	header('Location: ../Vista/clientes.php');
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