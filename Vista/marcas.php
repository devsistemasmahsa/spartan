<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAHSA | WEBMASTER </title>
    <?php require 'css.php'; ?>
    

</head>

<body class="fixed-sidebar pace-done">
    <div id="wrapper">
        <?php require 'menu.php'; ?>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <?php //AQUI VA EL CONTENIDO DE LA PAGINA ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Marca</h5>

                            <div class="ibox-tools">
                                <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalagregamarca" href="#">
                                    <i class="fa fa-plus"></i> Agregar marca
                                </a>
                                
                                
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Buscar proveedor">
                            <table class="footable table table-stripped toggle-arrow-tiny" data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Marca de equipo</th>
                                        <th >Acción</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //IMPRIMIMOS TODOS LOS PROVEEDORES
                                        require '../Modelo/conexion.php';
                                        $buscamarca = "SELECT * FROM marca";
                                        $eje_buscamarca = mysqli_query($conexionbdwm, $buscamarca) or die("
                                                <table border='1px' align='center'>
                                                    <tr>
                                                        <th>Error</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                    <tr>
                                                        <td>105</td>
                                                        <td>
                                                            <ul style='list-style:none;'><br>
                                                                <li>No se pudo obtener el listado de las marcas</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            ");
                                        while ($rowmarca=mysqli_fetch_array($eje_buscamarca)) {
                                            extract($rowmarca);
                                            echo "
                                            <tr>
                                                
                                                <td>".$marca."</td>";
                                                

                                            echo "<td>
                                                    <form action='../Controlador/eliminamarca.php' method='POST'>
                                                        <input type='hidden' value='".$Id_marca."' name='idxno'>
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

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal inmodal fade" id="modalagregamarca" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title">Añadir Marca</h4>
                            <small class="font-bold">Registro de Marca</small>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="../Controlador/registramarca.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group"><label>Nombre de la Marca</label> <input type="text" name="marca" placeholder="" class="form-control"></div>
                                    

                                </div>
                                
                                
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
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
