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
    // BUSCAMOS LOS DATOS DEL LISTADO
    echo "
    <td colspan='2'><center><button type='button' class='btn btn-danger'>Listados</button></center></td>



    ";
    echo "
    <td colspan='4'><center><button type='button' class='btn btn-danger'>Cotizaciones</button></center></td>



    ";
    echo "
    <td colspan='2'><center><button type='button' class='btn btn-danger'>Pedidos</button></center></td>



    ";
    echo "
    <td colspan='7'><center><button type='button' class='btn btn-danger'>Proveedores</button></center></td>



    ";
    echo "
    <td colspan='4'><center><button type='button' class='btn btn-danger'>Orden de trabajo</button></center></td>



    ";
    echo "
    <td colspan='2'><center><button type='button' class='btn btn-danger'>Factura</button></center></td>



    ";

    $buscalistado="SELECT * FROM levantamientos where tipolevantamiento =1";
    $eje_buscalistado=mysqli_query($conexionbdwm,$buscalistado);

    $resultado = mysqli_num_rows($eje_buscalistado);
    if ($resultado == 0) {
        echo "entro al if";
        mysqli_close($conexionbdwm);
    }
    else {
        echo "entro al else";
    }
                                                        /*while ($rowlevantamiento=mysqli_fetch_array($eje_buscalevantamiento)) {



                                                        }*/



    echo"

    
    
    </tr>

    ";

    }//while de levantamiento
    ?>