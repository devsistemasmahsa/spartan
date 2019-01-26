<?php 
$l = base64_decode($_REQUEST['l']); 
if (isset($_REQUEST['cod'])) {
    $cod = base64_decode($_REQUEST['cod']);
    /*echo $l;
    echo $cod;*/
}else{

}
 
//echo $id;
require '../Modelo/conexion.php';
$buscalevantamiento = "SELECT * FROM listados WHERE Id_listados=$l";
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

                                <form role="form" action="../Controlador/registramanodeobra.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group"><label>Folio (numero de listado)</label> <input type="text" placeholder="" name="folio" class="form-control" readonly value="<?php echo $l; ?>"></div>
                                            <div class="form-group"><label>Codigo</label> <?php 
                                            if (!empty($cod)) {
                                                //$cod = $_GET['cod'];
                                                echo "<input type='text' placeholder='' name='codi' class='form-control' value='".$cod."' readonly>";
                                            } else {
                                                echo "<input type='text'  name='codi' class='form-control required' placeholder='[0000]' readonly >";
                                            }
                                            ?>
                                            </div>
                                            <div class="form-group"><label>Codificador</label> <a href="SLMOTEC.php?list=<?php echo $l; ?>" class="btn btn-success btn-block"><i class="fa fa-barcode"></i> Codificador</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <input type="hidden" readonly name="usuario" value="<?php echo $_SESSION['nombre'] ?>">
                                            <input type="hidden" readonly name="sucursal" value="<?php echo $_SESSION['sucursal'] ?>">
                                            <div class="form-group"><label>Descripción</label> <input type="text" placeholder="" name="descripcion" class="form-control"></div>
                                            <div class="form-group"><label>Tiempo</label> <input type="text" placeholder="" name="tiempo" class="form-control"></div>
                                            <div class="form-group"><label>&nbsp</label><button class="btn btn-primary btn-block"  type="submit"><i class="fa fa-plus-square-o"></i><strong> Agregar</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                 <hr>
                                 <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Buscar trabajo por codigo o descripción">
                            <table class="footable table table-stripped " data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Codigo</th>
                                        <th>Descripción</th>
                                        <th>Tiempo</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php //IMPRIMIMOS TODOS LOS USUARIOS
                                        require '../Modelo/conexion.php';
                                        $buscausuarios = "SELECT * FROM manodeobra where num_listadomo=$l";
                                        $eje_buscausuarios = mysqli_query($conexionbdwm, $buscausuarios) or die("
                                            <table border='1px' align='center'>
                                                    <tr>
                                                        <th>Error</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                    <tr>
                                                        <td>118</td>
                                                        <td>
                                                            <ul style='list-style:none;'><br>
                                                                <li>No se pudo obtener el listado de mano de obras</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            ");
                                        while ($rowusuario=mysqli_fetch_array($eje_buscausuarios)) {
                                            extract($rowusuario);
                                            echo "
                                            <tr>
                                                
                                                <td>".$codigomo."</td>
                                                <td>".$descripcionmo."</td>
                                                <td>".$horasmo."</td>
                                                <td>
                                                    <form action='../Controlador/eliminacliente.php' method='POST'>
                                                        <input type='hidden' value='".$l."' name='idxni'>
                                                        <input type='hidden' value='".$Id_mano_obra."' name='idxno'>
                                                        <button type='submit' class='btn btn-danger'><i class='fa fa-trash'></i>Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            ";
                                        }
                                        mysqli_close($conexionbdwm);
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="form-group"><label>&nbsp</label><a href="../Controlador/finalizamanoobra.php?l=<?php echo base64_encode($l) ?>" class="btn btn-primary btn-block"><strong> Siguiente <i class="fa fa-arrow-right"></i></strong></a>
                            </div>
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
