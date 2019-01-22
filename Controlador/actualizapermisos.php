<?php 

if (isset($_POST['a10']) and isset($_POST['a11'])  and isset($_POST['a12']) and isset($_POST['a30']) and isset($_POST['a31']) and isset($_POST['a32']) and isset($_POST['a20']) and isset($_POST['a21']) and isset($_POST['a22']) and isset($_POST['a110']) and isset($_POST['a111']) and isset($_POST['a112']) and isset($_POST['a120']) and isset($_POST['a121']) and isset($_POST['a122']) and isset($_POST['a90']) and isset($_POST['a91']) and isset($_POST['a100']) and isset($_POST['a40']) and isset($_POST['a50']) and isset($_POST['a60']) and isset($_POST['a70']) and isset($_POST['a80']) and isset($_POST['a500']) and isset($_POST['a200']) and isset($_POST['b200']) and isset($_POST['c200']) and isset($_POST['d200']) and isset($_POST['a210']) and isset($_POST['a211']) and isset($_POST['a220']) and isset($_POST['a221']) and isset($_POST['a222']) and isset($_POST['a230']) and isset($_POST['a231']) and isset($_POST['a232']) and isset($_POST['a233']) and isset($_POST['a240']) and isset($_POST['a250']) and isset($_POST['a251']) and isset($_POST['a260']) and isset($_POST['a261']) and isset($_POST['b210']) and isset($_POST['b211']) and isset($_POST['b212']) and isset($_POST['b220']) and isset($_POST['b221']) and isset($_POST['b222']) and isset($_POST['b230']) and isset($_POST['b231']) and isset($_POST['b232']) and isset($_POST['b233']) and isset($_POST['b240']) and isset($_POST['b250']) and isset($_POST['b251']) and isset($_POST['b260']) and isset($_POST['b261']) and isset($_POST['c201']) and isset($_POST['c250']) and isset($_POST['c251']) and isset($_POST['c260']) and isset($_POST['c261']) and isset($_POST['d220']) and isset($_POST['d221']) and isset($_POST['d222']) and isset($_POST['d230']) and isset($_POST['d231']) and isset($_POST['d232']) and isset($_POST['d233']) and isset($_POST['d240']) and isset($_POST['d260']) and isset($_POST['d261']) and isset($_POST['iduser'])  and isset($_POST['a202']) and isset($_POST['b202']) and isset($_POST['c202']) and isset($_POST['d202']) and isset($_POST['a500']) and isset($_POST['a212']) and isset($_POST['b201']) and isset($_POST['a201']) and isset($_POST['d201'])) {
	require '../Modelo/conexion.php';


$iduser=trim($_POST['iduser']);
$a10=trim($_POST['a10']);
$a11=trim($_POST['a11']);
$a12=trim($_POST['a12']);
$a30=trim($_POST['a30']);
$a31=trim($_POST['a31']);
$a32=trim($_POST['a32']);
$a20=trim($_POST['a20']);
$a21=trim($_POST['a21']);
$a22=trim($_POST['a22']);
$a110=trim($_POST['a110']);
$a111=trim($_POST['a111']);
$a112=trim($_POST['a112']);
$a120=trim($_POST['a120']);
$a121=trim($_POST['a121']);
$a122=trim($_POST['a122']);

$a90=trim($_POST['a90']);
$a91=trim($_POST['a91']);
$a100=trim($_POST['a100']);
$a40=trim($_POST['a40']);
$a50=trim($_POST['a50']);
$a60=trim($_POST['a60']);
$a70=trim($_POST['a70']);
$a80=trim($_POST['a80']);
$a500=trim($_POST['a500']);

$a200=trim($_POST['a200']);
$b200=trim($_POST['b200']);
$c200=trim($_POST['c200']);
$d200=trim($_POST['d200']);

$a202=trim($_POST['a202']);
$b202=trim($_POST['b202']);
$c202=trim($_POST['c202']);
$d202=trim($_POST['d202']);

$a201=trim($_POST['a201']);
$b201=trim($_POST['b201']);
$d201=trim($_POST['d201']);

$a210=trim($_POST['a210']);
$a211=trim($_POST['a211']);
$a212=trim($_POST['a212']);
$a220=trim($_POST['a220']);
$a221=trim($_POST['a221']);
$a222=trim($_POST['a222']);
$a230=trim($_POST['a230']);
$a231=trim($_POST['a231']);
$a232=trim($_POST['a232']);
$a233=trim($_POST['a233']);
$a240=trim($_POST['a240']);
$a250=trim($_POST['a250']);
$a251=trim($_POST['a251']);
$a260=trim($_POST['a260']);
$a261=trim($_POST['a261']);

$b210=trim($_POST['b210']);
$b211=trim($_POST['b211']);
$b212=trim($_POST['b212']);
$b220=trim($_POST['b220']);
$b221=trim($_POST['b221']);
$b222=trim($_POST['b222']);
$b230=trim($_POST['b230']);
$b231=trim($_POST['b231']);
$b232=trim($_POST['b232']);
$b233=trim($_POST['b233']);
$b240=trim($_POST['b240']);
$b250=trim($_POST['b250']);
$b251=trim($_POST['b251']);
$b260=trim($_POST['b260']);
$b261=trim($_POST['b261']);

$c201=trim($_POST['c201']);
$c250=trim($_POST['c250']);
$c251=trim($_POST['c251']);
$c260=trim($_POST['c260']);
$c261=trim($_POST['c261']);

$d220=trim($_POST['d220']);
$d221=trim($_POST['d221']);
$d222=trim($_POST['d222']);
$d230=trim($_POST['d230']);
$d231=trim($_POST['d231']);
$d232=trim($_POST['d232']);
$d233=trim($_POST['d233']);
$d240=trim($_POST['d240']);
$d260=trim($_POST['d260']);
$d261=trim($_POST['d261']);



/*
echo "iduser - ".$iduser."<br>";
echo "a10 - ".$a10."<br>";
echo "a11 - ".$a11."<br>";
echo "a12 - ".$a12."<br>";
echo "a20 - ".$a20."<br>";
echo "a21 - ".$a21."<br>";
echo "a22 - ".$a22."<br>";
echo "a30 - ".$a30."<br>";
echo "a31 - ".$a31."<br>";
echo "a32 - ".$a32."<br>";
echo "a40 - ".$a40."<br>";
echo "a50 - ".$a50."<br>";
echo "a60 - ".$a60."<br>";
echo "a70 - ".$a70."<br>";
echo "a80 - ".$a80."<br>";
echo "a90 - ".$a90."<br>";
echo "a91 - ".$a91."<br>";
echo "a110 - ".$a110."<br>";
echo "a111 - ".$a111."<br>";
echo "a112 - ".$a112."<br>";
echo "a120 - ".$a120."<br>";
echo "a121 - ".$a121."<br>";
echo "a122 - ".$a122."<br>";
echo "a100 - ".$a100."<br>";
echo "a200 - ".$a200."<br>";
echo "a201 - ".$a201."<br>";
echo "a202 - ".$a202."<br>";
echo "a210 - ".$a210."<br>";
echo "a211 - ".$a211."<br>";
echo "a212 - ".$a212."<br>";
echo "a220 - ".$a220."<br>";
echo "a221 - ".$a221."<br>";
echo "a222 - ".$a222."<br>";
echo "a230 - ".$a230."<br>";
echo "a231 - ".$a231."<br>";
echo "a232 - ".$a232."<br>";
echo "a233 - ".$a233."<br>";
echo "a240 - ".$a240."<br>";
echo "a250 - ".$a250."<br>";
echo "a251 - ".$a251."<br>";
echo "a260 - ".$a260."<br>";
echo "a261 - ".$a261."<br>";
echo "b200 - ".$b200."<br>";
echo "b201 - ".$b201."<br>";
echo "b202 - ".$b202."<br>";
echo "b210 - ".$b210."<br>";
echo "b211 - ".$b211."<br>";
echo "b212 - ".$b212."<br>";
echo "b220 - ".$b220."<br>";
echo "b221 - ".$b221."<br>";
echo "b222 - ".$b222."<br>";
echo "b230 - ".$b230."<br>";
echo "b231 - ".$b231."<br>";
echo "b232 - ".$b232."<br>";
echo "b233 - ".$b233."<br>";
echo "b240 - ".$b240."<br>";
echo "b250 - ".$b250."<br>";
echo "b251 - ".$b251."<br>";
echo "b260 - ".$b260."<br>";
echo "b261 - ".$b261."<br>";
echo "c200 - ".$c200."<br>";
echo "c201 - ".$c201."<br>";
echo "c202 - ".$c202."<br>";
echo "c250 - ".$c250."<br>";
echo "c251 - ".$c251."<br>";
echo "c260 - ".$c260."<br>";
echo "c261 - ".$c261."<br>";
echo "d200 - ".$d200."<br>";
echo "d201 - ".$d201."<br>";
echo "d202 - ".$d202."<br>";
echo "d220 - ".$d220."<br>";
echo "d221 - ".$d221."<br>";
echo "d222 - ".$d222."<br>";
echo "d230 - ".$d230."<br>";
echo "d231 - ".$d231."<br>";
echo "d232 - ".$d232."<br>";
echo "d233 - ".$d233."<br>";
echo "d240 - ".$d240."<br>";
echo "d260 - ".$d260."<br>";
echo "d261 - ".$d261."<br>";
echo "a500 - ".$a500."<br>";*/



	// SE VALIDA QUE NO EXISTA EL USUARIO
	$buscausuario = "SELECT id_usuario FROM permisos WHERE id_usuario=$iduser";
    $eje_buscausuario = mysqli_query($conexionbdwm, $buscausuario) or die("no se puede checar");
    $resultado = mysqli_num_rows($eje_buscausuario);
    if ($resultado > 0) {
    	$registrapermisos = "UPDATE permisos SET
		a10 =$a10,
		a11 =$a11,
		a12 =$a12,
		a20 =$a20,
		a21 =$a21,
		a22 =$a22,
		a30 =$a30,
		a31 =$a31,
		a32 =$a32,
		a40 =$a40,
		a50 =$a50,
		a60 =$a60,
		a70 =$a70,
		a80 =$a80,
		a90 =$a90,
		a91 =$a91,
		a110 =$a110,
		a111 =$a111,
		a112 =$a112,
		a120 =$a120,
		a121 =$a121,
		a122 =$a122,
		a100 =$a100,
		a200 =$a200,
		a201 =$a201,
		a202 =$a202,
		a210 =$a210,
		a211 =$a211,
		a212 =$a212,
		a220 =$a220,
		a221 =$a221,
		a222 =$a222,
		a230 =$a230,
		a231 =$a231,
		a232 =$a232,
		a233 =$a233,
		a240 =$a240,
		a250 =$a250,
		a251 =$a251,
		a260 =$a260,
		a261 =$a261,
		b200 =$b200,
		b201 =$b201,
		b202 =$b202,
		b210 =$b210,
		b211 =$b211,
		b212 =$b212,
		b220 =$b220,
		b221 =$b221,
		b222 =$b222,
		b230 =$b230,
		b231 =$b231,
		b232 =$b232,
		b233 =$b233,
		b240 =$b240,
		b250 =$b250,
		b251 =$b251,
		b260 =$b260,
		b261 =$b261,
		c200 =$c200,
		c201 =$c201,
		c202 =$c202,
		c250 =$c250,
		c251 =$c251,
		c260 =$c260,
		c261 =$c261,
		d200 =$d200,
		d201 =$d201,
		d202 =$d202,
		d220 =$d220,
		d221 =$d221,
		d222 =$d222,
		d230 =$d230,
		d231 =$d231,
		d232 =$d232,
		d233 =$d233,
		d240 =$d240,
		d260 =$d260,
		d261 =$d261,
		a500 =$a500
		WHERE id_usuario=$iduser";

    	/*"INSERT INTO permisos (a10,a11,a12,a20,a21,a22,a30,a31,a32,a40,a50,a60,a70,a80,a90,a91,a110,a111,a112,a120,a121,a122,a100,a200,a201,a202,a210,a211,a212,a220,a221,a222,a230,a231,a232,a233,a240,a250,a251,a260,a261,b200,b201,b202,b210,b211,b212,b220,b221,b222,b230,b231,b232,b233,b240,b250,b251,b260,b261,c200,c201,c202,c250,c251,c260,c261,d200,d201,d202,d220,d221,d222,d230,d231,d232,d233,d240,d260,d261,a500) VALUES($a10,$a11,$a12,$a20,$a21,$a22,$a30,$a31,$a32,$a40,$a50,$a60,$a70,$a80,$a90,$a91,$a110,$a111,$a112,$a120,$a121,$a122,$a100,$a200,$a201,$a202,$a210,$a211,$a212,$a220,$a221,$a222,$a230,$a231,$a232,$a233,$a240,$a250,$a251,$a260,$a261,$b200,$b201,$b202,$b210,$b211,$b212,$b220,$b221,$b222,$b230,$b231,$b232,$b233,$b240,$b250,$b251,$b260,$b261,$c200,$c201,$c202,$c250,$c251,$c260,$c261,$d200,$d201,$d202,$d220,$d221,$d222,$d230,$d231,$d232,$d233,$d240,$d260,$d261,$a500) WHERE id_usuario=$iduser";*/
    	$eje_registrapermisos = mysqli_query($conexionbdwm, $registrapermisos) or die('
			<table border="1px" align="center">
					<tr>
						<th>Error</th>
						<th>Descripcion</th>
					</tr>
					<tr>
						<td>113</td>
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
    	header('Location: ../Vista/permisos.php');
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