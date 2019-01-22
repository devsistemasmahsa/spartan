<?php 

if (isset($_POST['admin']) and isset($_POST['descripcion']) and isset($_POST['lugarcorreccion'])and isset($_POST['haidi'])) {
	$admin=$_POST['admin'];
	$descripcion=$_POST['descripcion'];
	$lugarcorreccion=$_POST['lugarcorreccion'];
	$haidi=$_POST['haidi'];

	date_default_timezone_set('America/Hermosillo');
	$clock = strftime("%H:%M:%S", time());
	$fecha= date("d-m-Y")." - ".$clock;

	require '../Modelo/conexion.php';
	$buscareporte = "SELECT * FROM quejas WHERE Id_quejas=$haidi";
    $eje_buscareporte = mysqli_query($conexionbdwm, $buscareporte) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscareporte);
    if ($resultado > 0) {
    	$registradatos = "UPDATE quejas SET
		admin='$admin',
		fecha_atencion='$fecha',
		lugarcorrecion='$lugarcorreccion',
		observ_admin='$descripcion',
		estatusreporte=1
		WHERE Id_quejas=$haidi";

    	
    	$eje_registradatos = mysqli_query($conexionbdwm, $registradatos) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>115</td>
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
    	header('Location: ../Vista/rep_espera.php?s=s');
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {//SI NO EXISTE SE GUARDA EN LA BASE DE DATOS
    	
    	mysqli_close($conexionbdwm);
    	echo "<table border='1px' align='center'>
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>114</td>
						<td>
							<ul style='list-style:none;'><br>
							    <li>No se estan recibiendo todos los parametros</li>
							</ul>
						</td>
					</tr>
    			</table>";
    }
	
	header('Location: ../Vista/rep_espera.php?s=s');
}else{
	
	header('Location: ../Vista/rep_espera.php?s=n');
}


 ?>