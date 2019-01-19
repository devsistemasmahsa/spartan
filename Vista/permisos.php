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
                    <?php // aqui va la consulta para preguntar por los permisos de cada usuario
                    require '../Modelo/conexion.php'; 
                        $id=3;
                        $buscapermiso = "SELECT * FROM permisos WHERE id_usuario=$id";
                        $eje_buscapermiso = mysqli_query($conexionbdwm, $buscapermiso) or die("no se puede checar");
                        $resultado = mysqli_fetch_array($eje_buscapermiso);
                        extract($resultado);

                    ?>
                         <div class="jumbotron">
                             <center>
                                <?php if ($_SESSION['nombre']=='Alberto Rodriguez' or $_SESSION['nombre']=='Daniel Mendoza') { ?>
                                    <b><h2>PERMISOS DE USUARIOS</h2></b>

                                    <div class="row">
                                        <form action="cale.php" method="post">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <fieldset>
                                                    <legend><b>Usuarios</b></legend>
                                                    <h4><b>Ver usuarios</b></h4>
                                            <?php if ($a10==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a10a" value="1" name="a10" checked="">
                                                    <label for="a10a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a10b" value="0" name="a10">
                                                    <label for="a10b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a10a" value="1" name="a10" >
                                                    <label for="a10a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a10b" value="0" name="a10" checked="">
                                                    <label for="a10b"> No </label>
                                                </div>
                                            <?php } ?>
                                                
                                                <h4><b>Añadir usuarios</b></h4>
                                             <?php if ($a11==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a11a" value="1" name="a11" checked="">
                                                    <label for="a11a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a11b" value="0" name="a11">
                                                    <label for="a11b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a10a" value="1" name="a11" >
                                                    <label for="a11a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a11b" value="0" name="a11" checked="">
                                                    <label for="a11b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Eliminar usuarios</b></h4>
                                             <?php if ($a12==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a12a" value="1" name="a12" checked="">
                                                    <label for="a12a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a12b" value="0" name="a12">
                                                    <label for="a12b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a12a" value="1" name="a12" >
                                                    <label for="a12a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a12b" value="0" name="a12" checked="">
                                                    <label for="a12b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Clientes</b></legend>
                                                    <h4><b>Ver clientes</b></h4>
                                                <?php if ($a30==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a30a" value="1" name="a30" checked="">
                                                    <label for="a30a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a30b" value="0" name="a30">
                                                    <label for="a30b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a30a" value="1" name="a30" >
                                                    <label for="a30a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a30b" value="0" name="a30" checked="">
                                                    <label for="a30b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Añadir cliente</b></h4>
                                                <?php if ($a31==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a31a" value="1" name="a31" checked="">
                                                    <label for="a31a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a31b" value="0" name="a31">
                                                    <label for="a31b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a31a" value="1" name="a31" >
                                                    <label for="a31a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a31b" value="0" name="a31" checked="">
                                                    <label for="a31b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Eliminar cliente</b></h4>
                                                <?php if ($a32==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a32a" value="1" name="a32" checked="">
                                                    <label for="a32a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a32b" value="0" name="a32">
                                                    <label for="a32b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a32a" value="1" name="a32" >
                                                    <label for="a32a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a32b" value="0" name="a32" checked="">
                                                    <label for="a32b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Proveedores</b></legend>
                                                    <h4><b>Ver proveedores</b></h4>
                                                <?php if ($a20==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a20a" value="1" name="a20" checked="">
                                                    <label for="a20a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a20b" value="0" name="a20">
                                                    <label for="a20b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a20a" value="1" name="a20" >
                                                    <label for="a20a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a20b" value="0" name="a20" checked="">
                                                    <label for="a20b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Añadir proveedor</b></h4>
                                                <?php if ($a21==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a21a" value="1" name="a21" checked="">
                                                    <label for="a21a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a21b" value="0" name="a21">
                                                    <label for="a21b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a21a" value="1" name="a21" >
                                                    <label for="a21a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a21b" value="0" name="a21" checked="">
                                                    <label for="a21b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Eliminar proveedor</b></h4>
                                                <?php if ($a22==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a22a" value="1" name="a22" checked="">
                                                    <label for="a22a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a22b" value="0" name="a22">
                                                    <label for="a22b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a22a" value="1" name="a22" >
                                                    <label for="a22a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a22b" value="0" name="a22" checked="">
                                                    <label for="a22b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Listados</b></legend>
                                                    <h4><b>Listados en espera</b></h4>
                                               <?php if ($a40==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a40a" value="1" name="a40" checked="">
                                                    <label for="a40a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a40b" value="0" name="a40">
                                                    <label for="a40b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a40a" value="1" name="a40" >
                                                    <label for="a40a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a40b" value="0" name="a40" checked="">
                                                    <label for="a40b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Listados enviados</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Crear listados</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Modificar refacciones</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Modificar mano de obra</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Pre-cotizacion</b></legend>
                                                    <h4><b>Pre-cotizacion</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Historial pre-cotización</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Reportes</b></legend>
                                                    <h4><b>Mandar reporte</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Reportes en espera</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Historial de reportes</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Control de herramienta</b></legend>
                                                    <h4><b>Control de herramientas</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Historial de prestamos</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Añadir prestamo</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Tableros</b></legend>
                                                    <h4><b>Tableros</b></h4><?php //crear permiso para opcion en menu ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Tablero combustión</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Tablero electricos</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Tablero reparación</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                <h4><b>Tablero refacción</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Administrador</b></legend>
                                                    <h4><b>Codigos de errores</b></h4>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                    <label for="inlineRadio1"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                    <label for="inlineRadio2"> No </label>
                                                </div>
                                                </fieldset><br>







                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <fieldset>
                                                    <legend><b>Tablero de combustión</b></legend>
                                                    <h4><b>Agregar levantamiento</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar listado</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar listado</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar pedido</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver pedidos</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar pedido</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Autorización y rechazo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar proveedor</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar orden de trabajo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar orden de trabajo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Tablero de electricos</b></legend>
                                                    <h4><b>Agregar levantamiento</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar listado</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar listado</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar pedido</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver pedidos</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar pedido</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Autorización y rechazo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar proveedor</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar orden de trabajo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar orden de trabajo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Tablero de reparación</b></legend>
                                                    <h4><b>Agregar levantamiento</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar levantamiento</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar orden de trabajo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar orden de trabajo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                

                                                </fieldset><br>
                                                <fieldset>
                                                    <legend><b>Tablero de refacción</b></legend>
                                                    <h4><b>Agregar cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar cotización</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar pedido</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver pedidos</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Eliminar pedido</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Autorización y rechazo</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar proveedor</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="1" name="cam4">
                                                        <label for="inlineRadio1"> Si </label>
                                                    </div>
                                                    <div class="radio radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="0" name="cam4">
                                                        <label for="inlineRadio2"> No </label>
                                                    </div>
                                                    </fieldset><br>
                                                
                                                
                                            </div>
                                            <button class="btn btn-primary btn-block" type="submit">Actualizar permisos</button>
                                        </form>
                                    </div>

                                
                                <?php }else{ ?> 
                                    <h1>PERMISOS DE USUARIOS</h1>
                                    <h3 style=" font-weight: bold;">NO TIENES ACCESO A ESTA FUNCIÓN</h3>
                                    <?php 
                                        date_default_timezone_set('America/Hermosillo');
                                        $fecha_ot1 = strftime('%d-%m-%Y %H:%M', time());

                                        $headers2  = "MIME-Version: 1.0\n";
                                        $headers2 .= "Content-type: text/plain; charset=utf-8\n";
                                        $headers2 .= "X-Priority: 3\n";
                                        $headers2 .= "X-MSMail-Priority: Normal\n";
                                        $headers2 .= "X-Mailer: php\n";
                                        $headers2 .= 'From: WEBMASTER ' . "\r\n";

                                        $destinatario2 ='sistemas@mahsa.com.mx';
                                        $cuerpo2 = "


                                        "."\r\n"; 
                                        $cuerpo2 .= "SE INTENTÓ MODIFICAR PERMISOS POR USUARIO NO AUTORIZADO"."\r\n";
                                        $cuerpo2 .= "USUARIO: ".$_SESSION['nombre']." "."\r\n";
                                        $cuerpo2 .= "FECHA: ".$fecha_ot1." "."\r\n";   

                                        $cuerpo2 .= " "."\r\n"; 
                                        mail($destinatario2, "INTENTO DE MODIFICACION DE PERMISOS", $cuerpo2, $headers2);
                                     ?>
                                     <span style="color: red; font-weight: bold;">
                                     <h4>Si necesitas acceso a esta sección del sistema ponte en contacto con el administrador</h4></span>
                                     <span style="color: black; font-weight: bold;">
                                     <h5>Correo de contacto</h5></span>
                                     <span style="color: black; font-weight: bold;">
                                     <h5>sistemas@mahsa.com.mx</h5></span>
                                <?php } ?>
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
