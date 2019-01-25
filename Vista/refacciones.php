<?php 
$l = base64_decode($_REQUEST['l']); 
/*if (isset($_REQUEST['cod'])) {
    $cod = base64_decode($_REQUEST['cod']);
    echo $l;
    echo $cod;
}else{

}*/
 
//echo $id;
require '../Modelo/conexion.php';
$buscalevantamiento = "SELECT * FROM listados WHERE Id_listados=$l";
$eje_buscalevantamiento = mysqli_query($conexionbdwm, $buscalevantamiento) or die("no se puede checar");
$resultado2 = mysqli_fetch_array($eje_buscalevantamiento);
extract($resultado2);
 ?>
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
                <div class="ibox">
                        <div class="ibox-title">
                            <h5>Añadir refacciones</h5>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            
                                
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="hidden" value="<?php echo $l ?>" name="lis" id="lis"  readonly="true">
                                            <input type="hidden" value="<?php echo $_SESSION['nombre'] ?>" name="nom" id="nom"  readonly="true">
                                            <input type="hidden" value="<?php echo $_SESSION['sucursal'] ?>" name="suc" id="suc"  readonly="true">
                                           <center><h4>Selecciona un listado</h4></center>
                                            <select data-placeholder="Selecciona el usuario" onchange="cale(this.value)" name="noempleado" class="chosen-select col-sm-10" style="width:350px;" tabindex="4" required="llenar campo">

                                            <option value="" disabled="" selected="">Selecciona un listado</option>
                                            <?php
                                            require('../Modelo/conexion.php');

                                            $rs = mysqli_query($conexionbdwm, "SELECT * FROM manodeobra where num_listadomo=$l");
                                            while($row=mysqli_fetch_array($rs))
                                            {
                                              echo "<option value='".$row['codigomo']."'>";
                                              echo $row['codigomo']." - ".$row['descripcionmo'];
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
                                      var list = $("#lis").val();
                                      var nomb = $("#nom").val();
                                      var sucu = $("#suc").val();
                                      xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                          document.getElementById("datospermisos").innerHTML = this.responseText;
                                        }
                                      };
                                      /*console.log(list);
                                      console.log(str);*/
                                      xmlhttp.open("GET","../Controlador/getdatoscodigo.php?q="+str+"&l="+list+"&n="+nomb+"&s="+sucu,true);
                                      xmlhttp.send();
                                    }
                                  }
                                </script>
                                <br><br>
                                <div id="datospermisos"></div>
                                        </div>
                                        
                                    </div>
                                
                                 <hr>
                                 <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Buscar trabajo por codigo o descripción">
                            <table class="footable table table-stripped " data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Cantidad</th>
                                        <th>No. de parte</th>
                                        <th>Descripción</th>
                                        <th>Mano de obra</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php //IMPRIMIMOS TODOS LOS USUARIOS
                                        require '../Modelo/conexion.php';
                                        $buscausuarios = "SELECT * FROM refacciones where num_listadoref=$l";
                                        $eje_buscausuarios = mysqli_query($conexionbdwm, $buscausuarios) or die("
                                            <table border='1px' align='center'>
                                                    <tr>
                                                        <th>Error</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                    <tr>
                                                        <td>118</td>
                                                        <td>
                                                            <ul style='list-style:none;'><br>
                                                                <li>No se pudo obtener el listado de mano de obras</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            ");
                                        while ($rowusuario=mysqli_fetch_array($eje_buscausuarios)) {
                                            extract($rowusuario);
                                            echo "
                                            <tr>
                                                
                                                <td>".$cantidadref."</td>
                                                <td>".$no_parteref."</td>
                                                <td>".$descripcionref."</td>
                                                <td>".$codigoref."</td>
                                                <td>
                                                    <form action='../Controlador/eliminacliente.php' method='POST'>
                                                        <input type='hidden' value='".$Id_refaccion."' name='idxno'>
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
                            <div class="form-group"><label>&nbsp</label><a href="../Controlador/finalizarefacciones.php?l=<?php echo base64_encode($l) ?>" class="btn btn-primary btn-block"><strong> Terminar listado <i class="fa fa-arrow-right"></i></strong></a>
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
