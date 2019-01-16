<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAHSA | WEBMASTER </title>
    <?php require 'css.php'; ?>
    

</head>

<body >
    <div id="wrapper">
        <?php require 'menu.php'; ?>
        </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <?php //AQUI VA EL CONTENIDO DE LA PAGINA ?>
                   
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tablero de electricos</h5>
                                <div class="ibox-tools">
                                    <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalagregalevantamiento" href="#">
                                        <i class="fa fa-plus"></i> Agregar levantamiento
                                    </a>
                                    <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modaleliminalevantamiento" href="#">
                                        <i class="fa fa-trash"></i> Eliminar levantamiento
                                    </a>
                                </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Buscar en el tablero"><br>
                            <div class="table-responsive">
                            <table class="footable table table-stripped table-hover" data-page-size="8" data-filter="#filter">
                                <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th style="background-color: #34495e; color: white">Estado</th>
                                    <th data-hide="phone" style="background-color: #34495e; color: white">Folio</th>
                                    <th data-hide="phone" style="background-color: #abb2b9; color: white">Fecha</th>
                                    <th data-hide="phone" style="background-color: #abb2b9; color: white">Cliente</th>
                                    <th data-hide="phone" style="background-color: #abb2b9; color: white">No. económico</th>
                                    <th data-hide="phone" style="background-color: #abb2b9; color: white">Ubicación</th>
                                    <th data-hide="phone" style="background-color: #ec7063; color: white">Listado</th>
                                    <th data-hide="phone" style="background-color: #ec7063; color: white">Fecha listado</th>
                                    <th data-hide="phone" style="background-color: #5dade2; color: white">Cotización</th>
                                    <th data-hide="phone" style="background-color: #5dade2; color: white">Fecha cotización</th>
                                    <th data-hide="phone" style="background-color: #5dade2; color: white">Tiempo de M.O.</th>
                                    <th data-hide="phone" style="background-color: #5dade2; color: white">Tiempo de refacciones</th>
                                    <th data-hide="phone" style="background-color: #a1887f; color: white">Pedido</th>
                                    <th data-hide="phone" style="background-color: #a1887f; color: white">Fecha pedido</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Proveedor</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Tiempo de pedido</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Paqueteria</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Recepción aduana</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Importación</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Recepción MAHSA</th>
                                    <th data-hide="phone" style="background-color: #bb8fce; color: white">Fecha promesa compras</th>
                                    <th data-hide="phone" style="background-color: #2e64fe; color: white">Orden de trabajo</th>
                                    <th data-hide="phone" style="background-color: #2e64fe; color: white">Apertura O.T.</th>
                                    <th data-hide="phone" style="background-color: #2e64fe; color: white">Cierre O.T.</th>
                                    <th data-hide="phone" style="background-color: #2e64fe; color: white">Fecha promesa</th>
                                    <th data-hide="phone" style="background-color: orange; color: white">Factura</th>
                                    <th data-hide="phone" style="background-color: orange; color: white">Fecha factura</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                    <td>XCVB</td>
                                </tr>

                                
                               
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="28">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
           
    <div class="modal inmodal fade" id="modalagregalevantamiento" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title">Añadir levantamiento</h4>
                            <small class="font-bold">Registro de levantamiento</small>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                    <div class="form-group"><label>Folio</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>No. Económico</label> <input type="text" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label>levantamiento</label> 
                                    <select class="form-control m-b" name="account">
                                        <option disabled="true" selected="true">Seleccione levantamiento</option>
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
                                            </select>
                                    </div>
                                   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar levantamiento</button>
                        </form> 
                        </div>
                    </div>
                </div>
    </div>
    <div class="modal inmodal fade" id="modaleliminalevantamiento" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                            <h4 class="modal-title">Elimina levantamiento</h4>
                            <small class="font-bold"></small>
                        </div>
                        <div class="modal-body">
                            <p><strong>¿Esta seguro de eliminar el levantamiento?</strong> Al borrar al levantamiento se borrará toda la información relacionada con este.</p>
                            <div class="form-group"><label>Selecciona levantamiento</label> 
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
