<?php session_start();  ?>
<?php 
if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
    exit();
}
 ?>
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../content/img/profile_small.png" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong style="color: white" class="font-bold"><?php echo $_SESSION['nombre']; ?></strong>
                                <span class="block m-t-xs"> <strong style="color: white" class="font-bold">Sucursal: <?php echo $_SESSION['sucursal']; ?></strong>
                             </span>
                             </span> <span class="text-muted text-xs block"><?php echo $_SESSION['puesto']; ?><b class="caret"></b></span> </span> </a>
                        <?php if ($_SESSION['nombre']=='Alberto Rodriguez' or $_SESSION['nombre']=='Daniel Mendoza') { ?>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="permisos.php">Permisos</a></li>
                            <!-- <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li> -->
                        </ul>
                        <?php } ?> 
                        
                    </div>
                    <div class="logo-element">
                        <a href="indexprincipal.php">MAHSA</a>
                        
                    </div>
                </li>
    <?php if ($_SESSION['a100']==1) { ?>
    
                <li >
                    <a href="TablaDeErrores.php"><i class="fa fa-drupal"></i> <span class="nav-label">Tabla de errores</span></a>              
                  
                </li>
    <?php } ?> 
                <li >
                    <a href="indexprincipal.php"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                    
                </li>
    <?php if ($_SESSION['a10']==1) {?> 
                <li >
                    <a href="usuarios.php"><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>
                    
                </li>
    <?php } if ($_SESSION['a200']==1) {?> 
                <li >
                    <a href="crealevantamiento.php"><i class="fa fa-home"></i> <span class="nav-label">Crea levantamiento</span></a>
                    
                </li>
    <?php } if ($_SESSION['a60']==1) {?> 
                <li >
                    <a href="#" data-toggle="modal" data-target="#modalcrealistado"><i class="fa fa-list"></i> <span class="nav-label">Crear listado</span></a>
                    
                </li>
    <?php } if ($_SESSION['a40']==1) {?> 
                <li >
                    <a href="listadoenespera.php"><i class="fa fa-clock-o"></i> <span class="nav-label">Listados en espera</span></a>
                    
                </li>
    <?php } if ($_SESSION['a50']==1) {?> 
                <li >
                    <a href="listadoenviado.php"><i class="fa fa-send"></i> <span class="nav-label">Listados enviados</span></a>
                    
                </li>
    <?php } if ($_SESSION['a30']==1) {?> 
                <li >
                    <a href="clientes.php"><i class="fa fa-address-card-o"></i> <span class="nav-label">Clientes</span></a>
                    
                </li>
    <?php } if ($_SESSION['a20']==1) {?> 
                <li >
                    <a href="proveedores.php"><i class="fa fa-address-card"></i> <span class="nav-label">Proveedores</span></a>
                    
                </li>
    <?php } if ($_SESSION['a200']==1) {?> 
                <li >
                    <a href="marcas.php"><i class="fa fa-address-card"></i> <span class="nav-label">Marca</span></a>
                    
                </li>
    <?php } if ($_SESSION['a200']==1) {?> 
                
                

               <!-- <li >
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Servicio</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                         <li><a href="crealevantamiento.php">Crear levantamiento</a></li> 
                        <li><a href="crealistado.php">Crear listado</a></li>
                        <li><a href="listadoenespera.php">Listados en espera</a></li>
                        <li><a href="listadoenviado.php">Listados enviados</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Administración</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="proveedores.php">Proveedores</a></li>
                        
                    </ul>
                </li>-->
                <li>
                    <a href="tablerocombustion.php"><i class="fa fa-tint"></i> <span class="nav-label">Tablero de combustion </span></a>
                </li>
    <?php } if ($_SESSION['b200']==1) {?> 
                <li>
                    <a href="tableroelectrico.php"><i class="fa fa-flash"></i> <span class="nav-label">Tablero de electricos </span></a>
                </li>
    <?php } if ($_SESSION['c200']==1) {?> 
                <li>
                    <a href="tableroreparacion.php"><i class="fa fa-cogs"></i> <span class="nav-label">Tablero de reparación </span></a>
                </li>
    <?php } if ($_SESSION['d200']==1) {?> 
                <li>
                    <a href="tablerorefaccion.php"><i class="fa fa-gear"></i> <span class="nav-label">Tablero de refacción </span></a>
                </li>
    <?php } if ($_SESSION['a90']==1) {?> 
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalprecotizar"><i class="fa fa-calculator"></i> <span class="nav-label">Pre-Cotizar</span></a>
                </li>
    <?php } if ($_SESSION['a120']==1) {?>       
                <li>
                    <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Control de herramienta </span></a>
                </li>
    <?php } if ($_SESSION['a110']==1) {?> 
                <li>
                    <a href="creareporte.php"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Mandar reporte </span></a>
                </li>
    <?php } if ($_SESSION['a111']==1) {?> 
                <li>
                    <a href="rep_espera.php"><i class="fa fa-clock-o"></i> <span class="nav-label">Reportes en espera </span></a>
                </li>
    <?php } if ($_SESSION['a112']==1) {?> 
                <li>
                    <a href="rep_historial.php"><i class="fa fa-history"></i> <span class="nav-label">Historial de reportes </span></a>
                </li>
    <?php } if ($_SESSION['a10']==1) {?> 
                
                <li >
                    <a target="blank" href="../Content/dashboard_2.html"><i class="fa fa-address-card"></i> <span class="nav-label">INSPINIA</span></a>
                    
                </li>
    <?php } ?> 
               
            </ul>

        </div>
    </nav>


    

                            <div class="modal inmodal fade" id="modalprecotizar" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                            <h4 class="modal-title">Pre-cotización de listados</h4>
                                            <small class="font-bold">Fecha de precotización: <?php echo date('d-m-Y') ?></small>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="form-group"><label>Listado</label> 
                                            <select class="form-control m-b" name="account">
                                                <option selected="true" disabled="true">Selecciona un listado</option>
                                                <option>Hermosillo</option>
                                                <option>Guaymas</option>
                                                <option>Nogales </option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal fade" id="modalcrealistado" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                            <h4 class="modal-title">Crear listado</h4>
                                            <small class="font-bold">Fecha del listado: <?php echo date('d-m-Y') ?></small>
                                        </div>
                                        <div class="modal-body">
                                            <form action="../Controlador/registralistado.php" method="POST">
                                            <div class="form-group"><p>¿Tiene levantamiento?</p>
                                               
                                                
                                                <div class="col-sm-10">
                                                    <div class="radio-inline "><label> <input type="radio"  name="levantamiento" id="si_l" value="1" onclick="pregunta(1)" checked> <i></i>Si </label></div>
                                                    <div class="radio-inline "><label> <input type="radio"  name="levantamiento" id="si_l" value="2" onclick="pregunta(2)" > <i></i>No </label></div>
                                                </div>
                                            </div>
                                            
                                            <div id="levantamientos" class="form-group"><label>Levantamiento</label> 
                                            <select class="chosen-select m-b" name="folio">
                                                <option selected="true" disabled="true">Selecciona un levantamiento</option>
                                                <?php //IMPRIMIMOS TODOS LOS LEVANTAMIENTOS
                                            require '../Modelo/conexion.php';
                                            $buscamarca = "SELECT Id_levantamiento,folio,cliente FROM levantamientos";
                                            $eje_buscamarca = mysqli_query($conexionbdwm, $buscamarca) or die("
                                                    <table border='1px' align='center'>
                                                        <tr>
                                                            <th>Error</th>
                                                            <th>Descripcion</th>
                                                        </tr>
                                                        <tr>
                                                            <td>105</td>
                                                            <td>
                                                                <ul style='list-style:none;'><br>
                                                                    <li>No se pudo obtener los levantamientos</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                ");
                                            while ($rowmarca=mysqli_fetch_array($eje_buscamarca)) {
                                                extract($rowmarca);

                                                echo "
                                            <option value=".$folio.">".$folio." - ".$cliente."</option>";
                                            }
                                            mysqli_close($conexionbdwm);
                                            ?>
                                            </select>
                                            <input type="hidden" readonly value="<?php echo $_SESSION['sucursal'] ?>" name='sucursal'>
                                            </div>
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Siguiente</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>




    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="../Controlador/salir.php">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
                
            </ul>

        </nav>