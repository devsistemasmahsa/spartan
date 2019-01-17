<?php 

if (isset($_POST['nombre']) and isset($_POST['tipo'])) {
	require '../Modelo/conexion.php';
	$nombre=trim($_POST['nombre']);
	$tipo=trim($_POST['tipo']);
	

	// SE VALIDA QUE NO EXISTA EL USUARIO
	$buscaproveedor = "SELECT * FROM proveedor WHERE proveedor='$nombre'";
    $eje_buscaproveedor = mysqli_query($conexionbdwm, $buscaproveedor) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscaproveedor);
    if ($resultado > 0) {
    	mysqli_close($conexionbdwm);
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {//SI NO EXISTE SE GUARDA EN LA BASE DE DATOS
    	$registraproveedor = "INSERT INTO proveedor (proveedor,tipoproveedor) VALUES ('$nombre','$tipo')";
    	$eje_registraproveedor = mysqli_query($conexionbdwm, $registraproveedor) or die('
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
    	header('Location: ../Vista/proveedores.php');
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