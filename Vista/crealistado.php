<?php 
$levantamientourl = base64_decode($_REQUEST['le']); 
//echo $levantamientourl;
require '../Modelo/conexion.php';
$buscalevantamiento = "SELECT * FROM listados WHERE num_levantamiento='$levantamientourl'";
$eje_buscalevantamiento = mysqli_query($conexionbdwm, $buscalevantamiento) or die("no se puede checar");
$resultado2 = mysqli_fetch_array($eje_buscalevantamiento);
extract($resultado2);
if (!empty($cliente)) {?>
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
                            <h4><b>Crear listado con levantamiento</b></h4>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <form action="../Controlador/actualizalistadoconlev.php" method="POST">
                                <fieldset>
                                    <legend><h4>Datos generales</h4></legend>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="hidden" value="<?php echo $Id_listados ?>" readonly name="id">
                                            <label>Levantamiento</label><!-- require dentro del class -->
                                            <input id="userName" name="levantamiento" type="text" class="form-control" value="<?php echo $num_levantamiento ?>" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input id="userName" name="cliente" type="text" class="form-control" value="<?php echo $cliente ?>" readonly="true">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input id="" name="fecha" type="text" class="form-control " value="<?php echo $fecha_listado ?>" readonly="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Folio (Numero de listado)</label>
                                            <input id="" name="folio" type="number" class="form-control " value="<?php echo $num_listado ?>" readonly="true">
                                         </div>
                                        <div class="form-group">
                                            <label>Técnico</label>
                                            <input id="" name="tecnico" type="text" class="form-control " value="<?php echo $_SESSION['nombre'] ?>" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Sucursal</label>
                                            <input id="" name="sucursal" type="text" class="form-control " value="<?php echo $sucursal ?>" readonly="true">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Datos generales</h4></legend>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Marca</label>
                                                <select data-placeholder="Selecciona la marca"  id="marca" name="marca" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Selecciona un marca</option>
                                            <?php
                                            require('../Modelo/conexion.php');

                                            $rss = mysqli_query($conexionbdwm, "SELECT * FROM marca");
                                            while($roww=mysqli_fetch_array($rss))
                                            {
                                              echo "<option value='".$roww['marca']."'>";
                                              echo $roww['marca'];
                                              echo "</option>";                     
                                            }

                                            mysqli_close($conexionbdwm);
                                            ?>

                                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Modelo</label>
                                                <input id="" name="modelo" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Serie</label>
                                                <input id="" name="serie" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No. económico</label>
                                                <input id="" name="no_eco" type="number" class="form-control" value="<?php echo $num_economico ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Horometro</label>
                                                <input id="" name="horometro" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Capacidad</label>
                                                <input id="" name="capacidad" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            
                                            
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select data-placeholder="Selecciona la tipo"  id="tipo" name="tipo" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Selecciona un tipo</option>
                                            <option value='APILADOR'>APILADOR</option>
                                            <option value='CARGADOR DE BATERIAS'>CARGADOR DE BATERIAS</option>
                                            <option value='COMBUSTION DIESEL'>COMBUSTION DIESEL</option>
                                            <option value='COMBUSTION GAS'>COMBUSTION GAS</option>
                                            <option value='COMBUSTION GASOLINA'>COMBUSTION GASOLINA</option>
                                            <option value='ELECTRICO'>ELECTRICO</option>
                                            <option value='PATIN ELECTRICO'>PATIN ELECTRICO</option>
                                            <option value='PATIN HIDRAULICO'>PATIN HIDRAULICO</option>
                                            <option value='PLATAFORMA AEREA COMBUSTION'>PLATAFORMA AEREA COMBUSTION</option>
                                            <option value='PLATAFORMA AEREA ELECTRICA'>PLATAFORMA AEREA ELECTRICA</option>
                                            <option value='REMOLCADOR COMBUSTION'>REMOLCADOR COMBUSTION</option>
                                            <option value='REMOLCADOR ELECTRICO'>REMOLCADOR ELECTRICO</option>

                                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Estado del equipo</label>
                                                <select data-placeholder="Seleccion"  id="estado" name="estado" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Seleccion</option>
                                            <option value="FUNCIONANDO" >FUNCIONANDO</option>
                                            <option value="PARADO" >PARADO</option>
                                            
                                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Mastil</label>
                                                <input id="" name="mastil" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Marca de aditamento</label>
                                                <input id="" name="mar_aditamento" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Modelo aditamento</label>
                                                <input id="" name="mod_aditamento" type="text" class="form-control">
                                            </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Reporte del cliente</h4></legend>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>¿Quien atiende?</label>
                                                <input id="name" name="quien" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Falla reportada</label>
                                                <textarea class="form-control" rows="5" name="falla" style="height: 85px;" placeholder="Describe la falla reportada..." ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check-inline " id="i_radio">
                                                <h6>Traslado: <i class="fa fa-truck"></i> </h6>
                                                &nbsp;
                                                <label>Si</label>
                                                <input class="form-check-input" type="radio" name="traslado" id="t1" value="si" onclick="undisable()" >
                                                &nbsp;&nbsp;
                                                <label>No</label>
                                                <input class="form-check-input" type="radio" name="traslado" id="t2" value="no" onclick="disable()" >   

                                            </div>
                                            <br><br>
                                            <div class="form-check-inline " id="i_radio2">
                                                <h6>¿De quien?:</h6>
                                                &nbsp;
                                                <label>Mahsa</label>
                                                <input class="form-check-input" type="radio" name="trasquien" id="q1" value="mahsa" >
                                                &nbsp;&nbsp;
                                                <label>Externo</label>
                                                <input class="form-check-input" type="radio" name="trasquien" id="q2" value="ext" >
                                            </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Reporte</h4></legend>
                                    <div class="col-lg-12">
                                        <label>Observaciones </label>
                                        <textarea class="form-control" rows="5" type="text" name="obs" style="height: 138px;" placeholder="Ingrese alguna observaci&oacute;n..." required></textarea><br>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-block pull-right">Guardar</button>
                                    </div>
                                </fieldset>
                                </form>
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


<?php }else{ ?>
    
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
                            <h4><b>Crear listado con levantamiento</b></h4>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <form action="../Controlador/actualizalistado.php" method="POST">
                                <fieldset>
                                    <legend><h4>Datos generales</h4></legend>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="hidden" value="<?php echo $Id_listados ?>" readonly name="id">
                                            <label>Levantamiento</label><!-- require dentro del class -->
                                            <input id="userName" name="levantamiento" type="text" class="form-control" value="<?php echo $num_levantamiento ?>" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente</label><?php //AQUI VA UN SELECT PORQUE ES SIN LEVANTAMIENTO ?>
                                            <select data-placeholder="Selecciona el cliente"  id="" name="cliente" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Selecciona un cliente</option>
                                            <?php
                                            require('../Modelo/conexion.php');

                                            $rs = mysqli_query($conexionbdwm, "SELECT * FROM cliente");
                                            while($row=mysqli_fetch_array($rs))
                                            {
                                              echo "<option value='".$row['nombre']."'>";
                                              echo $row['nombre'];
                                              echo "</option>";                     
                                            }

                                            mysqli_close($conexionbdwm);
                                            ?>

                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input id="" name="fecha" type="text" class="form-control " value="<?php echo $fecha_listado ?>" readonly="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Folio (Numero de listado)</label>
                                            <input id="" name="folio" type="number" class="form-control " value="<?php echo $num_listado ?>" readonly="true">
                                         </div>
                                        <div class="form-group">
                                            <label>Técnico</label>
                                            <input id="" name="tecnico" type="text" class="form-control " value="<?php echo $_SESSION['nombre'] ?>" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Sucursal</label>
                                            <input id="" name="sucursal" type="text" class="form-control " value="<?php echo $sucursal ?>" readonly="true">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Datos generales</h4></legend>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Marca</label>
                                                <select data-placeholder="Selecciona la marca"  id="marca" name="marca" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Selecciona un marca</option>
                                            <?php
                                            require('../Modelo/conexion.php');

                                            $rss = mysqli_query($conexionbdwm, "SELECT * FROM marca");
                                            while($roww=mysqli_fetch_array($rss))
                                            {
                                              echo "<option value='".$roww['marca']."'>";
                                              echo $roww['marca'];
                                              echo "</option>";                     
                                            }

                                            mysqli_close($conexionbdwm);
                                            ?>

                                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Modelo</label>
                                                <input id="" name="modelo" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Serie</label>
                                                <input id="" name="serie" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No. económico</label>
                                                <input id="" name="no_eco" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Horometro</label>
                                                <input id="" name="horometro" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Capacidad</label>
                                                <input id="" name="capacidad" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            
                                            
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select data-placeholder="Selecciona la tipo"  id="tipo" name="tipo" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Selecciona un tipo</option>
                                            <option value='APILADOR'>APILADOR</option>
                                            <option value='CARGADOR DE BATERIAS'>CARGADOR DE BATERIAS</option>
                                            <option value='COMBUSTION DIESEL'>COMBUSTION DIESEL</option>
                                            <option value='COMBUSTION GAS'>COMBUSTION GAS</option>
                                            <option value='COMBUSTION GASOLINA'>COMBUSTION GASOLINA</option>
                                            <option value='ELECTRICO'>ELECTRICO</option>
                                            <option value='PATIN ELECTRICO'>PATIN ELECTRICO</option>
                                            <option value='PATIN HIDRAULICO'>PATIN HIDRAULICO</option>
                                            <option value='PLATAFORMA AEREA COMBUSTION'>PLATAFORMA AEREA COMBUSTION</option>
                                            <option value='PLATAFORMA AEREA ELECTRICA'>PLATAFORMA AEREA ELECTRICA</option>
                                            <option value='REMOLCADOR COMBUSTION'>REMOLCADOR COMBUSTION</option>
                                            <option value='REMOLCADOR ELECTRICO'>REMOLCADOR ELECTRICO</option>

                                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Estado del equipo</label>
                                                <select data-placeholder="Seleccion"  id="estado" name="estado" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">
                                            <option value="" disabled="" selected="">Seleccion</option>
                                            <option value="FUNCIONANDO" >FUNCIONANDO</option>
                                            <option value="PARADO" >PARADO</option>
                                            
                                          </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Mastil</label>
                                                <input id="" name="mastil" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Marca de aditamento</label>
                                                <input id="" name="mar_aditamento" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Modelo aditamento</label>
                                                <input id="" name="mod_aditamento" type="text" class="form-control">
                                            </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Reporte del cliente</h4></legend>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>¿Quien atiende?</label>
                                                <input id="name" name="quien" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Falla reportada</label>
                                                <textarea class="form-control" rows="5" name="falla" style="height: 85px;" placeholder="Describe la falla reportada..." ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check-inline " id="i_radio">
                                                <h6>Traslado: <i class="fa fa-truck"></i> </h6>
                                                &nbsp;
                                                <label>Si</label>
                                                <input class="form-check-input" type="radio" name="traslado" id="t1" value="si" onclick="undisable()" >
                                                &nbsp;&nbsp;
                                                <label>No</label>
                                                <input class="form-check-input" type="radio" name="traslado" id="t2" value="no" onclick="disable()" >   

                                            </div>
                                            <br><br>
                                            <div class="form-check-inline " id="i_radio2">
                                                <h6>¿De quien?:</h6>
                                                &nbsp;
                                                <label>Mahsa</label>
                                                <input class="form-check-input" type="radio" name="trasquien" id="q1" value="mahsa" >
                                                &nbsp;&nbsp;
                                                <label>Externo</label>
                                                <input class="form-check-input" type="radio" name="trasquien" id="q2" value="ext" >
                                            </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Reporte</h4></legend>
                                    <div class="col-lg-12">
                                        <label>Observaciones </label>
                                        <textarea class="form-control" rows="5" type="text" name="obs" style="height: 138px;" placeholder="Ingrese alguna observaci&oacute;n..." required></textarea><br>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-block pull-right">Guardar</button>
                                    </div>
                                </fieldset>
                                </form>
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


<?php } ?>

 