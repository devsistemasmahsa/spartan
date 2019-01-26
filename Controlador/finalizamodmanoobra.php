<?php 
require '../Modelo/conexion.php';
$l = base64_decode($_REQUEST['l']); 
$u =$_GET['u']; 
date_default_timezone_set('America/Hermosillo');
$clock = strftime("%H:%M:%S", time());
$fecha= date("d-m-Y")." - ".$clock;
$registradatos = "UPDATE listados SET usuariomod='$u', fechamod='$fecha' WHERE num_listado=$l";

    	
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
    	header('Location: ../Vista/indexprincipal.php');


 ?>