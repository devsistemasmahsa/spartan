<?php // aqui va la consulta para preguntar por los permisos de cada usuario
                   $id=$_GET['q'];
                    require '../Modelo/conexion.php'; 
                        //$id=3;
                        $buscapermiso = "SELECT * FROM listados WHERE Id_listados=$id";
                        $eje_buscapermiso = mysqli_query($conexionbdwm, $buscapermiso) or die("no se puede checar");
                        $resultado = mysqli_fetch_array($eje_buscapermiso);
                        extract($resultado);

                    ?>
                                    <div class="row">
                                        
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <fieldset>
                                                    <legend>Datos del listado</legend>
                                                    <dov class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label>Levantamiento</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $num_levantamiento ?>"></div>
                                                            <div class="form-group"><label>Listado</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $num_listado ?>"></div>
                                                            <div class="form-group"><label>Fecha del listado</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $fecha_listado ?>"></div>
                                                            <div class="form-group"><label>No. Economico</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $num_economico ?>"></div>
                                                            <div class="form-group"><label>Técnico</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $tecnico ?>"></div>
                                                            <div class="form-group"><label>Cliente</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $cliente ?>"></div>
                                                            <div class="form-group"><label>Atiende</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $atiende ?>"></div>
                                                            <div class="form-group"><label>Sucursal</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $sucursal ?>"></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label>Marca</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $marca ?>"></div>
                                                            <div class="form-group"><label>Modelo</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $modelo ?>"></div>
                                                            <div class="form-group"><label>Serie</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $serie ?>"></div>
                                                            <div class="form-group"><label>Tipo de montacarga</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $tipomontacarga ?>"></div>
                                                            <div class="form-group"><label>Capacidad</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $capacidad ?>"></div>
                                                            <div class="form-group"><label>Horometro</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $horometro ?>"></div>
                                                            <div class="form-group"><label>Mastil</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $mastil ?>"></div>
                                                            <div class="form-group"><label>Marca de aditamento</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $mar_aditamento ?>"></div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label>Modelo de aditamento</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $mod_aditamento ?>"></div>
                                                            <div class="form-group"><label>Estado del equipo</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $estadoequipo ?>"></div>
                                                            <div class="form-group"><label>Falla</label><textarea id="" cols="40" rows="4" readonly><?php echo $falla ?></textarea>
                                                            </div>
                                                            <div class="form-group"><label>Observaciones</label> <textarea id="" cols="40" rows="4" readonly><?php echo $observaciones ?></textarea></div>
                                                            <div class="form-group"><label>Traslado</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $traslado ?>"></div>
                                                            <div class="form-group"><label>Quien</label> <input type="text" placeholder="" class="form-control" readonly value="<?php echo $quien ?>"></div>
                                                        </div>
                                                    </dov>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Mano de obra</legend>
                                                    <div class="table-responsive"> 
                            <table class="footable table table-stripped" data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Codigo</th>
                                        <th>Descripción</th>
                                        <th>Horas</th>
                                        <th style="width: 100px;"><!-- <a href="#" class="btn btn-success  btn-block"><i class="fa fa-plus-square-o"></i> Modificar mano de obra</a> --></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php //IMPRIMIMOS TODOS LOS USUARIOS
                                        require '../Modelo/conexion.php';
                                        $buscausuarios = "SELECT * FROM manodeobra where num_listadomo=$Id_listados";
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
                                                
                                                <td>".$codigomo."</td>
                                                <td>".$descripcionmo."</td>
                                                <td>".$horasmo."</td>
                                                
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
                        </div>

                                                </fieldset>
                                                <fieldset>
                                                    <legend>Refacciones</legend>
                                    <div class="table-responsive">               
                                <table class="footable table table-stripped" data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Cantidad</th>
                                        <th>No. de parte</th>
                                        <th>Descripción</th>
                                        <th>Codigo relacionado</th>
                                        <th style="width: 100px;"><!-- <a href="#" class="btn btn-success btn-block " ><i class="fa fa-plus-square-o"></i> Modificar refacciones</a> --></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php //IMPRIMIMOS TODOS LOS USUARIOS
                                        require '../Modelo/conexion.php';
                                        $buscausuarios = "SELECT * FROM refacciones where num_listadoref=$Id_listados";
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
                            </table></div> 
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <?php // AQUI PREGUNTA POR EL PERMISO PARA ENVIAR(CREAR MVC) ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <a href="../Controlador/envilisesp.php?l=<?php echo $num_listado; ?>" class="btn btn-primary btn-block"><i class="fa fa-envelope-o"></i> Reenviar listado por correo</a>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <a href="#" class="btn btn-danger btn-block"><i class="fa fa-file-pdf-o"></i> Descargar PDF</a>
                                                </div>
                                            </div>
                                            
                                            
                                        
                                    </div>
