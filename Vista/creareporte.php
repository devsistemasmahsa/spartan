<?php if (isset($_GET['s'])) {
    echo "<script type='text/javascript'>alert('Se envió el reporte');</script>";
}else{

} ?>
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
                                <form role="form" action="../Controlador/registrareporte.php" method="POST">
                                    <div class="form-group"><label>Usuario</label> <input type="text" placeholder="" name="usuario" class="form-control" required="true"></div>
                                    <div class="form-group"><label>Descripción</label>
                                    <textarea class="form-control" placeholder="" name="descripcion" id="" cols="30" rows="10" required="true"></textarea>   
                                    </div>
                                    <!-- <div class="form-group"><label>Tipo de cambio</label> 
                                    <select class="form-control m-b" name="lugarcorreccion">
                                        <option selected disabled='true'>Tipo de cambio </option>
                                        <option value='Vista'>Vista</option>
                                        <option value='Controlador'>Controlador</option>
                                        <option value='Modelo(BD)'>Modelo(BD)</option>
                                        <option value='Vista-Controlador'>Vista-Controlador</option>
                                        <option value='Vista-Modelo'>Vista-Modelo</option>
                                        <option value='Modelo-Controlador'>Modelo-Controlador</option>
                                        <option value='Vista-Controlador-Modelo'>Vista-Controlador-Modelo</option>
                                        <option value='Otro'>Otro</option>
                                    </select>
                                    </div> -->
                                   
                                    <div>
                                        <button class="btn btn-primary" type="submit"><strong><i class="fa fa-send"></i>Enviar reporte</strong></button>
                                        
                                    </div>
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
