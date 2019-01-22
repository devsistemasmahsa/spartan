<?php 

if (isset($_POST['cliente']) and isset($_POST['folio']) and isset($_POST['tecnico']) and 
	isset($_POST['marca']) and isset($_POST['modelo']) and isset($_POST['serie']) and 
	isset($_POST['no_eco']) and isset($_POST['horometro']) and isset($_POST['capacidad']) and 
	isset($_POST['tipo']) and isset($_POST['estado']) and isset($_POST['mastil']) and 
	isset($_POST['mar_aditamento']) and isset($_POST['mod_aditamento']) and isset($_POST['quien']) and
	 isset($_POST['falla']) and isset($_POST['traslado']) and isset($_POST['trasquien']) and 
	 isset($_POST['obs']) and isset($_POST['id'])) {
	require '../Modelo/conexion.php';


$tecnico=strtoupper($_POST['tecnico']);
$no_eco=trim($_POST['no_eco']);
$num_listado=trim($_POST['folio']);
$cliente=strtoupper($_POST['cliente']);
$marca=strtoupper($_POST['marca']);
$modelo=strtoupper($_POST['modelo']);
$serie=strtoupper($_POST['serie']);
$horometro=trim($_POST['horometro']);
$capacidad=trim($_POST['capacidad']);
$tipo=strtoupper($_POST['tipo']);
$estado=strtoupper($_POST['estado']);
$mastil=strtoupper($_POST['mastil']);
$mar_aditamento=strtoupper($_POST['mar_aditamento']);
$mod_aditamento=strtoupper($_POST['mod_aditamento']);
$quien=strtoupper($_POST['quien']);
$falla=strtoupper($_POST['falla']);
$traslado=strtoupper($_POST['traslado']);
$trasquien=strtoupper($_POST['trasquien']);
$obs=strtoupper($_POST['obs']);
$id=trim($_POST['id']);

/*echo "tecnico".$tecnico."<br>";
echo "no_eco".$no_eco."<br>";
echo "num_listado".$num_listado."<br>";
echo "cliente".$cliente."<br>";
echo "marca".$marca."<br>";
echo "modelo".$modelo."<br>";
echo "serie".$serie."<br>";
echo "horometro".$horometro."<br>";
echo "capacidad".$capacidad."<br>";
echo "tipo".$tipo."<br>";
echo "estado".$estado."<br>";
echo "mastil".$mastil."<br>";
echo "mar_aditamento".$mar_aditamento."<br>";
echo "mod_aditamento".$mod_aditamento."<br>";
echo "quien".$quien."<br>";
echo "falla".$falla."<br>";
echo "traslado".$traslado."<br>";
echo "trasquien".$trasquien."<br>";
echo "obs".$obs."<br>";*/





	// SE VALIDA QUE EXISTA EL LISTADO
	$buscalistado = "SELECT * FROM listados WHERE Id_listados=$id";
    $eje_buscalistado = mysqli_query($conexionbdwm, $buscalistado) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscalistado);
    if ($resultado > 0) {
    	$registradatos = "UPDATE listados SET
		num_economico=$no_eco,
		tecnico='$tecnico',
		cliente='$cliente',
		atiende='$quien',
		marca='$marca',
		modelo='$modelo',
		serie='$serie',
		tipomontacarga='$tipo',
		capacidad='$capacidad',
		horometro='$horometro',
		mastil='$mastil',
		mar_aditamento='$mar_aditamento',
		mod_aditamento='$mod_aditamento',
		estadoequipo='$estado',
		falla='$falla',
		observaciones='$obs',
		traslado='$traslado',
		quien='$trasquien',
		not_terminado=1
		WHERE Id_listados=$id";

    	
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
    	header('Location: ../Vista/manodeobra.php?l='.base64_encode($id).'');
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