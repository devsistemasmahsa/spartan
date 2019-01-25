<?php 
require '../Modelo/conexion.php';
$l = base64_decode($_REQUEST['l']); 
$registradatos = "UPDATE listados SET ref_agregadas='SI' WHERE num_listado=$l";

    	
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
    	header('Location: ../Vista/listadoenespera.php');


 ?>