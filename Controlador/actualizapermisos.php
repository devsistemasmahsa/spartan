<?php 

if (isset($_POST['marca'])) {
	require '../Modelo/conexion.php';
	$marca=trim($_POST['marca']);
	
	

	// SE VALIDA QUE NO EXISTA EL USUARIO
	$buscamarca = "SELECT marca FROM marca WHERE marca='$marca'";
    $eje_buscamarca = mysqli_query($conexionbdwm, $buscamarca) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscamarca);
    if ($resultado > 0) {
    	mysqli_close($conexionbdwm);
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {//SI NO EXISTE SE GUARDA EN LA BASE DE DATOS
    	$registramarca = "INSERT INTO marca (marca) VALUES ('$marca')";
    	$eje_registramarca = mysqli_query($conexionbdwm, $registramarca) or die('
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
    	header('Location: ../Vista/marcas.php');
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

 ?>