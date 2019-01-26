<?php 
if (isset($_POST['folio'])) {
    $levantamientourl =$_POST['folio']; 
}else{
    header('Location: indexprincipal.php');
}

//echo $levantamientourl;
require '../Modelo/conexion.php';
$buscalevantamiento = "SELECT * FROM listados WHERE num_levantamiento=$levantamientourl";
$eje_buscalevantamiento = mysqli_query($conexionbdwm, $buscalevantamiento) or die("no se puede checar");
$resultado2 = mysqli_fetch_array($eje_buscalevantamiento);
extract($resultado2);
$clientelevan=$resultado2['cliente'];
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAHSA | WEBMASTER </title>
    <?php require 'css.php'; ?>
    

</head>

<body>
    <div id="wrapper">
        <?php require 'menu.php'; ?>
        </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <?php //AQUI VA EL CONTENIDO DE LA PAGINA ?>
                         <div class="jumbotron">
                             <center><h4>Bienvenido</h4>
                                <p>[AquiNombreUsuario]</p>
                                <p>VENI, VIDI, VICI</p>
                             </center>
                         </div>









                </div>
            </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> MAHSA &copy; <?php date('Y'); ?>
            </div>
        </div>
        </div>
    </div>
    <!-- Mainly scripts -->
        <?php require 'js.php'; ?>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
