<?php 
//$conexion=mysqli_connect('localhost','root','admin.mahsa2019','bdwm');
require '../Modelo/conexion.php';
$continente=$_POST['continente'];

	$sql="SELECT * 
		from cliente 
		where Id_cliente=$continente";

	$result=mysqli_query($conexionbdwm,$sql);

	$cadena="<label>SELECT 2 (paises)</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>