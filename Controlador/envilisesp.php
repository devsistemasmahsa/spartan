<?php 
$haidi=$_GET['l'];
	require '../Modelo/conexion.php';
	// SE ACTIVA PARA QUE LO PUEDAN PRE-COTIZAR
	$registradatos = "UPDATE listados SET
		not_enviado=1,
		not_precotizacion=0
		WHERE num_listado=$haidi";

    	
    	$eje_registradatos = mysqli_query($conexionbdwm, $registradatos) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>121</td>
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

    	//aqui envio del listado con todos los datos para refacciones


    	mysqli_close($conexionbdwm);
    	header('Location: ../Vista/listadoenviado.php');

?>