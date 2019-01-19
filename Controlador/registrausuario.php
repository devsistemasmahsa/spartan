<?php 

if (isset($_POST['nombre']) and isset($_POST['telefono']) and isset($_POST['sucursal']) and isset($_POST['contra']) and isset($_POST['usuario']) and isset($_POST['puesto'])) {
	require '../Modelo/conexion.php';
	$nombre=trim($_POST['nombre']);
	$telefono=trim($_POST['telefono']);
	$sucursal=trim($_POST['sucursal']);
	$contra=trim($_POST['contra']);
	$usuario=trim($_POST['usuario']);
	$puesto=trim($_POST['puesto']);

	// SE VALIDA QUE NO EXISTA EL USUARIO
	$buscausuario = "SELECT usuario FROM usuario WHERE usuario='$usuario'";
    $eje_buscausuario = mysqli_query($conexionbdwm, $buscausuario) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscausuario);
    if ($resultado > 0) {
    	mysqli_close($conexionbdwm);
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {//SI NO EXISTE SE GUARDA EN LA BASE DE DATOS
    	$registrausuario = "INSERT INTO usuario (nombre,usuario,contrasena,telefono,puesto,sucursal) VALUES ('$nombre','$usuario', '$contra', $telefono, '$puesto', '$sucursal')";
    	$eje_registrausuario = mysqli_query($conexionbdwm, $registrausuario) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>100</td>
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
    	$buscausuario2 = "SELECT Id_usuario FROM usuario WHERE usuario='$usuario'";
    	$eje_buscausuario2 = mysqli_query($conexionbdwm, $buscausuario2) or die("no se puede checar");
    	$resultado2 = mysqli_fetch_array($eje_buscausuario2);
    	extract($resultado2);

    	$registrausuario = "INSERT INTO permisos (id_usuario) VALUES ($Id_usuario)";
    	$eje_registrausuario = mysqli_query($conexionbdwm, $registrausuario) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>100</td>
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
    	header('Location: ../Vista/usuarios.php');
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