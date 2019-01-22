<?php 
$id = base64_decode($_REQUEST['l']); 
//echo $id;
require '../Modelo/conexion.php';
$buscalevantamiento = "SELECT * FROM listados WHERE Id_listados=$id";
$eje_buscalevantamiento = mysqli_query($conexionbdwm, $buscalevantamiento) or die("no se puede checar");
$resultado2 = mysqli_fetch_array($eje_buscalevantamiento);
extract($resultado2);
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
                <div class="ibox">
                        <div class="ibox-title">
                            <h5>Añadir mano de obra</h5>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <form role="form" action="../Controlador/registralevantamiento.php" method="POST">
                                    <div class="form-group"><label>Folio</label> <input type="text" placeholder="" name="folio" class="form-control"></div>
                                    <div class="form-group"><label>No. Económico</label> <input type="text" placeholder="" name="noeconomico" class="form-control"></div>
                                    

                                    <div>
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i><strong> Guardar</strong></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">

                            </div>
                           
                        </div>
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
