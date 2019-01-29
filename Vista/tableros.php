<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAHSA | WEBMASTER </title>
    <?php require 'css.php'; ?>
    

</head>

<body class="pace-done mini-navbar no-skin-config full-height-layout">
    <div id="wrapper">
        <?php require 'menutablero.php'; ?>
        </div>
            <div class="wrapper">
               <br>
                    <?php //AQUI VA EL CONTENIDO DE LA PAGINA ?>
                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1">Combustión</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2">Eléctricos</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-3">Refacción</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-4">Reparación</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                            <div class="panel-body">
                                               
                                            <div class="ibox-title">
                                                <h5>Tablero de combustión</h5>
                                                    <div class="ibox-tools">
                                                        <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalagregalevantamiento" href="#">
                                                            <i class="fa fa-plus"></i> Agregar levantamiento
                                                        </a>
                                                        <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modaleliminalevantamiento" href="#">
                                                            <i class="fa fa-trash"></i> Eliminar levantamiento
                                                        </a>
                                                    </div>
                                            </div>
                                            <div class="ibox-content table-responsive">
                                                <!-- <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                                       placeholder="Buscar en el tablero"><br> -->
                                                <div class="">
                                                <table class="dataTables-example table table-stripped table-hover table-sm" data-page-size="8" data-filter="#filter">
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
                                                    
                                                   
                                                    <?php 
                                                        require '../Vista/combustion.php';
                                                    ?>

                                                    
                                                   
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
                                        <div id="tab-2" class="tab-pane">
                                            <div class="panel-body">
                                                <strong>Donec quam felis</strong>

                                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                                            </div>
                                        </div>
                                        <div id="tab-3" class="tab-pane">
                                            <div class="panel-body">
                                                <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                                    existence in this spot, which was created for the bliss of souls like mine.</p>

                                                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                                    the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                            </div>
                                        </div>
                                        <div id="tab-4" class="tab-pane">
                                            <div class="panel-body">
                                                <strong>Donec quam felis</strong>

                                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
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
    <!-- MODALES -->
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
                                                                                <option value="HMO">Hermosillo</option>
                                                                                <option value="GYS">Guaymas</option>
                                                                                <option value="NGS">Nogales </option>
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
    <!-- Mainly scripts -->
        <?php require 'js.php'; ?>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
