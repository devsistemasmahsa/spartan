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
                                <fieldset>
                                    <legend><h4>Datos generales</h4></legend>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Levantamiento</label><!-- require dentro del class -->
                                            <input id="userName" name="userName" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input id="password" name="password" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input id="confirm" name="confirm" type="text" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Folio</label>
                                            <input id="userName" name="userName" type="text" class="form-control ">
                                         </div>
                                        <div class="form-group">
                                            <label>Técnico</label>
                                            <input id="password" name="password" type="text" class="form-control ">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Datos generales</h4></legend>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Marca</label>
                                                <input id="name" name="name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Modelo</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Serie</label>
                                                <input id="" name="" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No. económico</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Horometro</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label>Capacidad</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Mastil</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Marca de aditamento</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Modelo aditamento</label>
                                                <input id="surname" name="surname" type="text" class="form-control">
                                            </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h4>Reporte del cliente</h4></legend>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>¿Quien atiende?</label>
                                                <input id="name" name="name" type="text" class="form-control">
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
                                                <input class="form-check-input" type="radio" name="quien" id="q1" value="mahsa" >
                                                &nbsp;&nbsp;
                                                <label>Externo</label>
                                                <input class="form-check-input" type="radio" name="quien" id="q2" value="ext" >
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
