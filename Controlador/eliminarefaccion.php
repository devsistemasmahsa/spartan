<?php 

if (isset($_POST['idxno'])) {
	require('../Modelo/conexion.php');
	$id=$_POST['idxno'];
	$l=$_POST['idxni'];
	mysqli_query($conexionbdwm, "DELETE FROM refacciones WHERE Id_refaccion = $id")or die('
				<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>102</td>
						<td>
							<ul style="list-style:none;"><br>
							    <li>No se pudo eliminar refaccion porque no se encontro el identificador</li>
							</ul>
						</td>
					</tr>
    			</table>
	');
	mysqli_close($conexionbdwm);
	header('Location: ../Vista/refacciones.php?l='.base64_encode($l).'');

}else{
	echo "<table border='1px' align='center'>
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>102</td>
						<td>
							<ul style='list-style:none;'><br>
							    <li>No se pudo eliminar refaccion porque no se encontro el identificador 2</li>
							</ul>
						</td>
					</tr>
    			</table>";
}

//$id=$_POST['usua'];




?>