<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../content/img/profile_small.jpg" />
                             </span>
                        
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">[Nombre Usuario]</strong>
                             </span> <span class="text-muted text-xs block">[Puesto]<b class="caret"></b></span> </span> </a>
                        
                    </div>
                    <div class="logo-element">
                        <a href="indexprincipal.php">MAHSA</a>
                        
                    </div>
                </li>
                <li >
                    <a href="indexprincipal.php"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                    
                </li>
                <li >
                    <a href="usuarios.php"><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>
                    
                </li>
                <li >
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
                </li>
                <li>
                    <a href="tablerocombustion.php"><i class="fa fa-tint"></i> <span class="nav-label">Tablero de combustion </span></a>
                </li>
                <li>
                    <a href="tableroelectrico.php"><i class="fa fa-flash"></i> <span class="nav-label">Tablero de electricos </span></a>
                </li>
                <li>
                    <a href="tableroreparacion.php"><i class="fa fa-cogs"></i> <span class="nav-label">Tablero de reparación </span></a>
                </li>
                <li>
                    <a href="tablerorefaccion.php"><i class="fa fa-gear"></i> <span class="nav-label">Tablero de refacción </span></a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalprecotizar"><i class="fa fa-money"></i> <span class="nav-label">Pre-Cotizar</span></a>
                <li>
                    <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Control de herramienta </span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Quejas y sugerencias</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Crear reporte</a></li>
                        <li><a href="#">Ver reportes</a></li>
                        
                    </ul>
                </li>
               
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




    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
                
            </ul>

        </nav>