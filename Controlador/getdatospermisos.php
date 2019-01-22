<?php // aqui va la consulta para preguntar por los permisos de cada usuario
                   $id=$_GET['q'];
                    require '../Modelo/conexion.php'; 
                        //$id=3;
                        $buscapermiso = "SELECT * FROM permisos WHERE id_usuario=$id";
                        $eje_buscapermiso = mysqli_query($conexionbdwm, $buscapermiso) or die("no se puede checar");
                        $resultado = mysqli_fetch_array($eje_buscapermiso);
                        extract($resultado);

                    ?>
                                    <div class="row">
                                        <form action="../Controlador/actualizapermisos.php" method="post">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <fieldset>
                                                    <legend><b><h2>PERMISOS DE USUARIOS</h2></b></legend>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Usuarios</b></legend>
                                                    <h4><b>Ver usuarios</b></h4>
                                                    <input type="hidden" value="<?php echo $id ?>" readonly name="iduser">
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
                                                    </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Reportes</b></legend>
                                                    <h4><b>Mandar reporte</b></h4>
                                                <?php if ($a110==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a110a" value="1" name="a110" checked="">
                                                    <label for="a110a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a110b" value="0" name="a110">
                                                    <label for="a110b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a110a" value="1" name="a110" >
                                                    <label for="a110a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a110b" value="0" name="a110" checked="">
                                                    <label for="a110b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Reportes en espera</b></h4>
                                                <?php if ($a111==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a111a" value="1" name="a111" checked="">
                                                    <label for="a111a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a111b" value="0" name="a111">
                                                    <label for="a111b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a111a" value="1" name="a111" >
                                                    <label for="a111a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a111b" value="0" name="a111" checked="">
                                                    <label for="a111b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Historial de reportes</b></h4>
                                                <?php if ($a112==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a112a" value="1" name="a112" checked="">
                                                    <label for="a112a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a112b" value="0" name="a112">
                                                    <label for="a112b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a112a" value="1" name="a112" >
                                                    <label for="a112a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a112b" value="0" name="a112" checked="">
                                                    <label for="a112b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">

                                                    <fieldset>
                                                    <legend><b>Control de herramienta</b></legend>
                                                    <h4><b>Control de herramientas</b></h4>
                                                <?php if ($a120==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a120a" value="1" name="a120" checked="">
                                                    <label for="a120a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a120b" value="0" name="a120">
                                                    <label for="a120b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a120a" value="1" name="a120" >
                                                    <label for="a120a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a120b" value="0" name="a120" checked="">
                                                    <label for="a120b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Historial de prestamos</b></h4>
                                                <?php if ($a121==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a121a" value="1" name="a121" checked="">
                                                    <label for="a121a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a121b" value="0" name="a121">
                                                    <label for="a121b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a121a" value="1" name="a121" >
                                                    <label for="a121a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a121b" value="0" name="a121" checked="">
                                                    <label for="a121b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Añadir prestamo</b></h4>
                                                <?php if ($a122==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a122a" value="1" name="a122" checked="">
                                                    <label for="a122a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a122b" value="0" name="a122">
                                                    <label for="a122b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a122a" value="1" name="a122" >
                                                    <label for="a122a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a122b" value="0" name="a122" checked="">
                                                    <label for="a122b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 

                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Pre-cotizacion</b></legend>
                                                    <h4><b>Pre-cotizacion</b></h4>
                                                <?php if ($a90==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a90a" value="1" name="a90" checked="">
                                                    <label for="a90a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a90b" value="0" name="a90">
                                                    <label for="a90b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a90a" value="1" name="a90" >
                                                    <label for="a90a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a90b" value="0" name="a90" checked="">
                                                    <label for="a90b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Historial pre-cotización</b></h4>
                                                <?php if ($a91==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a91a" value="1" name="a91" checked="">
                                                    <label for="a91a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a91b" value="0" name="a91">
                                                    <label for="a91b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a91a" value="1" name="a91" >
                                                    <label for="a91a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a91b" value="0" name="a91" checked="">
                                                    <label for="a91b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Administrador</b></legend>
                                                    <h4><b>Codigos de errores</b></h4>
                                                <?php if ($a100==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a100a" value="1" name="a100" checked="">
                                                    <label for="a100a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a100b" value="0" name="a100">
                                                    <label for="a100b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a100a" value="1" name="a100" >
                                                    <label for="a100a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a100b" value="0" name="a100" checked="">
                                                    <label for="a100b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                                                <?php if ($a50==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a50a" value="1" name="a50" checked="">
                                                    <label for="a50a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a50b" value="0" name="a50">
                                                    <label for="a50b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a50a" value="1" name="a50" >
                                                    <label for="a50a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a50b" value="0" name="a50" checked="">
                                                    <label for="a50b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Crear listados</b></h4>
                                                <?php if ($a60==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a60a" value="1" name="a60" checked="">
                                                    <label for="a60a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a60b" value="0" name="a60">
                                                    <label for="a60b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a60a" value="1" name="a60" >
                                                    <label for="a60a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a60b" value="0" name="a60" checked="">
                                                    <label for="a60b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Modificar refacciones</b></h4>
                                                <?php if ($a70==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a70a" value="1" name="a70" checked="">
                                                    <label for="a70a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a70b" value="0" name="a70">
                                                    <label for="a70b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a70a" value="1" name="a70" >
                                                    <label for="a70a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a70b" value="0" name="a70" checked="">
                                                    <label for="a70b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Modificar mano de obra</b></h4>
                                                <?php if ($a80==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a80a" value="1" name="a80" checked="">
                                                    <label for="a80a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a80b" value="0" name="a80">
                                                    <label for="a80b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a80a" value="1" name="a80" >
                                                    <label for="a80a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a80b" value="0" name="a80" checked="">
                                                    <label for="a80b"> No </label>
                                                </div>
                                            <?php } ?>
                                                        </fieldset><br> 
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Tableros</b></legend>
                                                    <h4><b>Tableros</b></h4><?php //crear permiso para opcion en menu ?>
                                                <?php if ($a500==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a500a" value="1" name="a500" checked="">
                                                    <label for="a500a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a500b" value="0" name="a500">
                                                    <label for="a500b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a500a" value="1" name="a500" >
                                                    <label for="a500a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a500b" value="0" name="a500" checked="">
                                                    <label for="a500b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Tablero combustión</b></h4>
                                                <?php if ($a200==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a200a" value="1" name="a200" checked="">
                                                    <label for="a200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a200b" value="0" name="a200">
                                                    <label for="a200b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a200a" value="1" name="a200" >
                                                    <label for="a200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a200b" value="0" name="a200" checked="">
                                                    <label for="a200b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Tablero electricos</b></h4>
                                                <?php if ($b200==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b200a" value="1" name="b200" checked="">
                                                    <label for="b200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b200b" value="0" name="b200">
                                                    <label for="b200b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b200a" value="1" name="b200" >
                                                    <label for="b200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b200b" value="0" name="b200" checked="">
                                                    <label for="b200b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Tablero reparación</b></h4>
                                                <?php if ($c200==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c200a" value="1" name="c200" checked="">
                                                    <label for="c200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c200b" value="0" name="c200">
                                                    <label for="c200b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c200a" value="1" name="c200" >
                                                    <label for="c200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c200b" value="0" name="c200" checked="">
                                                    <label for="c200b"> No </label>
                                                </div>
                                            <?php } ?>
                                                <h4><b>Tablero refacción</b></h4>
                                                <?php if ($d200==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d200a" value="1" name="d200" checked="">
                                                    <label for="d200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d200b" value="0" name="d200">
                                                    <label for="d200b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d200a" value="1" name="d200" >
                                                    <label for="d200a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d200b" value="0" name="d200" checked="">
                                                    <label for="d200b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Tablero de combustión</b></legend>
                                                    <h4><b>Eliminar levantamiento</b></h4>
                                                    <?php if ($a201==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a201a" value="1" name="a201" checked="">
                                                    <label for="a201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a201b" value="0" name="a201">
                                                    <label for="a201b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a201a" value="1" name="a201" >
                                                    <label for="a201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a201b" value="0" name="a201" checked="">
                                                    <label for="a201b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar levantamiento</b></h4>
                                                    <?php if ($a202==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a202a" value="1" name="a202" checked="">
                                                    <label for="a202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a202b" value="0" name="a202">
                                                    <label for="a202b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a202a" value="1" name="a202" >
                                                    <label for="a202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a202b" value="0" name="a202" checked="">
                                                    <label for="a202b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar listado</b></h4>
                                                    <?php if ($a210==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a210a" value="1" name="a210" checked="">
                                                    <label for="a210a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a210b" value="0" name="a210">
                                                    <label for="a210b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a210a" value="1" name="a210" >
                                                    <label for="a210a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a210b" value="0" name="a210" checked="">
                                                    <label for="a210b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver listado</b></h4>
                                                    <?php if ($a211==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a211a" value="1" name="a211" checked="">
                                                    <label for="a211a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a211b" value="0" name="a211">
                                                    <label for="a211b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a211a" value="1" name="a211" >
                                                    <label for="a211a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a211b" value="0" name="a211" checked="">
                                                    <label for="a211b"> No </label>
                                                </div>
                                            <?php } ?>
                                            <h4><b>Eliminar listado</b></h4>
                                                    <?php if ($a212==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a212a" value="1" name="a212" checked="">
                                                    <label for="a212a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a212b" value="0" name="a212">
                                                    <label for="a212b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a212a" value="1" name="a212" >
                                                    <label for="a212a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a212b" value="0" name="a212" checked="">
                                                    <label for="a212b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar cotización</b></h4>
                                                    <?php if ($a220==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a220a" value="1" name="a220" checked="">
                                                    <label for="a220a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a220b" value="0" name="a220">
                                                    <label for="a220b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a220a" value="1" name="a220" >
                                                    <label for="a220a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a220b" value="0" name="a220" checked="">
                                                    <label for="a220b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver cotización</b></h4>
                                                    <?php if ($a221==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a221a" value="1" name="a221" checked="">
                                                    <label for="a221a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a221b" value="0" name="a221">
                                                    <label for="a221b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a221a" value="1" name="a221" >
                                                    <label for="a221a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a221b" value="0" name="a221" checked="">
                                                    <label for="a221b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar cotización</b></h4>
                                                    <?php if ($a222==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a222a" value="1" name="a222" checked="">
                                                    <label for="a222a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a222b" value="0" name="a222">
                                                    <label for="a222b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a222a" value="1" name="a222" >
                                                    <label for="a222a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a222b" value="0" name="a222" checked="">
                                                    <label for="a222b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar pedido</b></h4>
                                                    <?php if ($a230==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a230a" value="1" name="a230" checked="">
                                                    <label for="a230a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a230b" value="0" name="a230">
                                                    <label for="a230b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a230a" value="1" name="a230" >
                                                    <label for="a230a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a230b" value="0" name="a230" checked="">
                                                    <label for="a230b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver pedidos</b></h4>
                                                    <?php if ($a231==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a231a" value="1" name="a231" checked="">
                                                    <label for="a231a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a231b" value="0" name="a231">
                                                    <label for="a231b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a231a" value="1" name="a231" >
                                                    <label for="a231a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a231b" value="0" name="a231" checked="">
                                                    <label for="a231b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar pedido</b></h4>
                                                    <?php if ($a232==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a232a" value="1" name="a232" checked="">
                                                    <label for="a232a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a232b" value="0" name="a232">
                                                    <label for="a232b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a232a" value="1" name="a232" >
                                                    <label for="a232a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a232b" value="0" name="a232" checked="">
                                                    <label for="a232b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Autorización y rechazo</b></h4>
                                                    <?php if ($a233==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a233a" value="1" name="a233" checked="">
                                                    <label for="a233a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a233b" value="0" name="a233">
                                                    <label for="a233b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a233a" value="1" name="a233" >
                                                    <label for="a233a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a233b" value="0" name="a233" checked="">
                                                    <label for="a233b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar proveedor</b></h4>
                                                    <?php if ($a240==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a240a" value="1" name="a240" checked="">
                                                    <label for="a240a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a240b" value="0" name="a240">
                                                    <label for="a240b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a240a" value="1" name="a240" >
                                                    <label for="a240a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a240b" value="0" name="a240" checked="">
                                                    <label for="a240b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar orden de trabajo</b></h4>
                                                    <?php if ($a250==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a250a" value="1" name="a250" checked="">
                                                    <label for="a250a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a250b" value="0" name="a250">
                                                    <label for="a250b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a250a" value="1" name="a250" >
                                                    <label for="a250a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a250b" value="0" name="a250" checked="">
                                                    <label for="a250b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar orden de trabajo</b></h4>
                                                    <?php if ($a251==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a251a" value="1" name="a251" checked="">
                                                    <label for="a251a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a251b" value="0" name="a251">
                                                    <label for="a251b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a251a" value="1" name="a251" >
                                                    <label for="a251a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a251b" value="0" name="a251" checked="">
                                                    <label for="a251b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <?php if ($a50==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a260a" value="1" name="a260" checked="">
                                                    <label for="a260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a260b" value="0" name="a260">
                                                    <label for="a260b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a260a" value="1" name="a260" >
                                                    <label for="a260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a260b" value="0" name="a260" checked="">
                                                    <label for="a260b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <?php if ($a261==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a261a" value="1" name="a261" checked="">
                                                    <label for="a261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a261b" value="0" name="a261">
                                                    <label for="a261b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="a261a" value="1" name="a261" >
                                                    <label for="a261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="a261b" value="0" name="a261" checked="">
                                                    <label for="a261b"> No </label>
                                                </div>
                                            <?php } ?>
                                                

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                         <fieldset>
                                                    <h4><b>Eliminar levantamiento</b></h4>
                                                    <?php if ($b201==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b201a" value="1" name="b201" checked="">
                                                    <label for="b201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b201b" value="0" name="b201">
                                                    <label for="b201b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b201a" value="1" name="b201" >
                                                    <label for="b201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b201b" value="0" name="b201" checked="">
                                                    <label for="b201b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <legend><b>Tablero de electricos</b></legend>
                                                    <h4><b>Agregar levantamiento</b></h4>
                                                    <?php if ($b200==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b200a" value="1" name="b202" checked="">
                                                    <label for="b202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b202b" value="0" name="b202">
                                                    <label for="b202b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b202a" value="1" name="b202" >
                                                    <label for="b202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b202b" value="0" name="b202" checked="">
                                                    <label for="b202b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar listado</b></h4>
                                                    <?php if ($b210==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b210a" value="1" name="b210" checked="">
                                                    <label for="b210a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b210b" value="0" name="b210">
                                                    <label for="b210b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b210a" value="1" name="b210" >
                                                    <label for="b210a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b210b" value="0" name="b210" checked="">
                                                    <label for="b210b"> No </label>
                                                </div>
                                            <?php } ?>
                                            <h4><b>Ver listado</b></h4>
                                                    <?php if ($b211==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b211a" value="1" name="b211" checked="">
                                                    <label for="b211a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b211b" value="0" name="b211">
                                                    <label for="b211b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b211a" value="1" name="b211" >
                                                    <label for="b211a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b211b" value="0" name="b211" checked="">
                                                    <label for="b211b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar listado</b></h4>
                                                    <?php if ($b212==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b212a" value="1" name="b212" checked="">
                                                    <label for="b212a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b212b" value="0" name="b212">
                                                    <label for="b212b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b212a" value="1" name="b212" >
                                                    <label for="b212a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b212b" value="0" name="b212" checked="">
                                                    <label for="b212b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar cotización</b></h4>
                                                    <?php if ($b220==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b220a" value="1" name="b220" checked="">
                                                    <label for="b220a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b220b" value="0" name="b220">
                                                    <label for="b220b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b220a" value="1" name="b220" >
                                                    <label for="b220a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b220b" value="0" name="b220" checked="">
                                                    <label for="b220b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver cotización</b></h4>
                                                    <?php if ($b221==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b221a" value="1" name="b221" checked="">
                                                    <label for="b221a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b221b" value="0" name="b221">
                                                    <label for="b221b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b221a" value="1" name="b221" >
                                                    <label for="b221a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b221b" value="0" name="b221" checked="">
                                                    <label for="b221b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar cotización</b></h4>
                                                    <?php if ($b222==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b222a" value="1" name="b222" checked="">
                                                    <label for="b222a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b222b" value="0" name="b222">
                                                    <label for="b222b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b222a" value="1" name="b222" >
                                                    <label for="b222a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b222b" value="0" name="b222" checked="">
                                                    <label for="b222b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar pedido</b></h4>
                                                    <?php if ($b230==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b230a" value="1" name="b230" checked="">
                                                    <label for="b230a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b230b" value="0" name="b230">
                                                    <label for="b230b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b230a" value="1" name="b230" >
                                                    <label for="b230a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b230b" value="0" name="b230" checked="">
                                                    <label for="b230b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver pedidos</b></h4>
                                                    <?php if ($b231==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b231a" value="1" name="b231" checked="">
                                                    <label for="b231a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b231b" value="0" name="b231">
                                                    <label for="b231b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b231a" value="1" name="b231" >
                                                    <label for="b231a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b231b" value="0" name="b231" checked="">
                                                    <label for="b231b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar pedido</b></h4>
                                                    <?php if ($b232==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b232a" value="1" name="b232" checked="">
                                                    <label for="b232a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b232b" value="0" name="b232">
                                                    <label for="b232b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b232a" value="1" name="b232" >
                                                    <label for="b232a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b232b" value="0" name="b232" checked="">
                                                    <label for="b232b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Autorización y rechazo</b></h4>
                                                    <?php if ($b233==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b233a" value="1" name="b233" checked="">
                                                    <label for="b233a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b233b" value="0" name="b233">
                                                    <label for="b233b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b233a" value="1" name="b233" >
                                                    <label for="b233a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b233b" value="0" name="b233" checked="">
                                                    <label for="b233b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar proveedor</b></h4>
                                                    <?php if ($b240==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b240a" value="1" name="b240" checked="">
                                                    <label for="b240a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b240b" value="0" name="b240">
                                                    <label for="b240b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b240a" value="1" name="b240" >
                                                    <label for="b240a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b240b" value="0" name="b240" checked="">
                                                    <label for="b240b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar orden de trabajo</b></h4>
                                                    <?php if ($b250==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b250a" value="1" name="b250" checked="">
                                                    <label for="b250a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b250b" value="0" name="b250">
                                                    <label for="b250b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b250a" value="1" name="b250" >
                                                    <label for="b250a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b250b" value="0" name="b250" checked="">
                                                    <label for="b250b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar orden de trabajo</b></h4>
                                                    <?php if ($b251==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b251a" value="1" name="b251" checked="">
                                                    <label for="b251a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b251b" value="0" name="b251">
                                                    <label for="b251b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b251a" value="1" name="b251" >
                                                    <label for="b251a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b251b" value="0" name="b251" checked="">
                                                    <label for="b251b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <?php if ($b260==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b260a" value="1" name="b260" checked="">
                                                    <label for="b260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b260b" value="0" name="b260">
                                                    <label for="b260b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b260a" value="1" name="b260" >
                                                    <label for="b260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b260b" value="0" name="b260" checked="">
                                                    <label for="b260b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <?php if ($b261==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b261a" value="1" name="b261" checked="">
                                                    <label for="b261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b261b" value="0" name="b261">
                                                    <label for="b261b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="b261a" value="1" name="b261" >
                                                    <label for="b261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="b261b" value="0" name="b261" checked="">
                                                    <label for="b261b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Tablero de reparación</b></legend>
                                                    <h4><b>Agregar reparación</b></h4>
                                                    <?php if ($c202==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c202a" value="1" name="c202" checked="">
                                                    <label for="c202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c202b" value="0" name="c202">
                                                    <label for="c202b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c202a" value="1" name="c202" >
                                                    <label for="c202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c202b" value="0" name="c202" checked="">
                                                    <label for="c202b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar levantamiento</b></h4>
                                                    <?php if ($c201==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c201a" value="1" name="c201" checked="">
                                                    <label for="c201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c201b" value="0" name="c201">
                                                    <label for="c201b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c201a" value="1" name="c201" >
                                                    <label for="c201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c201b" value="0" name="c201" checked="">
                                                    <label for="c201b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar orden de trabajo</b></h4>
                                                    <?php if ($c250==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c250a" value="1" name="c250" checked="">
                                                    <label for="c250a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c250b" value="0" name="c250">
                                                    <label for="c250b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c250a" value="1" name="c250" >
                                                    <label for="c250a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c250b" value="0" name="c250" checked="">
                                                    <label for="c250b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar orden de trabajo</b></h4>
                                                    <?php if ($c251==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c251a" value="1" name="c251" checked="">
                                                    <label for="c251a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c251b" value="0" name="c251">
                                                    <label for="c251b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c251a" value="1" name="c251" >
                                                    <label for="c251a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c251b" value="0" name="c251" checked="">
                                                    <label for="c251b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <?php if ($c260==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c260a" value="1" name="c260" checked="">
                                                    <label for="c260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c260b" value="0" name="c260">
                                                    <label for="c260b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c260a" value="1" name="c260" >
                                                    <label for="c260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c260b" value="0" name="c260" checked="">
                                                    <label for="c260b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <?php if ($c261==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c261a" value="1" name="c261" checked="">
                                                    <label for="c261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c261b" value="0" name="c261">
                                                    <label for="c261b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="c261a" value="1" name="c261" >
                                                    <label for="c261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="c261b" value="0" name="c261" checked="">
                                                    <label for="c261b"> No </label>
                                                </div>
                                            <?php } ?>
                                                </fieldset><br> 
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <fieldset>
                                                    <legend><b>Tablero de refacción</b></legend>
                                                    <h4><b>Eliminar levantamiento</b></h4>
                                                    <?php if ($d201==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d201a" value="1" name="d201" checked="">
                                                    <label for="d201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d201b" value="0" name="d201">
                                                    <label for="d201b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d201a" value="1" name="d201" >
                                                    <label for="d201a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d201b" value="0" name="d201" checked="">
                                                    <label for="d201b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar refacción</b></h4>
                                                    <?php if ($d202==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d202a" value="1" name="d202" checked="">
                                                    <label for="d202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d202b" value="0" name="d202">
                                                    <label for="d202b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d202a" value="1" name="d202" >
                                                    <label for="d202a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d202b" value="0" name="d202" checked="">
                                                    <label for="d202b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar cotización</b></h4>
                                                    <?php if ($d220==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d220a" value="1" name="d220" checked="">
                                                    <label for="d220a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d220b" value="0" name="d220">
                                                    <label for="d220b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d220a" value="1" name="d220" >
                                                    <label for="d220a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d220b" value="0" name="d220" checked="">
                                                    <label for="d220b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver cotización</b></h4>
                                                    <?php if ($d221==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d221a" value="1" name="d221" checked="">
                                                    <label for="d221a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d221b" value="0" name="d221">
                                                    <label for="d221b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d221a" value="1" name="d221" >
                                                    <label for="d221a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d221b" value="0" name="d221" checked="">
                                                    <label for="d221b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar cotización</b></h4>
                                                    <?php if ($d222==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d222a" value="1" name="d222" checked="">
                                                    <label for="d222a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d222b" value="0" name="d222">
                                                    <label for="d222b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d222a" value="1" name="d222" >
                                                    <label for="d222a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d222b" value="0" name="d222" checked="">
                                                    <label for="d222b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar pedido</b></h4>
                                                    <?php if ($d230==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d230a" value="1" name="d230" checked="">
                                                    <label for="d230a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d230b" value="0" name="d230">
                                                    <label for="d230b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d230a" value="1" name="d230" >
                                                    <label for="d230a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d230b" value="0" name="d230" checked="">
                                                    <label for="d230b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver pedidos</b></h4>
                                                    <?php if ($d231==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d231a" value="1" name="d231" checked="">
                                                    <label for="d231a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d231b" value="0" name="d231">
                                                    <label for="d231b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d231a" value="1" name="d231" >
                                                    <label for="d231a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d231b" value="0" name="d231" checked="">
                                                    <label for="d231b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Eliminar pedido</b></h4>
                                                    <?php if ($d232==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d232a" value="1" name="d232" checked="">
                                                    <label for="d232a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d232b" value="0" name="d232">
                                                    <label for="d232b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d232a" value="1" name="d232" >
                                                    <label for="d232a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d232b" value="0" name="d232" checked="">
                                                    <label for="d232b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Autorización y rechazo</b></h4>
                                                    <?php if ($d233==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d233a" value="1" name="d233" checked="">
                                                    <label for="d233a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d233b" value="0" name="d233">
                                                    <label for="d233b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d233a" value="1" name="d233" >
                                                    <label for="d233a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d233b" value="0" name="d233" checked="">
                                                    <label for="d233b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar proveedor</b></h4>
                                                    <?php if ($d240==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d240a" value="1" name="d240" checked="">
                                                    <label for="d240a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d240b" value="0" name="d240">
                                                    <label for="d240b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d240a" value="1" name="d240" >
                                                    <label for="d240a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d240b" value="0" name="d240" checked="">
                                                    <label for="d240b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Agregar facturas</b></h4>
                                                    <?php if ($d260==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d260a" value="1" name="d260" checked="">
                                                    <label for="d260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d260b" value="0" name="d260">
                                                    <label for="d260b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d260a" value="1" name="d260" >
                                                    <label for="d260a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d260b" value="0" name="d260" checked="">
                                                    <label for="d260b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    <h4><b>Ver facturas</b></h4>
                                                    <?php if ($d261==1) { ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d261a" value="1" name="d261" checked="">
                                                    <label for="d261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d261b" value="0" name="d261">
                                                    <label for="d261b"> No </label>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="d261a" value="1" name="d261" >
                                                    <label for="d261a"> Si </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" id="d261b" value="0" name="d261" checked="">
                                                    <label for="d261b"> No </label>
                                                </div>
                                            <?php } ?>
                                                    </fieldset><br> 
                                                    </div>
                                                </div>
                                            </div>


                                            <button class="btn btn-primary btn-block" type="submit">Actualizar permisos</button>
                                        </form>
                                    </div>
