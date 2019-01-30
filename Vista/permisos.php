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
                   
                         <div class="jumbotron">
                             <center>
                                <?php if ($_SESSION['nombre']=='Alberto Rodriguez' or $_SESSION['nombre']=='Daniel Mendoza') { ?>
                            <center><h4>Selecciones el usuario al que desea modificar sus permisos</h4></center>
                            <select data-placeholder="Selecciona el usuario" onchange="cale(this.value)" id="noempleado" name="noempleado" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">

                            <option value="" disabled="" selected="">Selecciona un usuario</option>
                            <?php
                            require('../Modelo/conexion.php');

                            $rs = mysqli_query($conexionbdwm, "SELECT * FROM usuario");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['Id_usuario']."'>";
                              echo $row['nombre'];
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
                                      xmlhttp.open("GET","../Controlador/getdatospermisos.php?q="+str,true);
                                      xmlhttp.send();
                                    }
                                  }
                                </script>
                                <br><br>
                                <div id="datospermisos"></div>
                                    

                                    
                                
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
