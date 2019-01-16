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
                                <form role="form">
                                    <div class="form-group"><label>Folio</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>No. Económico</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Cliente</label> 
                                    <select class="form-control m-b" name="account">
                                        <option disabled="true" selected="true">Seleccione cliente</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>
                                    </div>
                                    <div class="form-group"><label>Sucursal</label> 
                                            <select class="form-control m-b" name="account">
                                                <option selected="true" disabled="true">Selecciona sucursal</option>
                                                <option>Hermosillo</option>
                                                <option>Guaymas</option>
                                                <option>Nogales </option>
                                            </select><br>
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
