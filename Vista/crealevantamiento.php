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
                         
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Añadir levantamiento nuevo</h5>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12"><h3 class="m-t-none m-b"></h3>
                                <p></p>
                                <form role="form" action="../Controlador/registralevantamiento.php" method="POST">
                                    <div class="form-group"><label>Folio</label> <input type="text" placeholder="" name="folio" class="form-control"></div>
                                    <div class="form-group"><label>No. Económico</label> <input type="text" placeholder="" name="noeconomico" class="form-control"></div>
                                    <div class="form-group"><label>cliente</label> 
                                    <select class="chosen-select m-b" name="cliente">
                                        <option disabled="true" selected="true">Seleccione cliente</option>
                                        <?php //IMPRIMIMOS TODOS LOS CLIENTES
                                        require '../Modelo/conexion.php';
                                        $buscamarca = "SELECT Id_cliente,nombre FROM cliente";
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
                                                                <li>No se pudo obtener el listado de clientes</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            ");
                                        while ($rowmarca=mysqli_fetch_array($eje_buscamarca)) {
                                            extract($rowmarca);
                                            echo "
                                            <option value=".$nombre.">".$nombre."</option>
                                            ";
                                        }
                                        mysqli_close($conexionbdwm);
                                    ?>
                                    </select>
                                    </div>
                                    <div class="form-group"><label>Tipo de levantamiento</label> 
                                            <select class="chosen-select m-b" name="tipolev">
                                                <option selected="true" disabled="true">Selecciona sucursal</option>
                                                <option value="1">Combustión</option>
                                                <option value="2">Eléctrico</option>
                                                <option value="3">Reparación</option>
                                                <option value="4">Refacción</option>
                                            </select>
                                    </div>
                                    <div class="form-group"><label>Sucursal</label> 
                                            <select class="chosen-select m-b" name="sucursal">
                                                <option selected="true" disabled="true">Selecciona sucursal</option>
                                                <option value="HMO">Hermosillo</option>
                                                <option value="GYS">Guaymas</option>
                                                <option value="NGS">Nogales </option>
                                            </select>
                                    </div>
                                   
                                    <div>
                                        <label> <a href="#" data-toggle="modal" data-target="#myModal5" class="form-control btn btn-secondary"> Agregar cliente </a></label>
                                        <button class="btn btn-primary" type="submit"><strong>Guardar levantamiento </strong></button>
                                        
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                    




                            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                            <h4 class="modal-title">Añadir cliente</h4>
                                            <small class="font-bold">Pre-registro de cliente</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Pre-registro</strong> deberá registrar los datos completos del cliente mas delante</p>
                                            <div class="form-group"><label>Nombre del cliente</label> <input type="text" placeholder="" class="form-control"></div>
                                            <div class="form-group"><label>Sucursal</label> 
                                            <select class="form-control m-b" name="account">
                                                <option selected="true" disabled="true">Selecciona sucursal</option>
                                                <option>Hermosillo</option>
                                                <option>Guaymas</option>
                                                <option>Nogales </option>
                                            </select><br>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
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
