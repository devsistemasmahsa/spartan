<?php 
require '../Modelo/conexion.php';
                                                        //BUSCA DATOS DEL LEVANTAMIENTO
$buscalevantamiento="SELECT * FROM levantamientos where tipolevantamiento =1";
$eje_buscalevantamiento=mysqli_query($conexionbdwm,$buscalevantamiento);
while ($rowlevantamiento=mysqli_fetch_array($eje_buscalevantamiento)) {
    $Id_levantamiento=$rowlevantamiento['Id_levantamiento'];
    $foliolev=$rowlevantamiento['folio'];
    $clientelev=$rowlevantamiento['cliente'];
    $no_economicolev=$rowlevantamiento['no_economico'];
    $sucursallev=$rowlevantamiento['sucursal'];
    $estatustablerolev=$rowlevantamiento['estatustablero'];
    $fecha_levantamiento=$rowlevantamiento['fechalevantamiento'];
    $col_listado=$rowlevantamiento['col_listado'];
    $col_cotizacion=$rowlevantamiento['col_cotizacion'];
    $col_pedido=$rowlevantamiento['col_pedido'];
    $col_proveedor=$rowlevantamiento['col_proveedor'];
    $col_ot=$rowlevantamiento['col_ot'];
    $col_factura=$rowlevantamiento['col_factura'];


    echo "
    <tr class=''>
    <td>
    <a href='#' class='btn btn-danger'><i class='fa fa-trash'></i></a>
    </td>";
    if ($estatustablerolev==1) {
        echo "<td style='background-color:#abb2b9; color:white; font-weight:bold'>Levantamiento</td>";
    }elseif ($estatustablerolev==2) {
        echo "<td style='background-color:#ec7063; color:white; font-weight:bold'>Listado</td>";
    }elseif ($estatustablerolev==3) {
        echo "<td style='background-color:#5dade2; color:white; font-weight:bold'>Cotización</td>";
    }elseif ($estatustablerolev==4) {
        echo "<td style='background-color:#a1887f; color:white; font-weight:bold'>Pedído</td>";
    }elseif ($estatustablerolev==5) {
        echo "<td style='background-color:#bb8fce; color:white; font-weight:bold'>Proveedores</td>";
    }elseif ($estatustablerolev==6) {
        echo "<td style='background-color:#2e64fe; color:white; font-weight:bold'>Orden de trabajo</td>";
    }elseif ($estatustablerolev==7) {
        echo "<td style='background-color:orange; color:white; font-weight:bold'>Factura</td>";
    }elseif ($estatustablerolev==8) {
        echo "<td style='background-color:green; color:white; font-weight:bold'>Finalizado</td>";
    }else{
        echo "<td style='background-color:#000; color:white; font-weight:bold'>Sin estado Favor de reportar</td>";
    }
    echo "
    <td>".$foliolev."</td>
    <td>".$fecha_levantamiento."</td>
    <td>".$clientelev."</td>
    <td>".$no_economicolev."</td>
    <td>".$sucursallev."</td>";

    //-----------------------------------------------------------------------------------------------------------
    // BUSCAMOS LOS DATOS DEL LISTADO
    //-----------------------------------------------------------------------------------------------------------
    $buscalistados="SELECT * FROM listados where num_levantamiento='$foliolev'";
    $eje_buscalistados=mysqli_query($conexionbdwm,$buscalistados);
    $rowlistados=mysqli_fetch_array($eje_buscalistados);
    $fecha_listado=$rowlistados['fecha_listado'];
    $num_listado=$rowlistados['num_listado'];

    //$Id_levantamiento=1;
    if ($col_listado==1) {
        echo "
    <td colspan='2' align='center'>
    <div id='boton1'>
    <button class='btn btn-primary' data-toggle='modal' id='add_ls' type='submit' data-whatever='$Id_levantamiento' data-target='#add_l_$Id_levantamiento'>
    Agregar <i class='fa fa-plus' aria-hidden='true'></i>
    </button>
    </div>


    <div class='modal fade bd-example-modal-sm' id='add_l_$Id_levantamiento' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm'>
            <div class='modal-content'>
                
                <div class='modal-header'>
                    <h4>Ingrese datos de listado <i class='fa fa-fire' aria-hidden='true'></i> </h4>
                </div>
                <div class='modal-body'>
                <form action='' method='post'>
                    <div class=''>
                        <div class='col-sm-4' style='display: none;'>
                            <label>ID listado</label>
                            <input type='text' name='lis' id='lis' value='$Id_levantamiento' readonly>
                        </div>
                        <div class='form-group''>
                            <label>Número de listado</label>
                            <input class='form-control' type='number' min='1' name='lis1' id='listado_c' autocomplete='off' required>

                        </div>
                        <div class='form-group''>
                            <button class='btn btn-primary form-control' name='enviar_lis' id='add_ls'>
                                Agregar <i class='fa fa-plus' aria-hidden='true'></i>
                            </button>
                        </div>
                    </div>
                
                <span>No. Folio $foliolev</span>                    
                </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>
                    <button type='submit' class='btn btn-primary'>Siguiente</button>   
                    </form>               
                </div>

                
            </div>
        </div>
    </div>

    </td>



    ";
    }elseif($col_listado==2){
        echo "<td colspan='2' align='center'>
    <div id='boton1'>
    <button class='btn btn-primary' data-toggle='modal' id='add_ls' type='submit' data-whatever='$Id_levantamiento' data-target='#add_l_$Id_levantamiento'>
    Agregar 2 <i class='fa fa-plus' aria-hidden='true'></i>
    </button>
    </div>


    <div class='modal fade bd-example-modal-sm' id='add_l_$Id_levantamiento' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm'>
            <div class='modal-content'>
                
                <div class='modal-header'>
                    <h4>Ingrese datos de listado <i class='fa fa-fire' aria-hidden='true'></i> </h4>
                </div>
                <div class='modal-body'>
                <form action='' method='post'>
                    <div class=''>
                        <div class='col-sm-4' style='display: none;'>
                            <label>ID listado</label>
                            <input type='text' name='lis' id='lis' value='$Id_levantamiento' readonly>
                        </div>
                        <div class='form-group''>
                            <label>Número de listado</label>
                            <input class='form-control' type='number' min='1' name='lis1' id='listado_c' autocomplete='off' required>

                        </div>
                        <div class='form-group''>
                            <button class='btn btn-primary form-control' name='enviar_lis' id='add_ls'>
                                Agregar <i class='fa fa-plus' aria-hidden='true'></i>
                            </button>
                        </div>
                    </div>
                
                <span>No. Folio $foliolev</span>                    
                </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>
                    <button type='submit' class='btn btn-primary'>Siguiente</button>   
                    </form>               
                </div>

                
            </div>
        </div>
    </div>

    </td>";
    }elseif($col_listado==3){
        echo "<td colspan='2' align='center'>
    <div id='boton1'>
    <button class='btn btn-primary' data-toggle='modal' id='add_ls' type='submit' data-whatever='$Id_levantamiento' data-target='#add_l_$Id_levantamiento'>
    Agregar 3 <i class='fa fa-plus' aria-hidden='true'></i>
    </button>
    </div>


    <div class='modal fade bd-example-modal-sm' id='add_l_$Id_levantamiento' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm'>
            <div class='modal-content'>
                
                <div class='modal-header'>
                    <h4>Ingrese datos de listado <i class='fa fa-fire' aria-hidden='true'></i> </h4>
                </div>
                <div class='modal-body'>
                <form action='' method='post'>
                    <div class=''>
                        <div class='col-sm-4' style='display: none;'>
                            <label>ID listado</label>
                            <input type='text' name='lis' id='lis' value='$Id_levantamiento' readonly>
                        </div>
                        <div class='form-group''>
                            <label>Número de listado</label>
                            <input class='form-control' type='number' min='1' name='lis1' id='listado_c' autocomplete='off' required>

                        </div>
                        <div class='form-group''>
                            <button class='btn btn-primary form-control' name='enviar_lis' id='add_ls'>
                                Agregar <i class='fa fa-plus' aria-hidden='true'></i>
                            </button>
                        </div>
                    </div>
                
                <span>No. Folio $foliolev</span>                    
                </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>
                    <button type='submit' class='btn btn-primary'>Siguiente</button>   
                    </form>               
                </div>

                
            </div>
        </div>
    </div>

    </td>";
    }else{
        echo "<td><center><button type='button' class='btn btn-default'>--</center></td>";
        echo "<td><center><button type='button' class='btn btn-default'>--</center></td>";
    }

    /*echo "
    <td colspan='2' align='center'>
    <div id='boton1'>
    <button class='btn btn-primary' data-toggle='modal' id='add_ls' type='submit' data-whatever='$Id_levantamiento' data-target='#add_l_$Id_levantamiento'>
    Agregar <i class='fa fa-plus' aria-hidden='true'></i>
    </button>
    </div>


    <div class='modal fade bd-example-modal-sm' id='add_l_$Id_levantamiento' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-sm'>
            <div class='modal-content'>
                
                <div class='modal-header'>
                    <h4>Ingrese datos de listado <i class='fa fa-fire' aria-hidden='true'></i> </h4>
                </div>
                <div class='modal-body'>
                <form action='' method='post'>
                    <div class=''>
                        <div class='col-sm-4' style='display: none;'>
                            <label>ID listado</label>
                            <input type='text' name='lis' id='lis' value='$Id_levantamiento' readonly>
                        </div>
                        <div class='form-group''>
                            <label>Número de listado</label>
                            <input class='form-control' type='number' min='1' name='lis1' id='listado_c' autocomplete='off' required>

                        </div>
                        <div class='form-group''>
                            <button class='btn btn-primary form-control' name='enviar_lis' id='add_ls'>
                                Agregar <i class='fa fa-plus' aria-hidden='true'></i>
                            </button>
                        </div>
                    </div>
                
                <span>No. Folio $foliolev</span>                    
                </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>
                    <button type='submit' class='btn btn-primary'>Siguiente</button>   
                    </form>               
                </div>

                

                
            </div>
        </div>
    </div>



    </td>



    ";*/

    //-----------------------------------------------------------------------------------------------------------
    // BUSCAMOS LOS DATOS DE COTIZACION
    //-----------------------------------------------------------------------------------------------------------
    echo "
    <td colspan='4'><center><button type='button' class='btn btn-danger'>Cotizaciones</button></center></td>



    ";

    //-----------------------------------------------------------------------------------------------------------
    // BUSCAMOS LOS DATOS DE PEDIDOS
    //-----------------------------------------------------------------------------------------------------------
    echo "
    <td colspan='2'><center><button type='button' class='btn btn-danger'>Pedidos</button></center></td>



    ";

    //-----------------------------------------------------------------------------------------------------------
    // BUSCAMOS LOS DATOS DE PROVEEDOR
    //-----------------------------------------------------------------------------------------------------------
    echo "
    <td colspan='7'><center><button type='button' class='btn btn-danger'>Proveedores</button></center></td>



    ";

    //-----------------------------------------------------------------------------------------------------------
    // BUSCAMOS LOS DATOS DE ORDEN DE TRABAJO
    //-----------------------------------------------------------------------------------------------------------
    echo "
    <td colspan='4'><center><button type='button' class='btn btn-danger'>Orden de trabajo</button></center></td>



    ";

    //-----------------------------------------------------------------------------------------------------------
    // BUSCAMOS LOS DATOS DE FACTURA
    //-----------------------------------------------------------------------------------------------------------
    echo "
    <td colspan='2'><center><button type='button' class='btn btn-danger'>Factura</button></center></td>



    ";

    $buscalistado="SELECT * FROM levantamientos where tipolevantamiento =1";
    $eje_buscalistado=mysqli_query($conexionbdwm,$buscalistado);

    $resultado = mysqli_num_rows($eje_buscalistado);
    if ($resultado == 0) {
        //echo "entro al if";
        mysqli_close($conexionbdwm);
    }
    else {
        //echo "entro al else";
    }
                                                        /*while ($rowlevantamiento=mysqli_fetch_array($eje_buscalevantamiento)) {



                                                        }*/



                                                        echo"



                                                        </tr>

                                                        ";

    }//while de levantamiento
    ?>