<?php 

if (isset($_POST['usuario']) and isset($_POST['descripcion'])) {
	$usuario=$_POST['usuario'];
	$descripcion=$_POST['descripcion'];

	date_default_timezone_set('America/Hermosillo');
	$clock = strftime("%H:%M:%S", time());
	$fecha= date("d-m-Y")." - ".$clock;

	require '../Modelo/conexion.php';
	$reg_reporte="INSERT INTO quejas (usuario, descripcion, fecha_reporte, estatusreporte) VALUES('$usuario','$descripcion','$fecha',0)";
	$eje_reg_reporte=mysqli_query($conexionbdwm,$reg_reporte) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>116</td>
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
	header('Location: ../Vista/creareporte.php?s=s');
}else{
	
	header('Location: ../Vista/creareporte.php?s=n');
}


 ?>