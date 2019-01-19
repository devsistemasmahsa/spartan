<?php 

if (isset($_POST['xnu']) and isset($_POST['xnp'])) {
	$u=$_POST['xnu'];
	$p=$_POST['xnp'];
	//ARCHIVO DE CONEXION
	require '../Modelo/conexion.php';

	//VALIDAMOS CONTRA INYECCION SQL
	$u=stripslashes($u);
	$p=stripslashes($p);

	$u=mysqli_real_escape_string($conexionbdwm,$u);
	$p=mysqli_real_escape_string($conexionbdwm,$p);

	
	//$val_user="SELECT";
	// SE VALIDA QUE EXISTA EL USUARIO
	$val_user = "SELECT * FROM usuario WHERE usuario='$u' and contrasena='$p' ";
    $eje_val_user = mysqli_query($conexionbdwm, $val_user) or die("
				<table border='1px' align='center'>
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>111</td>
						<td>
							<ul style='list-style:none;'><br>
							    <li>No se pudo realizar la conexion a la base de datos</li>
							</ul>
						</td>
					</tr>
    			</table>
    	");
    $res_val_user = mysqli_fetch_array($eje_val_user);
    if ($res_val_user > 0) {
    	session_start();
    	extract($res_val_user);
		/*echo $Id_usuario;
    	echo $usuario;
    	echo $nombre;
    	echo $puesto;
    	echo $sucursal;*/
    	$_SESSION['identificador']=$Id_usuario;
    	$_SESSION['usuario']=$usuario;
    	$_SESSION['nombre']=$nombre;
    	$_SESSION['puesto']=$puesto;
    	$_SESSION['sucursal']=$sucursal;

    	//BUSCA PERMISOS
    	$busca_permisos="SELECT * FROM permisos where id_usuario=$Id_usuario";
    	$eje_busca_permisos=mysqli_query($conexionbdwm,$busca_permisos)or die('
				<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>112</td>
						<td>
							<ul style="list-style:none;"><br>
							    <li>Problemas al obtener los permisos</li>
							</ul>
						</td>
					</tr>
    			</table>
    	');
    	$res_busca_permisos=mysqli_fetch_array($eje_busca_permisos);
    	extract($res_busca_permisos);
    	$_SESSION['a10']=$a10;
    	$_SESSION['a11']=$a11;
    	$_SESSION['a12']=$a12;
    	$_SESSION['a20']=$a20;
    	$_SESSION['a21']=$a21;
    	$_SESSION['a22']=$a22;
    	$_SESSION['a30']=$a30;
    	$_SESSION['a31']=$a31;
    	$_SESSION['a32']=$a32;
    	$_SESSION['a40']=$a40;
    	$_SESSION['a50']=$a50;
    	$_SESSION['a60']=$a60;
    	$_SESSION['a70']=$a70;
    	$_SESSION['a80']=$a80;
    	$_SESSION['a90']=$a90;
    	$_SESSION['a91']=$a91;
    	$_SESSION['a100']=$a100;
    	$_SESSION['a110']=$a110;
    	$_SESSION['a111']=$a111;
    	$_SESSION['a112']=$a112;
    	$_SESSION['a120']=$a120;
    	//PERMISOS ACCESO A TABLEROS
    	$_SESSION['a200']=$a200;
    	$_SESSION['b200']=$b200;
    	$_SESSION['c200']=$c200;
    	$_SESSION['d200']=$d200;
    	//PERMISOS TABLERO DE COMBUSTION
    	$_SESSION['a210']=$a210;
    	$_SESSION['a211']=$a211;
    	$_SESSION['a212']=$a212;
    	$_SESSION['a201']=$a201;
    	$_SESSION['a220']=$a220;
    	$_SESSION['a221']=$a221;
    	$_SESSION['a222']=$a222;
    	$_SESSION['a230']=$a230;
    	$_SESSION['a231']=$a231;
    	$_SESSION['a232']=$a232;
    	$_SESSION['a233']=$a233;
    	$_SESSION['a240']=$a240;
    	$_SESSION['a250']=$a250;
    	$_SESSION['a251']=$a251;
    	$_SESSION['a260']=$a260;
    	$_SESSION['a261']=$a261;
    	//PERMISOS TABLERO DE ELECTRICO
    	$_SESSION['b210']=$b210;
    	$_SESSION['b211']=$b211;
    	$_SESSION['b212']=$b212;
    	$_SESSION['b201']=$b201;
    	$_SESSION['b220']=$b220;
    	$_SESSION['b221']=$b221;
    	$_SESSION['b222']=$b222;
    	$_SESSION['b230']=$b230;
    	$_SESSION['b231']=$b231;
    	$_SESSION['b232']=$b232;
    	$_SESSION['b233']=$b233;
    	$_SESSION['b240']=$b240;
    	$_SESSION['b250']=$b250;
    	$_SESSION['b251']=$b251;
    	$_SESSION['b260']=$b260;
    	$_SESSION['b261']=$b261;
    	//PERMISOS TABLERO DE REPARACION
    	$_SESSION['c201']=$c201;
    	$_SESSION['c250']=$c250;
    	$_SESSION['c251']=$c251;
    	$_SESSION['c260']=$c260;
    	$_SESSION['c261']=$c261;
    	//PERMISOS TABLERO DE REFACCION
    	$_SESSION['d201']=$d201;
    	$_SESSION['d220']=$d220;
    	$_SESSION['d221']=$d221;
    	$_SESSION['d222']=$d222;
    	$_SESSION['d230']=$d230;
    	$_SESSION['d231']=$d231;
    	$_SESSION['d232']=$d232;
    	$_SESSION['d233']=$d233;
    	$_SESSION['d240']=$d240;
    	$_SESSION['d260']=$d260;
    	$_SESSION['d261']=$d261;

		mysqli_close($conexionbdwm);
    	header('Location: ../Vista/indexprincipal.php');
    	
    	//echo "<script>alert('El usuario ya existe');</script>";
    } else {
    	mysqli_close($conexionbdwm);
    	header('Location: ../Vista/login.php?E='.base64_encode("ERRORCONCAMPOS").'');
    }
	
}else{
	header('Location: ../Vista/login.php?E='.base64_encode("ERRORSINCAMPOS").'');
}



?>