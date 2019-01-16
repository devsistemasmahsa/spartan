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

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Clientes</h5>

                            <div class="ibox-tools">
                                <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalagregacliente" href="#">
                                    <i class="fa fa-plus"></i> Agregar cliente
                                </a>
                                <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modaleliminacliente" href="#">
                                    <i class="fa fa-trash"></i> Eliminar cliente
                                </a>
                                
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Buscar cliente">
                            <table class="footable table table-stripped toggle-arrow-tiny" data-filter=#filter>
                                <thead>
                                    <tr>

                                        <th data-toggle="true">Project</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th data-hide="all">Company</th>
                                        <th data-hide="all">Completed</th>
                                        <th data-hide="all">Task</th>
                                        <th data-hide="all">Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Project - This is example of project</td>
                                        <td>Patrick Smith</td>
                                        <td>0800 051213</td>
                                        <td>Inceptos Hymenaeos Ltd</td>
                                        <td><span class="pie">0.52/1.561</span></td>
                                        <td>20%</td>
                                        <td>Jul 14, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie">6,9</span></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Betha project</td>
                                        <td>John Smith</td>
                                        <td>0800 1111</td>
                                        <td>Erat Volutpat</td>
                                        <td><span class="pie">3,1</span></td>
                                        <td>75%</td>
                                        <td>Jul 18, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Gamma project</td>
                                        <td>Anna Jordan</td>
                                        <td>(016977) 0648</td>
                                        <td>Tellus Ltd</td>
                                        <td><span class="pie">4,9</span></td>
                                        <td>18%</td>
                                        <td>Jul 22, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>

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
                    </div>
                </div>
            </div>

            <div class="modal inmodal fade" id="modalagregacliente" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title">Añadir cliente</h4>
                            <small class="font-bold">Registro de cliente</small>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group"><label>Nombre del cliente</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Dirección</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Teléfono</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Correo electrónico</label> <input type="text" placeholder="" class="form-control"></div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><label>Nombre de contacto</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Numero SAE</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>Sucursal a la que pertenecerá</label> 
                                        <select class="form-control m-b" name="account">
                                            <option selected="true" disabled="true">Selecciona sucursal</option>
                                            <option>Hermosillo</option>
                                            <option>Guaymas</option>
                                            <option>Nogales </option>
                                        </select><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal inmodal fade" id="modaleliminacliente" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title">Elimina cliente</h4>
                            <small class="font-bold"></small>
                        </div>
                        <div class="modal-body">
                            <p><strong>¿Esta seguro de eliminar el cliente?</strong> Al borrar al cliente se borrará toda la información relacionada con este.</p>
                            <div class="form-group"><label>Selecciona al cliente</label> 
                                <select class="form-control m-b" name="account">
                                    <option selected="true" disabled="true">Selecciona uno</option>
                                    <option>Hermosillo</option>
                                    <option>Guaymas</option>
                                    <option>Nogales </option>
                                </select><br>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
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
