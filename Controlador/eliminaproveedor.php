<?php 

if (isset($_POST['idxno'])) {
	require('../Modelo/conexion.php');
	$id=$_POST['idxno'];
	mysqli_query($conexionbdwm, "DELETE FROM proveedor WHERE Id_proveedor = $id")or die('
				<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>102</td>
						<td>
							<ul style="list-style:none;"><br>
							    <li>No se pudo eliminar proveedor porque no se encontro el identificador</li>
							</ul>
						</td>
					</tr>
    			</table>
	');
	mysqli_close($conexionbdwm);
	header('Location: ../Vista/proveedores.php');

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
							    <li>No se pudo eliminar proveedor porque no se encontro el identificador 2</li>
							</ul>
						</td>
					</tr>
    			</table>";
}

//$id=$_POST['usua'];




?>