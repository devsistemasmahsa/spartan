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
                         <div class="jumbotron">
                             <center>
                                <p>LISTADOS ENVIADOS</p>
                                <p>Selecciona un listado</p>
                                
                             </center>
                             <select data-placeholder="Selecciona el usuario" onchange="cale(this.value)" id="noempleado" name="noempleado" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">

                            <option value="" disabled="" selected="">Selecciona un listado</option>
                            <?php
                            require('../Modelo/conexion.php');
                            $suc=$_SESSION['sucursal'];
                            $rs = mysqli_query($conexionbdwm, "SELECT * FROM listados where not_terminado=1 and not_enviado=1 and sucursal='$suc'");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['Id_listados']."'>";
                              echo $row['num_listado']." - ".$row['cliente'];
                              echo "</option>";                     
                            }

                            mysqli_close($conexionbdwm);
                            ?>

                          </select>

                          <script>
                            function cale(str) {
                              if (str == "") {
                                document.getElementById("datospermisos").innerHTML = "";
                                return;
                              } else { 
                                if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                      } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                      }
                                      xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                          document.getElementById("datospermisos").innerHTML = this.responseText;
                                        }
                                      };
                                      xmlhttp.open("GET","../Controlador/getdatoslistadosenvi.php?q="+str,true);
                                      xmlhttp.send();
                                    }
                                  }
                                </script>
                                <br><br>
                                <div id="datospermisos"></div>
                                  
                            <?php // AQUI SE IMPRIME EL LISTADO CON SCRIPT AJAX ?>
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
