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

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Usuarios</h5>

                            <div class="ibox-tools">
                                <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalagregausuario" href="#">
                                    <i class="fa fa-plus"></i> Agregar usuario
                                </a>
                                
                                
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="contenido_externo"></div>
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Buscar usuario">
                            <table class="footable table table-stripped toggle-arrow-tiny" data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Nombre</th>
                                        <th data-hide="all">Usuario</th>
                                        <th data-hide="all">Telefono</th>
                                        <th >Puesto</th>
                                        <th data-hide="all">Sucursal</th>
                                        <th >Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //IMPRIMIMOS TODOS LOS USUARIOS
                                        require '../Modelo/conexion.php';
                                        $buscausuarios = "SELECT * FROM usuario";
                                        $eje_buscausuarios = mysqli_query($conexionbdwm, $buscausuarios) or die("
                                            <table border='1px' align='center'>
                                                    <tr>
                                                        <th>Error</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                    <tr>
                                                        <td>103</td>
                                                        <td>
                                                            <ul style='list-style:none;'><br>
                                                                <li>No se pudo obtener el listado de usuarios</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            ");
                                        while ($rowusuario=mysqli_fetch_array($eje_buscausuarios)) {
                                            extract($rowusuario);
                                            echo "
                                            <tr>
                                                
                                                <td>".$nombre."</td>
                                                <td>".$usuario."</td>
                                                <td>".$telefono."</td>
                                                <td>".$puesto."</td>
                                                <td>".$sucursal."</td>
                                                <td>
                                                    <form action='../Controlador/eliminausuario.php' method='POST'>
                                                        <input type='hidden' value='".$Id_usuario."' name='idxno'>
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

            <div class="modal inmodal fade" id="modalagregausuario" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title">Añadir usuario</h4>
                            <small class="font-bold">Registro de usuario</small>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="../Controlador/registrausuario.php" method="POST" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group"><label>Nombre</label> <input type="text" name="nombre" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Teléfono</label> <input type="text" name="telefono" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Sucursal a la que pertenecerá</label> 
                                        <select class="form-control m-b" name="sucursal">
                                            <option selected="true" disabled="true">Selecciona sucursal</option>
                                            <option value="HMO">Hermosillo</option>
                                            <option value="GYS">Guaymas</option>
                                            <option value="NGS">Nogales </option>
                                        </select><br>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><label>Usuario</label> <input type="text" name="usuario" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Contraseña</label> <input type="text" name="contra" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Sucursal a la que pertenecerá</label> 
                                        <select class="form-control m-b" name="puesto">
                                            <option selected="true" disabled="true">Selecciona uno</option>
                                            <option value="Superusuario">Superusuario</option>
                                            <option value="Servicio">Servicio</option>
                                            <option value="Rentas">Rentas</option>
                                            <option value="Tecnico">Tecnico</option>
                                            <option value="Compras">Compras</option>
                                            <option value="Auxiliar_Administrativo">Auxiliar Administrativo</option>
                                            <option value="Lider_de_Refacciones">Lider de Refacciones</option>
                                            <option value="Lider_de_Taller">Lider de Taller</option>
                                            <option value="Atencion_a_Clientes">Atencion a Clientes</option>
                                            <option value="Prestamo_de_refacciones">Prestamo de refacciones</option>
                                        </select><br>
                                    </div>
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
