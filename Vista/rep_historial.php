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
                
                    <?php //AQUI VA EL CONTENIDO DE LA PAGINA ?>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Clientes</h5>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Buscar cliente">
                            <table class="footable table table-stripped table-sm toggle-arrow-tiny" data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Usuario</th>
                                        <th data-hide="all">Problema</th>
                                        <th>Fecha de reporte</th>
                                        <th>Fecha de solución</th>
                                        <th data-hide="all">Lugar de corrección</th>
                                        <th data-hide="all">Descripción del programador</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php //IMPRIMIMOS TODOS LOS USUARIOS
                                        require '../Modelo/conexion.php';
                                        $buscausuarios = "SELECT * FROM quejas where estatusreporte=1";
                                        $eje_buscausuarios = mysqli_query($conexionbdwm, $buscausuarios) or die("
                                            <table border='1px' align='center'>
                                                    <tr>
                                                        <th>Error</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                    <tr>
                                                        <td>117</td>
                                                        <td>
                                                            <ul style='list-style:none;'><br>
                                                                <li>No se pudo obtener el listado de clientes</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            ");
                                        while ($rowusuario=mysqli_fetch_array($eje_buscausuarios)) {
                                            extract($rowusuario);
                                            echo "
                                            <tr>
                                                
                                                <td>".$usuario."</td>
                                                <td>".$descripcion."</td>
                                                <td>".$fecha_reporte."</td>
                                                <td>".$fecha_atencion."</td>
                                                <td>".$lugarcorrecion."</td>
                                                <td>".$observ_admin."</td>
                                                
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
