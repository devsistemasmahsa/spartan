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
                         <div class="jumbotron">
                             <div class="row" id="general">
        <div class="col-sm-12">
            <div class="login">
                <?php
                    if(isset($_POST['tipo'])){
                        $tipo=$_POST['tipo'];
                    }
                    if(isset($tipo) and $tipo=="E"){
                        $ttipo="Eléctrico";
                    }else if(isset($tipo) and $tipo=="G"){
                        $ttipo="Gasolina";
                    }
                    else{
                        $ttipo="";
                        $tipo="";
                    }
                ?>

                <form name='add' method="post">
                    <div class="rTable">

                        <div class="rTableRow">
                            <div class="rTableHead">
                                <h3>Consulta de mano de obra</h3>
                            </div> <!--Cierre de rTableHead -->
                        </div><!-- Cierre de rTableRow-->


                        <div class="rTableRow">
                            <div class="rTableCell">
                            </br>

                        </div> <!--Cierre de rTableCell -->
                    </div><!-- Cierre de rTableRow-->

                    <div class="row">

                        <div class="col-sm-3"><b>Tipo de montacargas </b></div>

                        <div class="col-sm-3"><b>Sistema </b></div>

                        <div class="col-sm-3"><b>Localización </b> </div>

                        <div class="col-sm-3"><b>Actividad </b></div>
                    </div><!--Cierre de Row -->

                    <div class="row">
                        <div class="col-sm-3">
                            <select  onchange="this.form.submit()" class="chosen-select" data-placeholder="Selecciona el tipo" name="tipo" id="tipo">
                                <option value="<?php echo  $tipo;  ?>"><?php echo $ttipo ?></option>
                                <option value="E">Eléctrico</option>
                                <option value="G">Gasolina </option>
                            </select>
                        </div>
                        <?php
                            if(isset($_POST['sistema'])){
                                $sistemaa=$_POST['sistema'];
                                switch($sistemaa){

                                    case 1:
                                    $sistema="Aditamentos";
                                    break;
                                    case 2:
                                    $sistema="Cableado";
                                    break;
                                    case 3:
                                    $sistema="Chasis";
                                    break;
                                    case 4:
                                    $sistema="Dirección";
                                    break;
                                    case 5:
                                    $sistema="Eléctrico";
                                    break;
                                    case 6:
                                    $sistema="Hidraulico";
                                    break;
                                    case 7:
                                    $sistema="Otros";
                                    break;
                                    case 8:
                                    $sistema="Panel de contactores";
                                    break;
                                    case 9:
                                    $sistema="Torre mastil";
                                    break;
                                    case 10:
                                    $sistema="Transmision diferencial";
                                    break;
                                    case 11:
                                    $sistema="Frenos y llantas";
                                    break;


                                    case 12:
                                    $sistema="Aditamentos";
                                    break;
                                    case 13:
                                    $sistema="Chasis";
                                    break;
                                    case 14:
                                    $sistema="Combustible";
                                    break;
                                    case 15:
                                    $sistema="Dirección";
                                    break;
                                    case 16:
                                    $sistema="Eléctrico";
                                    break;
                                    case 17:
                                    $sistema="Hidraulico";
                                    break;
                                    case 18:
                                    $sistema="Otros";
                                    break;
                                    case 19:
                                    $sistema="Motor";
                                    break;
                                    case 20:
                                    $sistema="Torre mastil";
                                    break;
                                    case 21:
                                    $sistema="Transmision diferencial";
                                    break;
                                    case 22:
                                    $sistema="Frenos y llantas";
                                    break;
                                }
                            }
                            else{
                                $sistemaa="";
                                $sistema="";
                            }
                        ?>

                        <div class="col-sm-3">
                            <select onchange="this.form.submit()" class="chosen-select" data-placeholder="Selecciona un sistema" name="sistema" id="sistema">
                                <?php
                                    if($tipo=="E"){
                                        echo"  
                                            <option value='$sistemaa'>$sistema </option>
                                            <option value='1'>Aditamentos </option>
                                            <option value='2'>Cableado </option>
                                            <option value='3'>Chasis </option>
                                            <option value='4'>Dirección </option>
                                            <option value='5'>Eléctrico </option>
                                            <option value='6'>Hidraulico </option>
                                            <option value='7'>Otros </option>
                                            <option value='8'>Panel de contactores </option>
                                            <option value='9'>Torre mastil </option>
                                            <option value='10'>Transmision diferencial </option>
                                            <option value='11'>Frenos y llantas </option>
                                        ";
                                    }
                                    else if($tipo=="G"){
                                        echo"
                                            <option value='$sistemaa'>$sistema </option>
                                            <option value='12'>Aditamentos </option>
                                            <option value='13'>Chasis </option>
                                            <option value='14'>Combustible </option>
                                            <option value='15'>Dirección </option>
                                            <option value='16'>Eléctrico </option>
                                            <option value='17'>Hidraulico </option>
                                            <option value='18'>Otros </option>
                                            <option value='19'>Motor</option>
                                            <option value='20'>Torre mastil </option>
                                            <option value='21'>Transmision diferencial </option>
                                            <option value='22'>Frenos y llantas </option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>

                        <?php
                            if(isset($_POST['local'])){
                                $local=$_POST['local'];
                                $rest = substr($local, -2); 
                                $rest2 = substr($local, 0, -2);
                            }else{
                                $local="";
                                $rest="";
                                $rest2="";
                            }
                        ?>
                        <div class="col-sm-3">
                            <select class="chosen-select" data-placeholder="Selecciona la localización" onchange="this.form.submit()" name="local" id="local">
                                <option value="<?php echo $local; ?>"> <?php  echo "$rest2"; ?> </option>
                                <?php
                                    switch ($sistemaa) {

                                        case 1:
                                            $sistema="Aditamentos";
                                            echo"     
                                                <option value='ALARMA01'>ALARMA</option>
                                                <option value='EXTRACTOR02'>EXTRACTOR</option>
                                                <option value='FLECHA03'>FLECHA</option>
                                                <option value='HOROMETRO04'>HOROMETRO</option>
                                                <option value='HORQUILLA DE RUEDAS05'>HORQUILLA DE RUEDAS</option>
                                                <option value='JALÓN06'>JALÓN</option>
                                                <option value='PALLET JACK07'>PALLET JACK</option>
                                                <option value='PANTÓGRAFO08'>PANTÓGRAFO</option>
                                                <option value='PLACA DE CONVERTIDOR09'>PLACA DE CONVERTIDOR</option>
                                                <option value='PLATAFORMA010'>PLATAFORMA</option>
                                                <option value='POLEA11'>POLEA </option>
                                                <option value='POLEA DE TORRE12'>POLEA DE TORRE</option>
                                                <option value='REPUESTO DE PULMÓN DE COMPRESOR13'>REPUESTO DE PULMÓN DE COMPRESOR </option>
                                                <option value='SEGURIDAD14'>SEGURIDAD</option>
                                                <option value='TABLERO15'>TABLERO </option>
                                                <option value='TANQUE DE GAS16'>TANQUE DE GAS</option>
                                                <option value='TAPA Y BALERO17'>TAPA Y BALERO </option>
                                                <option value='TIRANTES, BUJES Y RUEDAS18'>TIRANTES, BUJES Y RUEDAS</option>
                                                <option value='TOPES DEL ADITAMENTO19'>TOPES DEL ADITAMENTO</option>
                                                <option value='TORRETA20'>TORRETA</option>
                                                <option value='TREN DE CARGA21'>TREN DE CARGA </option>
                                                <option value='TUBO DE TORSIÓN22'>TUBO DE TORSIÓN </option>
                                                <option value='VÁLVULA DE TRANS23'>VÁLVULA DE TRANS </option>
                                                <option value='VÁLVULA INVERTIDORA24'>VÁLVULA INVERTIDORA</option>
                                                <option value='VOLANTA25'>VOLANTA </option>
                                                <option value='CRUCETA26'>CRUCETA</option>
                                            ";
                                        break;

                                        case 2:
                                            $sistema="Cableado";
                                            echo"
                                            <option value='CABLEADO DE ALTA POTENCIA01'>CABLEADO DE ALTA POTENCIA</option>
                                            <option value='CABLEADO DE BAJA POTENCIA02'>CABLEADO DE BAJA POTENCIA </option>
                                            ";
                                        break;

                                        case 3:
                                            $sistema="Chasis";

                                            echo"  <option value='ASIENTO01'>ASIENTO</option>
                                            <option value='ASIENTOS DE CABEZA02'>ASIENTOS DE CABEZA </option>
                                            <option value='CABINA03'>CABINA</option>
                                            <option value='CHASIS04'>CHASIS</option>
                                            <option value='CHASIS DE PATÍN05'>CHASIS DE PATÍN</option>
                                            <option value='CIELO06'>CIELO</option>
                                            <option value='COFRE DE MONTACARGAS07'>COFRE DE MONTACARGAS</option>
                                            <option value='ESPEJOS08'>ESPEJOS</option> 
                                            <option value='EXTINTOR09'>EXTINTOR</option>
                                            <option value='PUERTA010'>PUERTA</option>

                                            <option value='SOPORTES DE CABINA11'>SOPORTES DE CABINA </option>

                                            ";
                                        break;

                                        case 4:
                                            $sistema="Dirección";
                                            echo"      
                                            option value='ARMADURA DE MOTOR DE DIRECCIÓN01'>ARMADURA DE MOTOR DE DIRECCIÓN</option>
                                            <option value='BARRA DE DIRECCIÓN02'>BARRA DE DIRECCIÓN</option>
                                            <option value='BARRA DE DIRECCIÓN HIDRÁULICA03'>BARRA DE DIRECCIÓN HIDRÁULICA </option>
                                            <option value='BUJES DE BARRA DE DIRECCIÓN04'>BUJES DE BARRA DE DIRECCIÓN </option>
                                            <option value='CADENA DE DIRECCIÓN05'>CADENA DE DIRECCIÓN </option>
                                            <option value='CAJA DE DIRECCIÓN06'>CAJA DE DIRECCIÓN</option>
                                            <option value='COLUMNA07'>COLUMNA</option>
                                            <option value='CONTROL DE DIRECCIÓN08'>CONTROL DE DIRECCIÓN</option>
                                            <option value='COPLE DIRECCIÓN09'>COPLE DIRECCIÓN</option>
                                            <option value='CUARTOS TRASEROS010'>CUARTOS TRASEROS </option>
                                            <option value='DIFERENCIAL 11'>DIFERENCIAL </option>
                                            <option value='DIRECCIÓN12'>DIRECCIÓN</option>
                                            <option value='EJE DE DIRECCIÓN13'>EJE DE DIRECCIÓN </option>
                                            <option value='EJE RUEDA SIMPLE14'>EJE RUEDA SIMPLE</option>
                                            <option value='EJE TRASERO15'>EJE TRASERO </option>
                                            <option value='EJES MOTRICE16'>EJES MOTRICES</option>
                                            <option value='ENCENDIDO17'>ENCENDIDO </option>
                                            <option value='LLAVE18'>LLAVE</option>
                                            <option value='MANGUERA DE DIRECCIÓN HIDRÁULICA19'>MANGUERA DE DIRECCIÓN HIDRÁULICA</option>
                                            <option value='MANGUERAS DE TRANSMISIÓN20'>MANGUERAS DE TRANSMISIÓN</option>
                                            <option value='MARCADOR21'>MARCADOR </option>
                                            <option value='MOTOR DE DIRECCIÓN22'>MOTOR DE DIRECCIÓN </option>
                                            <option value='PEDAL DE AVANCE Y RETROCESO23'>PEDAL DE AVANCE Y RETROCESO</option>
                                            <option value='PROGRAMACIÓN DE PANEL24'>PROGRAMACIÓN DE PANEL</option>
                                            <option value='RELEVADORES25'>RELEVADORES</option>
                                            <option value='ROSCA A BRAZO DE DIRECCIÓN26'>ROSCA A BRAZO DE DIRECCIÓN</option>
                                            <option value='BUJE DE DIRECCIÓN27'>BUJE DE DIRECCIÓN </option>
                                            <option value='ORBITROL DE DIRECCIÓN28'>ORBITROL DE DIRECCIÓN</option>
                                            <option value='PALANCA DE DIRECCIÓN29'>PALANCA DE DIRECCIÓN </option>
                                            <option value='ESPIGA DE DIRECCIÓN30'>ESPIGA DE DIRECCIÓN</option>
                                            <option value='FLECHA DE DIRECCION31'>FLECHA DE DIRECCIÓN </option>
                                            <option value='MEDIA LUNA DE DIRECCIÓN32'>MEDIA LUNA DE DIRECCIÓN </option>
                                            <option value='PASADORES DE DIRECCIÓN33'>PASADORES DE DIRECCIÓN</option>
                                            <option value='POLEAS DE DIRECCIÓN34'>POLEAS DE DIRECCIÓN</option>
                                            <option value='ROSCA DE EJE DIRECCIONAL35'>ROSCA DE EJE DIRECCIONAL</option>
                                            <option value='SOPORTE DE DIRECCIÓN36'>SOPORTE DE DIRECCIÓN </option>
                                            <option value='TERMINALES DE DIRECCIÓN37'>TERMINALES DE DIRECCIÓN  </option>
                                            <option value='TORRE DE DIRECCIÓN38'>TORRE DE DIRECCIÓN</option>
                                            <option value='VÁSTAGO DE LA DIRECCIÓN39'>VÁSTAGO DE LA DIRECCIÓN  </option>
                                            <option value='RUEDA DE DIRECCIÓN40'>RUEDA DE DIRECCIÓN</option>
                                            <option value='RETROCESO41'>RETROCESO </option>
                                            <option value='AVANCE 42'>AVANCE  </option>
                                            <option value='SELLOS DE TERMINAL43'>SELLOS DE TERMINAL </option>
                                            ";
                                        break;

                                        case 5:
                                            $sistema="Eléctrico";

                                            echo"  <option value='ALAMBRADO01'>ALAMBRADO</option>
                                            <option value='ALTERNADOR02'>ALTERNADOR</option>
                                            <option value='AMPERÍMETRO A CARGADOR03'>AMPERÍMETRO A CARGADOR</option>
                                            <option value='ARNÉS04'>ARNÉS </option>
                                            <option value='ARRANQUE05'>ARRANQUE </option>
                                            <option value='BULBO CORTADOR DE CORRIENTE06'>BULBO CORTADOR DE CORRIENTE</option>
                                            <option value='CADENAS DE CONTACTORES07'>CADENAS DE CONTACTORES</option>
                                            <option value='CIRCUITO08'>CIRCUITO</option>
                                            <option value='CIRCUITO DE AVANCE09'>CIRCUITO DE AVANCE</option>
                                            <option value='CLAXON010'>CLAXON </option>
                                            <option value='CONECTOR DE BATERÍA11'>CONECTOR DE BATERÍA </option>
                                            <option value='CONTACTOR ELÉCTRICO12'>CONTACTOR ELÉCTRICO </option>
                                            <option value='CORTO SISTEMA ELÉCTRICO13'>CORTO SISTEMA ELÉCTRICO </option>
                                            <option value='DIODO14'>DIODO</option>
                                            <option value='ELÉCTRICA15'>ELÉCTRICA  </option>
                                            <option value='FALSO CONTACTO16'>FALSO CONTACTO</option>
                                            <option value='FOCO17'>FOCO</option>
                                            <option value='FUSIBLE18'>FUSIBLE</option>
                                            <option value='INSTALACIÓN ELÉCTRICA19'>INSTALACIÓN ELÉCTRICA</option>
                                            <option value='LÁMPARAS FRONTALES20'>LÁMPARAS FRONTALES</option>
                                            <option value='LUCES21'>LUCES </option>
                                            <option value='MOTOR22'>MOTOR </option>
                                            <option value='MOTOR ELÉCTRICO23'>MOTOR ELÉCTRICO</option>
                                            <option value='POSTE DE BATERÍA24'>POSTE DE BATERÍA</option>
                                            <option value='POTENCIÓMETRO25'>POTENCIÓMETRO</option>
                                            <option value='REGULADOR26'>REGULADOR</option>
                                            <option value='RELEVADORES27'>RELEVADORES </option>
                                            <option value='RESISTENCIA28'>RESISTENCIA</option>
                                            <option value='SISTEMA ELÉCTRICO29'>SISTEMA ELÉCTRICO </option>
                                            <option value='SWITCH30'>SWITCH</option>
                                            <option value='TARJETA DE CONTROL31'>TARJETA DE CONTROL </option>
                                            <option value='TARJETA ELECTRÓNICA32'>TARJETA ELECTRÓNICA</option>
                                            <option value='TERMINALES DE BATERÍA33'>TERMINALES DE BATERÍA</option>
                                            <option value='TIMER34'>TIMER</option>
                                            <option value='TRANSFORMADOR35'>TRANSFORMADOR</option>
                                            <option value='SWITCH DE CLAXON36'>SWITCH DE CLAXON </option>
                                            <option value='VÁLVULA SOLENOIDE37'>VÁLVULA SOLENOIDE  </option>
                                            <option value='VOLTAJE38'>VOLTAJE </option>
                                            <option value='VOLTAJE BATERÍA39'>VOLTAJE BATERÍA  </option>
                                            <option value='VOLTÍMETRO40'>VOLTÍMETRO</option>
                                            <option value='BATERÍA41'>BATERÍA </option>
                                            <option value='SOLENOIDE42'>SOLENOIDE </option>
                                            <option value='GENERADOR43'>GENERADOR</option>
                                            <option value='MODULO DE CONTROL44'>MODULO DE CONTROL</option>
                                            <option value='ENCENDIDO45'>ENCENDIDO</option>
                                            <option value='SENSOR46'>SENSOR  </option>
                                            <option value='CONDENSADOR47'>CONDENSADOR  </option>
                                            <option value='MODULOS DE TRACCIÓN48'>MODULOS DE TRACCIÓN</option>
                                            <option value='CONTACTORES DE AVANCE49'>CONTACTORES DE AVANCE</option>
                                            <option value='CONTACTORES DE REVERSA50'>CONTACTORES DE REVERSA</option>
                                            <option value='CONTACTORES DE BOMBA HIDRAULICA51'>CONTACTORES DE BOMBA HIDRAULICA</option>
                                            <option value='SWITCH DE PALANCA52'>SWITCH DE PALANCA </option>
                                            <option value='BANDA DE ALTERNADOR53'>BANDA DE ALTERNADOR</option>
                                            <option value='BROCHAS DE MOTOR DE TRACCION54'>BROCHAS DE MOTOR DE TRACCION</option>
                                            <option value='CARGADOR DE BATERÍAS55'>CARGADOR DE BATERÍAS </option>

                                            ";
                                        break;

                                        case 6:
                                            $sistema="Hidraulico";


                                            echo"  <option value='ACEITE HIDRÁULICO01'>ACEITE HIDRÁULICO</option>
                                            <option value='ARMADURA DEL MOTOR DEL HIDRÁULICO02'>ARMADURA DEL MOTOR DEL HIDRÁULICO</option>
                                            <option value='BOMBA HIDRÁULICA03'>BOMBA HIDRÁULICA </option>
                                            <option value='CAJA DE VÁLVULAS04'>CAJA DE VÁLVULAS </option>
                                            <option value='CILINDRO DE DIRECCIÓN05'>CILINDRO DE DIRECCIÓN</option>
                                            <option value='CILINDRO DE INCLINACIÓN06'>CILINDRO DE INCLINACIÓN</option>
                                            <option value='COIL07'>COIL</option>
                                            <option value='EJE DE PATÍN HIDRÁULICO08'>EJE DE PATÍN HIDRÁULICO</option>
                                            <option value='FILTRO HIDRÁULICO09'>FILTRO HIDRÁULICO</option>
                                            <option value='FILTRO Y ACEITE010'>FILTRO Y ACEITE </option>
                                            <option value='FLECHA DE BOMBA11'>FLECHA DE BOMBA </option>
                                            <option value='FUGA DE ACEITE HIDRÁULICO12'>FUGA DE ACEITE HIDRÁULICO</option>
                                            <option value='LÍNEAS HIDRÁULICAS13'>LÍNEAS HIDRÁULICAS </option>
                                            <option value='MANGUERA RETORNO HIDRÁULICO14'>MANGUERA RETORNO HIDRÁULICO </option>
                                            <option value='MANGUERA SISTEMA HIDRÁULICO15'>MANGUERA SISTEMA HIDRÁULICO </option>
                                            <option value='MANGUERAS DE INCLINACIÓN16'>MANGUERAS DE INCLINACIÓN</option>
                                            <option value='MANGUERAS DE SUCCIÓN17'>MANGUERAS DE SUCCIÓN  </option>
                                            <option value='MANGUERAS SISTEMA HIDRÁULICO18'>MANGUERAS SISTEMA HIDRÁULICO</option>
                                            <option value='MOTOR DEL HIDRÁULICO19'>MOTOR DEL HIDRÁULICO</option>
                                            <option value='MOTOR HIDRÁULICO20'>MOTOR HIDRÁULICO</option>
                                            <option value='MOTOR HIDRÁULICO DE DIRECCIÓN21'>MOTOR HIDRÁULICO DE DIRECCIÓN  </option>
                                            <option value='ORBITROL22'>ORBITROL </option>
                                            <option value='RAMPA HIDRÁULICA23'>RAMPA HIDRÁULICA</option>
                                            <option value='SISTEMA HIDRÁULICO24'>SISTEMA HIDRÁULICO</option>
                                            <option value='TAPÓN DE LLENADO DEL HIDRÁULICO25'>TAPÓN DE LLENADO DEL HIDRÁULICO</option>
                                            <option value='TAPONES A LÍNEAS HIDRÁULICAS26'>TAPONES A LÍNEAS HIDRÁULICAS </option>
                                            <option value='UNIDAD HIDRÁULICA27'>UNIDAD HIDRÁULICA </option>
                                            <option value='VÁLVULA ALIVIO28'>VÁLVULA ALIVIO</option>
                                            <option value='VÁLVULA DE CONTROL29'>VÁLVULA DE CONTROL </option>
                                            <option value='VÁSTAGO30'>VÁSTAGO</option>
                                            <option value='ENGRANE DE BOMBA DEL HIDRAULICO31'>ENGRANE DE BOMBA DEL HIDRAULICO </option>
                                            <option value='CADENA32'>CADENA </option>
                                            <option value='CONTACTOR DE BOMBA HIDRAULICA33'>CONTACTOR DE BOMBA HIDRAULICA</option>


                                            ";
                                        break;

                                        case 7:
                                            $sistema="Otros";

                                            echo"  <option value='ADAPTADOR PARA CARGADOR01'>ADAPTADOR PARA CARGADOR</option>
                                            <option value='AGUA A BATERÍA02'>AGUA A BATERÍA</option>
                                            <option value='BUJES03'>BUJES</option>
                                            <option value='CABLE04'>CABLE </option>
                                            <option value='CARGADOR DE BATERÍAS05'>CARGADOR DE BATERÍAS</option>
                                            <option value='CARRETE06'>CARRETE</option>
                                            <option value='AISLANT07'>AISLANTE</option>
                                            <option value='CELDA DE BATERÍA08'>CELDA DE BATERÍA</option>
                                            <option value='CILINDRO09'>CILINDRO</option>
                                            <option value='CINCHOS010'>CINCHOS </option>
                                            <option value='CLAMP11'>CLAMP </option>
                                            <option value='COMPARTIMIENTO DE BATERÍA12'>COMPARTIMIENTO DE BATERÍA </option>
                                            <option value='CONTRAPESO13'>CONTRAPESO </option>
                                            <option value='BALERO14'>BALERO</option>
                                            <option value='CUBIERTA DE PALANCA15'>CUBIERTA DE PALANCA  </option>
                                            <option value='EJE DE TIRANTE DE ELEVACIÓN16'>EJE DE TIRANTE DE ELEVACIÓN </option>
                                            <option value='EMPAQUE17'>EMPAQUE</option>
                                            <option value='PUNTERÍAS18'>PUNTERÍAS</option>
                                            <option value='EMPAQUE TANQUE DE GAS19'>EMPAQUE TANQUE DE GAS</option>
                                            <option value='EMPAQUES DE UNIDAD20'>EMPAQUES DE UNIDAD</option>
                                            <option value='EQUIPO21'>EQUIPO </option>
                                            <option value='FILTRO PURIFICADOR22'>FILTRO PURIFICADOR </option>
                                            <option value='FUGA23'>FUGA </option>
                                            <option value='GENERAL EJE LOCO24'>GENERAL EJE LOCO </option>
                                            <option value='MANGUERA25'>MANGUERA</option>
                                            <option value='MANGUERA DE PRESIÓN26'>MANGUERA DE PRESIÓN</option>
                                            <option value='MANGUERA DEL DESPLAZADOR LATERAL27'>MANGUERA DEL DESPLAZADOR LATERAL </option>
                                            <option value='MANGUERAS DE ADITAMENTO28'>MANGUERAS DE ADITAMENTO</option>
                                            <option value='MANGUERAS DE DESPLAZADOR29'>MANGUERAS DE DESPLAZADOR </option>
                                            <option value='MARCADOR DE TEMPERATURA30'>MARCADOR DE TEMPERATURA</option>
                                            <option value='MECANISMO DE LEVANTE A PATÍN31'>MECANISMO DE LEVANTE A PATÍN </option>
                                            <option value='MOTOR DE RAMPA32'>MOTOR DE RAMPA</option>
                                            <option value='MOTOR DE TRACCIÓN33'>MOTOR DE TRACCIÓN</option>
                                            <option value='NIVELES GENERAL34'>NIVELES GENERAL</option>
                                            <option value='PALANCA DE AVANCE35'>PALANCA DE AVANCE</option>
                                            <option value='PALANCA DE CONTROL36'>PALANCA DE CONTROL </option>
                                            <option value='PALANCA DE CONVERTIDOR37'>PALANCA DE CONVERTIDOR</option>
                                            <option value='PALANCA DE MANDO38'>PALANCA DE MANDO </option>
                                            <option value='PALANCA DE PATÍN39'>PALANCA DE PATÍN  </option>
                                            <option value='PALANCA INMOVILIZADORA40'>PALANCA INMOVILIZADORA</option>
                                            <option value='PASADOR DE CLAMP41'>PASADOR DE CLAMP  </option>
                                            <option value='PASADOR PARA PATÍN HIDRÁULICO42'>PASADOR PARA PATÍN HIDRÁULICO </option>
                                            <option value='PATÍN ELÉCTRICO43'>PATÍN ELÉCTRICO</option>
                                            <option value='PATÍN HIDRÁULICO44'>PATÍN HIDRÁULICO</option>
                                            <option value='PEDAL45'>PEDAL</option>
                                            <option value='PEDAL DE LIBERACIÓN46'>PEDAL DE LIBERACIÓN </option>
                                            <option value='PERILLA PALANCA47'>PERILLA PALANCA  </option>
                                            <option value='PIEZA48'>PIEZA</option>
                                            <option value='PLACA49'>PLACA</option>
                                            <option value='RESORTE50'>RESORTE </option>
                                            <option value='RESORTE DE PALANCA DE MANO51'>RESORTE DE PALANCA DE MANO</option>
                                            <option value='RETEN52'>RETEN </option>
                                            <option value='RUEDA DE PATÍN53'>RUEDA DE PATÍN</option>
                                            <option value='RUEDA LOCA54'>RUEDA LOCA</option>
                                            <option value='SISTEMA DE CARGA55'>SISTEMA DE CARGA </option>
                                            <option value='BUJE DE BASE DE PALANCA56'>BUJE DE BASE DE PALANCA </option>
                                            <option value='BUJES57'>BUJES</option>
                                            <option value='FECHA CON BALERO58'>FECHA CON BALERO</option>
                                            <option value='NIPLE59'>NIPLE</option>
                                            <option value='PERNO60'>PERNO</option>
                                            <option value='PLACA PARA SOPORTE61'>PLACA PARA SOPORTE  </option>
                                            <option value='POSTIZO62'>POSTIZO  </option>
                                            <option value='ROSCA A BARRA63'>ROSCA A BARRA</option>
                                            <option value='ROSCA A TORNILLOS DE BASE64'>ROSCA A TORNILLOS DE BASE</option>
                                            <option value='TUERCA65'>TUERCA </option>
                                            <option value='TORNILLO66'>TORNILLO</option>
                                            <option value='TOMA DE EMPAQUES67'>TOMA DE EMPAQUES </option>

                                            ";
                                        break;

                                        case 8:
                                            $sistema="Panel de contactores";

                                            echo"
                                            <option value='PANEL DE CONTACTORES01'>PANEL DE CONTACTORES</option>
                                            <option value='SWITCHS02'>SWITCHS</option>
                                            <option value='MICROSWITCHS03'>MICROSWITCHS</option>
                                            ";
                                        break;

                                        case 9:
                                            $sistema="Torre mastil";


                                            echo" <option value='BASE DE DESPLAZADOR01'>BASE DE DESPLAZADOR</option>
                                            <option value='CADENA DE TORRE02'>CADENA DE TORRE </option>
                                            <option value='BALEROS DE DESPLAZADOR LATERAL03'>BALEROS DE DESPLAZADOR LATERAL</option>
                                            <option value='CALSAS DE DESPLAZADOR LATERAL04'>CALSAS DE DESPLAZADOR LATERAL </option>
                                            <option value='CANDADO DE CADENA05'>CANDADO DE CADENA </option>
                                            <option value='CANDADO DE PASADOR06'>CANDADO DE PASADOR  </option>
                                            <option value='CILINDRO DE DESPLAZAMIENTO LATERAL07'>CILINDRO DE DESPLAZAMIENTO LATERAL</option>
                                            <option value='CILINDRO DE LEVANTE08'>CILINDRO DE LEVANTE</option>
                                            <option value='COJINES DESPLAZADOR LATERAL09'>COJINES DESPLAZADOR LATERAL</option>
                                            <option value='COJINETES010'>COJINETES </option>
                                            <option value='CORREDERAS SADE SHIFT11'>CORREDERAS SADE SHIFT </option>
                                            <option value='DESPLAZADOR LATERAL12'>DESPLAZADOR LATERAL </option>
                                            <option value='HORQUILLA13'>HORQUILLA </option>
                                            <option value='LEVANTE14'>LEVANTE</option>
                                            <option value='MANGUERA DE LEVANTE15'>MANGUERA DE LEVANTE</option>
                                            <option value='MANGUERAS DE DESPLAZADOR LATERAL16'>MANGUERAS DE DESPLAZADOR LATERAL</option>
                                            <option value='PALANCA DE LEVANTE17'>PALANCA DE LEVANTE </option>
                                            <option value='PLACA PORTA MANGUERAS18'>PLACA PORTA MANGUERAS</option>
                                            <option value='PORTA HORQUILLAS19'>PORTA HORQUILLAS</option>
                                            <option value='PUNTAS DE CUCHILLAS20'>PUNTAS DE CUCHILLAS</option>
                                            <option value='RESPALDO DE CARGA21'>RESPALDO DE CARGA</option>

                                            <option value='TORRE22'>TORRE </option>
                                            <option value='TORRE DE LEVANTE23'>TORRE DE LEVANTE</option>
                                            <option value='PASADOR DE TORRE24'>PASADOR DE TORRE</option>
                                            <option value='SWITCH DE DESPLAZADOR LATERAL25'>SWITCH DE DESPLAZADOR LATERAL</option>
                                            <option value='BALEROS DE TORRE26'>BALEROS DE TORRE </option>


                                            ";
                                        break;

                                        case 10:
                                            $sistema="Transmision diferencial";

                                            echo" <option value='ACEITES DE TRANSMISIÓN01'>ACEITES DE TRANSMISIÓN</option>
                                            <option value='BOMBA DE TRANSMISIÓN02'>BOMBA DE TRANSMISIÓN </option>
                                            <option value='CLUTCH03'>CLUTCH</option>
                                            <option value='CONVERTIDOR04'>CONVERTIDOR </option>
                                            <option value='DISCO DE CLUTCH05'>DISCO DE CLUTCH </option>
                                            <option value='ENFRIADOR DE ACEITE06'>ENFRIADOR DE ACEITE   </option>
                                            <option value='MANGUERAS DE ENFRIAMIENTO07'>MANGUERAS DE ENFRIAMIENTO</option>
                                            <option value='PALANCA DE AVANCE-RETROCESO08'>PALANCA DE AVANCE-RETROCESO</option>
                                            <option value='PALANCA DE CAMBIOS09'>PALANCA DE CAMBIOS</option>
                                            <option value='PLATO DE CLUTCH010'>PLATO DE CLUTCH </option>
                                            <option value='PLATO Y DISCO DE CLUTCH11'>PLATO Y DISCO DE CLUTCH </option>
                                            <option value='PRENSA DE CLUTCH12'>PRENSA DE CLUTCH </option>
                                            <option value='REVERSA13'>REVERSA </option>
                                            <option value='SISTEMA DE CLUTCH14'>SISTEMA DE CLUTCH</option>
                                            <option value='SISTEMA DE VELOCIDADES15'>SISTEMA DE VELOCIDADES</option>
                                            <option value='TRACCIÓN16'>TRACCIÓN</option>
                                            <option value='TRANSMISIÓN17'>TRANSMISIÓN </option>
                                            <option value='TRANSMISIÓN HIDRÁULICA18'>TRANSMISIÓN HIDRÁULICA</option>




                                            ";
                                        break;

                                        case 11:
                                            $sistema="Frenos y llantas";


                                            echo"  <option value='AJUSTADORES01'>AJUSTADORES</option>
                                            <option value='BALATAS02'>BALATAS</option>
                                            <option value='BIRLO03'>BIRLO</option>
                                            <option value='BIRLOS Y TUERCAS04'>BIRLOS Y TUERCAS </option>
                                            <option value='CHICOTE DE FRENO05'>CHICOTE DE FRENO</option>
                                            <option value='CHICOTES DE FRENO DE ESTACIONAMIENTO06'>CHICOTES DE FRENO DE ESTACIONAMIENTO  </option>
                                            <option value='CILINDRO MAESTRO07'>CILINDRO MAESTRO</option>
                                            <option value='CILINDRO NEUTRALIZADOR08'>CILINDRO NEUTRALIZADOR</option>
                                            <option value='FRENO DE ESTACIONAMIENTO09'>FRENO DE ESTACIONAMIENTO</option>
                                            <option value='FRENOS010'>FRENOS</option>
                                            <option value='FRENOS DISCOS11'>FRENOS DISCOS </option>
                                            <option value='FRENOS LÍNEAS12'>FRENOS LÍNEAS </option>
                                            <option value='FRENOS SWITCH13'>FRENOS SWITCH </option>
                                            <option value='LIGA14'>LIGA</option>
                                            <option value='LLANTA15'>LLANTA</option>
                                            <option value='LLANTA DE TRACCIÓN16'>LLANTA DE TRACCIÓN</option>
                                            <option value='LLANTA DELANTERAS17'>LLANTA DELANTERAS </option>
                                            <option value='LLANTA DIRECCIONALES18'>LLANTA DIRECCIONALES</option>
                                            <option value='PEDAL DE FRENO19'>PEDAL DE FRENO</option>
                                            <option value='LLANTAS TRACERAS20'>LLANTAS TRACERAS</option>
                                            <option value='RETEN DE EJE DE TRACCIÓN21'>RETEN DE EJE DE TRACCIÓN</option>
                                            <option value='RIN22'>RIN</option>
                                            <option value='RIN DE MONTACARGAS23'>RIN DE MONTACARGAS</option>
                                            <option value='RUEDAS24'>RUEDAS</option>
                                            <option value='RUEDAS DE PASILLO25'>RUEDAS DE PASILLO</option>
                                            <option value='TAMBORES26'>TAMBORES </option>



                                            ";
                                        break;

                                        case 12:
                                            $sistema="Aditamentos";
                                            echo"  <option value='ALARMA01'>ALARMA </option>
                                            <option value='EXTRACTOR02'>EXTRACTOR </option>
                                            <option value='FLECHA03'>FLECHA</option>
                                            <option value='HOROMETRO04'>HOROMETRO </option>
                                            <option value='HORQUILLAS DE RUEDA05'>HORQUILLAS DE RUEDA </option>
                                            <option value='JALON06'>JALON </option>
                                            <option value='PACKET JACK07'>PACKET JACK </option>
                                            <option value='PONTÓGRAFO08'>PONTÓGRAFO</option>
                                            <option value='PLACA DE CONVERTIDOR09'>PLACA DE CONVERTIDOR</option>
                                            <option value='PLATAFORMA010'>PLATAFORMA</option>
                                            <option value='POLEA11'>POLEA </option>
                                            <option value='POLEA DE TORRE12'>POLEA DE TORRE</option>
                                            <option value='REPUESTO DE PULMÓN DE COMPRESOR13'>REPUESTO DE PULMÓN DE COMPRESOR </option>
                                            <option value='SEGURIDAD14'>SEGURIDAD</option>
                                            <option value='TABLERO15'>TABLERO </option>
                                            <option value='TANQUE DE GAS16'>TANQUE DE GAS</option>
                                            <option value='TAPA Y BALERO17'>TAPA Y BALERO </option>
                                            <option value='TIRANTES, BUJES Y RUEDAS18'>TIRANTES, BUJES Y RUEDAS</option>
                                            <option value='TOPES DEL ADITAMENTO19'>TOPES DEL ADITAMENTO</option>
                                            <option value='TORRETA20'>TORRETA</option>
                                            <option value='TREN DE CARGA21'>TREN DE CARGA </option>
                                            <option value='TUBO DE TORSIÓN 22'>TUBO DE TORSIÓN </option>
                                            <option value='VÁLVULA DE TRANS23'>VÁLVULA DE TRANS </option>
                                            <option value='VÁLVULA INVERTIDORA24'>VÁLVULA INVERTIDORA</option>
                                            <option value='VOLANTA25'>VOLANTA </option>
                                            <option value='CRUCETA26'>CRUCETA</option>
                                            ";
                                        break;

                                        case 13:
                                            $sistema="Chasis";

                                            echo"
                                            <option value='ASIENTO01'>ASIENTO</option>
                                            <option value='ASIENTOS DE CABEZA02'>ASIENTOS DE CABEZA </option>
                                            <option value='CABINA03'>CABINA </option>
                                            <option value='CHASIS04'>CHASIS </option>
                                            <option value='CHASIS DE PATÍN05'>CHASIS DE PATÍN </option>
                                            <option value='CIELO06'>CIELO </option>
                                            <option value='COFRE DE MONTACARGAS07'>COFRE DE MONTACARGAS </option>
                                            <option value='ESPEJOS08'>ESPEJOS</option>
                                            <option value='EXTINTOR09'>EXTINTOR </option>
                                            <option value='PUERTA010'>PUERTA</option>
                                            <option value='SOPORTES DE CABINA11'>SOPORTES DE CABINA </option>";
                                        break;

                                        case 14:
                                            $sistema="Combustible";


                                            echo"  <option value='ACELERADOR01'>ACELERADOR </option>
                                            <option value='BOMBA DE GASOLINA02'>BOMBA DE GASOLINA </option>
                                            <option value='BOMBA DE INYECCIÓN03'>BOMBA DE INYECCIÓN</option>
                                            <option value='CABLE DEL ACELERADOR04'>CABLE DEL ACELERADOR </option>
                                            <option value='CHICOTE DE ACELERADOR05'>CHICOTE DE ACELERADOR </option>
                                            <option value='CONTROLADOR ACELERADOR06'>CONTROLADOR ACELERADOR </option>
                                            <option value='GAS07'>GAS</option>
                                            <option value='GASOLINA08'>GASOLINA</option>
                                            <option value='INYECTORES09'>INYECTORES</option>
                                            <option value='MEZCLADOR DE GAS010'>MEZCLADOR DE GAS</option>
                                            <option value='PEDAL DE ACELERADOR11'>PEDAL DE ACELERADOR</option>
                                            <option value='REPUESTO DE VAPORIZADOR12'>REPUESTO DE VAPORIZADOR </option>
                                            <option value='SISTEMA DE ACELERACIÓN13'>SISTEMA DE ACELERACIÓN </option>
                                            <option value='SISTEMA DE GAS14'>SISTEMA DE GAS</option>
                                            <option value='VÁLVULA GAS15'>VÁLVULA GAS </option>
                                            <option value='VALVULA NEUTRALIZADORA16'>VALVULA NEUTRALIZADORA</option>
                                            <option value='VÁLVULA VACIÓ17'>VÁLVULA VACIÓ </option>
                                            <option value='VAPORIZADOR18'>VAPORIZADOR</option>
                                            <option value='INYECCIÓN DIESEL19'>INYECCIÓN DIESEL</option>
                                            <option value='LÍNEA DE VACIÓ20'>LÍNEA DE VACIÓ</option>
                                            <option value='SISTEMA DIESEL21'>SISTEMA DIESEL </option>

                                            ";
                                        break;

                                        case 15:
                                            $sistema="Dirección";
                                            echo"  <option value='ARMADURA DE MOTOR DE DIRECCIÓN01'>ARMADURA DE MOTOR DE DIRECCIÓN</option>
                                            <option value='BARRA DE DIRECCIÓN02'>BARRA DE DIRECCIÓN</option>
                                            <option value='BARRA DE DIRECCIÓN HIDRÁULICA03'>BARRA DE DIRECCIÓN HIDRÁULICA </option>
                                            <option value='BUJES DE BARRA DE DIRECCIÓN04'>BUJES DE BARRA DE DIRECCIÓN </option>
                                            <option value='CADENA DE DIRECCIÓN05'>CADENA DE DIRECCIÓN </option>
                                            <option value='CAJA DE DIRECCIÓN06'>CAJA DE DIRECCIÓN</option>
                                            <option value='COLUMNA07'>COLUMNA</option>
                                            <option value='CONTROL DE DIRECCIÓN08'>CONTROL DE DIRECCIÓN</option>
                                            <option value='COPLE DIRECCIÓN09'>COPLE DIRECCIÓN</option>
                                            <option value='CUARTOS TRASEROS010'>CUARTOS TRASEROS </option>
                                            <option value='DIFERENCIAL11'>DIFERENCIAL </option>
                                            <option value='DIRECCIÓN12'>DIRECCIÓN</option>
                                            <option value='EJE DE DIRECCIÓN13'>EJE DE DIRECCIÓN </option>
                                            <option value='EJE RUEDA SIMPLE14'>EJE RUEDA SIMPLE</option>
                                            <option value='EJE TRASERO15'>EJE TRASERO </option>
                                            <option value='EJES MOTRICES16'>EJES MOTRICES</option>
                                            <option value='ENCENDIDO17'>ENCENDIDO </option>
                                            <option value='LLAVE18'>LLAVE</option>
                                            <option value='MANGUERA DE DIRECCIÓN HIDRÁULICA19'>MANGUERA DE DIRECCIÓN HIDRÁULICA</option>
                                            <option value='MANGUERAS DE TRANSMISIÓN20'>MANGUERAS DE TRANSMISIÓN</option>
                                            <option value='MARCADOR21'>MARCADOR </option>
                                            <option value='MOTOR DE DIRECCIÓN22'>MOTOR DE DIRECCIÓN </option>
                                            <option value='PEDAL DE AVANCE Y RETROCESO23'>PEDAL DE AVANCE Y RETROCESO</option>
                                            <option value='PROGRAMACIÓN DE PANEL24'>PROGRAMACIÓN DE PANEL</option>
                                            <option value='RELEVADORES25'>RELEVADORES</option>
                                            <option value='ROSCA A BRAZO DE DIRECCIÓN26'>ROSCA A BRAZO DE DIRECCIÓN</option>
                                            <option value='BUJE DE DIRECCIÓN27'>BUJE DE DIRECCIÓN </option>
                                            <option value='ORBITROL DE DIRECCIÓN28'>ORBITROL DE DIRECCIÓN</option>
                                            <option value='PALANCA DE DIRECCIÓN29'>PALANCA DE DIRECCIÓN </option>
                                            <option value='ESPIGA DE DIRECCIÓN30'>ESPIGA DE DIRECCIÓN</option>
                                            <option value='FLECHA DE DIRECCIÓN31'>FLECHA DE DIRECCIÓN </option>
                                            <option value='MEDIA LUNA DE DIRECCIÓN32'>MEDIA LUNA DE DIRECCIÓN </option>
                                            <option value='PASADORES DE DIRECCIÓN33'>PASADORES DE DIRECCIÓN</option>
                                            <option value='POLEAS DE DIRECCIÓN34'>POLEAS DE DIRECCIÓN</option>
                                            <option value='ROSCA DE EJE DIRECCIONAL35'>ROSCA DE EJE DIRECCIONAL</option>
                                            <option value='SOPORTE DE DIRECCIÓN36'>SOPORTE DE DIRECCIÓN </option>
                                            <option value='TERMINALES DE DIRECCIÓN37'>TERMINALES DE DIRECCIÓN   </option>
                                            <option value='TORRE DE DIRECCIÓN38'>TORRE DE DIRECCIÓN</option>
                                            <option value='VÁSTAGO DE LA DIRECCIÓN39'>VÁSTAGO DE LA DIRECCIÓN  </option>
                                            <option value='RUEDA DE DIRECCIÓN40'>RUEDA DE DIRECCIÓN</option>
                                            <option value='RETROCESO41'>RETROCESO </option>
                                            <option value='AVANCE42'>AVANCE  </option>
                                            <option value='SELLOS DE TERMINAL43'>SELLOS DE TERMINAL </option>

                                            ";
                                        break;

                                        case 16:
                                            $sistema="Eléctrico";


                                            echo"  <option value='ALAMBRADO01'>ALAMBRADO</option>
                                            <option value='ALTERNADOR02'>ALTERNADOR</option>
                                            <option value='AMPERÍMETRO A CARGADOR03'>AMPERÍMETRO A CARGADOR</option>
                                            <option value='ARNÉS04'>ARNÉS </option>
                                            <option value='ARRANQUE05'>ARRANQUE </option>
                                            <option value='BULBO CORTADOR DE CORRIENTE06'>BULBO CORTADOR DE CORRIENTE</option>
                                            <option value='CADENAS DE CONTACTORES07'>CADENAS DE CONTACTORES</option>
                                            <option value='CIRCUITO08'>CIRCUITO</option>
                                            <option value='CIRCUITO DE AVANCE09'>CIRCUITO DE AVANCE</option>
                                            <option value='CLAXON010'>CLAXON </option>
                                            <option value='CONECTOR DE BATERÍAL11'>CONECTOR DE BATERÍAL </option>
                                            <option value='CONTACTOR ELÉCTRICO12'>CONTACTOR ELÉCTRICO  </option>
                                            <option value='CORTO SISTEMA ELÉCTRICO13'>CORTO SISTEMA ELÉCTRICO </option>
                                            <option value='DIODO14'>DIODO</option>
                                            <option value='ELÉCTRICA15'>ELÉCTRICA  </option>
                                            <option value='FALSO CONTACTO16'>FALSO CONTACTO</option>
                                            <option value='FOCO17'>FOCO</option>
                                            <option value='FUSIBLE18'>FUSIBLE</option>
                                            <option value='INSTALACIÓN ELÉCTRICA19'>INSTALACIÓN ELÉCTRICA</option>
                                            <option value='LÁMPARAS FRONTALES20'>LÁMPARAS FRONTALES</option>
                                            <option value='LUCES21'>LUCES </option>
                                            <option value='MOTOR22'>MOTOR </option>
                                            <option value='MOTOR ELÉCTRICO23'>MOTOR ELÉCTRICO</option>
                                            <option value='POSTE DE BATERÍA24'>POSTE DE BATERÍA</option>
                                            <option value='POTENCIÓMETRO25'>POTENCIÓMETRO</option>
                                            <option value='REGULADOR26'>REGULADOR</option>
                                            <option value='RELEVADORES27'>RELEVADORES </option>
                                            <option value='RESISTENCIA28'>RESISTENCIA</option>
                                            <option value='SISTEMA ELÉCTRICO29'>SISTEMA ELÉCTRICO </option>
                                            <option value='SWITCH30'>SWITCH</option>
                                            <option value='TARJETA DE CONTROL31'>TARJETA DE CONTROL </option>
                                            <option value='TARJETA ELECTRÓNICA32'>TARJETA ELECTRÓNICA</option>
                                            <option value='TERMINALES DE BATERÍA33'>TERMINALES DE BATERÍA</option>
                                            <option value='TIMER34'>TIMER</option>
                                            <option value='TRANSFORMADOR35'>TRANSFORMADOR</option>
                                            <option value='SWITCH DE CLAXON36'>SWITCH DE CLAXON </option>
                                            <option value='VÁLVULA SOLENOIDE37'>VÁLVULA SOLENOIDE   </option>
                                            <option value='VOLTAJE38'>VOLTAJE </option>
                                            <option value='VOLTAJE BATERÍA39'>VOLTAJE BATERÍA  </option>
                                            <option value='VOLTÍMETRO40'>VOLTÍMETRO</option>
                                            <option value='BATERÍA41'>BATERÍA </option>
                                            <option value='SOLENOIDE42'>SOLENOIDE  </option>
                                            <option value='GENERADOR43'>GENERADOR</option>
                                            <option value='MODULO DE CONTROL44'>MODULO DE CONTROL</option>
                                            <option value='ENCENDIDO45'>ENCENDIDO</option>
                                            <option value='SENSOR46'>SENSOR  </option>
                                            <option value='CONDENSADOR47'>CONDENSADOR   </option>
                                            <option value='MODULOS DE TRACCIÓN48'>MODULOS DE TRACCIÓN</option>
                                            <option value='CONTACTORES DE AVANCE49'>CONTACTORES DE AVANCE</option>
                                            <option value='CONTACTORES DE REVERSA50'>CONTACTORES DE REVERSA</option>
                                            <option value='CONTACTORES DE BOMBA HIDRAULICA51'>CONTACTORES DE BOMBA HIDRAULICA</option>
                                            <option value='SWITCH DE PALANCA52'>SWITCH DE PALANCA </option>
                                            <option value='BANDA DE ALTERNADOR53'>BANDA DE ALTERNADOR</option>
                                            <option value='BROCHAS DE MOTOR DE TRACCION54'>BROCHAS DE MOTOR DE TRACCION</option>
                                            <option value='CARGADOR DE BATERÍAS55'>CARGADOR DE BATERÍAS </option>

                                            ";
                                        break;

                                        case 17:
                                            $sistema="Hidraulico";

                                            echo"  <option value='ACEITE HIDRÁULICO01'>ACEITE HIDRÁULICO</option>
                                            <option value='ARMADURA DEL MOTOR DEL HIDRÁULICO02'>ARMADURA DEL MOTOR DEL HIDRÁULICO</option>
                                            <option value='BOMBA HIDRÁULICA03'>BOMBA HIDRÁULICA </option>
                                            <option value='CAJA DE VÁLVULAS04'>CAJA DE VÁLVULAS </option>
                                            <option value='CILINDRO DE DIRECCIÓN05'>CILINDRO DE DIRECCIÓN</option>
                                            <option value='CILINDRO DE INCLINACIÓN06'>CILINDRO DE INCLINACIÓN</option>
                                            <option value='COIL07'>COIL</option>
                                            <option value='EJE DE PATÍN HIDRÁULICO08'>EJE DE PATÍN HIDRÁULICO</option>
                                            <option value='FILTRO HIDRÁULICO09'>FILTRO HIDRÁULICO</option>
                                            <option value='FILTRO Y ACEITE010'>FILTRO Y ACEITE </option>
                                            <option value='FLECHA DE BOMBA11'>FLECHA DE BOMBA </option>
                                            <option value='FUGA DE ACEITE HIDRÁULICO12'>FUGA DE ACEITE HIDRÁULICO</option>
                                            <option value='LÍNEAS HIDRÁULICAS13'>LÍNEAS HIDRÁULICAS </option>
                                            <option value='MANGUERA RETORNO HIDRÁULICO14'>MANGUERA RETORNO HIDRÁULICO </option>
                                            <option value='MANGUERA SISTEMA HIDRÁULICO15'>MANGUERA SISTEMA HIDRÁULICO </option>
                                            <option value='MANGUERAS DE INCLINACIÓN16'>MANGUERAS DE INCLINACIÓN</option>
                                            <option value='MANGUERAS DE SUCCIÓN17'>MANGUERAS DE SUCCIÓN  </option>
                                            <option value='MANGUERAS SISTEMA HIDRÁULICO18'>MANGUERAS SISTEMA HIDRÁULICO</option>
                                            <option value='MOTOR DEL HIDRÁULICO19'>MOTOR DEL HIDRÁULICO</option>
                                            <option value='MOTOR HIDRÁULICO20'>MOTOR HIDRÁULICO</option>
                                            <option value='MOTOR HIDRÁULICO DE DIRECCIÓN21'>MOTOR HIDRÁULICO DE DIRECCIÓN  </option>
                                            <option value='ORBITROL22'>ORBITROL </option>
                                            <option value='RAMPA HIDRÁULICA23'>RAMPA HIDRÁULICA</option>
                                            <option value='SISTEMA HIDRÁULICO24'>SISTEMA HIDRÁULICO</option>
                                            <option value='TAPÓN DE LLENADO DEL HIDRÁULICO25'>TAPÓN DE LLENADO DEL HIDRÁULICO</option>
                                            <option value='TAPONES A LÍNEAS HIDRÁULICAS26'>TAPONES A LÍNEAS HIDRÁULICAS </option>
                                            <option value='UNIDAD HIDRÁULICA27'>UNIDAD HIDRÁULICA </option>
                                            <option value='VÁLVULA ALIVIO28'>VÁLVULA ALIVIO</option>
                                            <option value='VÁLVULA DE CONTROL29'>VÁLVULA DE CONTROL </option>
                                            <option value='VÁSTAGO30'>VÁSTAGO</option>
                                            <option value='ENGRANE DE BOMBA DEL HIDRAULICO31'>ENGRANE DE BOMBA DEL HIDRAULICO </option>
                                            <option value='CADENA32'>CADENA </option>
                                            <option value='CONTACTOR DE BOMBA HIDRAULICA33'>CONTACTOR DE BOMBA HIDRAULICA</option>

                                            ";
                                        break;

                                        case 18:
                                            $sistema="Otros";

                                            echo"  <option value='ADAPTADOR PARA CARGADOR01'>ADAPTADOR PARA CARGADOR</option>
                                            <option value='AGUA A BATERÍA02'>AGUA A BATERÍA</option>
                                            <option value='BUJES03'>BUJES</option>
                                            <option value='CABLE04'>CABLE </option>
                                            <option value='CARGADOR DE BATERÍAS05'>CARGADOR DE BATERÍAS</option>
                                            <option value='CARRETE06'>CARRETE</option>
                                            <option value='AISLANTE07'>AISLANTE</option>
                                            <option value='CELDA DE BATERÍA08'>CELDA DE BATERÍA</option>
                                            <option value='CILINDRO09'>CILINDRO</option>
                                            <option value='CINCHOS010'>CINCHOS </option>
                                            <option value='CLAMP11'>CLAMP </option>
                                            <option value='COMPARTIMIENTO DE BATERÍA12'>COMPARTIMIENTO DE BATERÍA  </option>
                                            <option value='CONTRAPESO13'>CONTRAPESO </option>
                                            <option value='BALERO14'>BALERO</option>
                                            <option value='CUBIERTA DE PALANCA15'>CUBIERTA DE PALANCA   </option>
                                            <option value='EJE DE TIRANTE DE ELEVACIÓN16'>EJE DE TIRANTE DE ELEVACIÓN </option>
                                            <option value='EMPAQUE17'>EMPAQUE</option>
                                            <option value='PUNTERÍAS18'>PUNTERÍAS</option>
                                            <option value='EMPAQUE TANQUE DE GAS19'>EMPAQUE TANQUE DE GAS</option>
                                            <option value='EMPAQUES DE UNIDAD20'>EMPAQUES DE UNIDAD</option>
                                            <option value='EQUIPO21'>EQUIPO </option>
                                            <option value='FILTRO PURIFICADOR22'>FILTRO PURIFICADOR </option>
                                            <option value='FUGA23'>FUGA </option>
                                            <option value='GENERAL EJE LOCO24'>GENERAL EJE LOCO </option>
                                            <option value='MANGUERA25'>MANGUERA</option>
                                            <option value='MANGUERA DE PRESIÓN26'>MANGUERA DE PRESIÓN</option>
                                            <option value='MANGUERA DEL DESPLAZADOR LATERAL27'>MANGUERA DEL DESPLAZADOR LATERAL </option>
                                            <option value='MANGUERAS DE ADITAMENTO28'>MANGUERAS DE ADITAMENTO</option>
                                            <option value='MANGUERAS DE DESPLAZADOR29'>MANGUERAS DE DESPLAZADOR </option>
                                            <option value='MARCADOR DE TEMPERATURA30'>MARCADOR DE TEMPERATURA</option>
                                            <option value='MECANISMO DE LEVANTE A PATÍN31'>MECANISMO DE LEVANTE A PATÍN </option>
                                            <option value='MOTOR DE RAMPA32'>MOTOR DE RAMPA</option>
                                            <option value='MOTOR DE TRACCIÓN33'>MOTOR DE TRACCIÓN</option>
                                            <option value='NIVELES GENERAL34'>NIVELES GENERAL</option>
                                            <option value='PALANCA DE AVANCE35'>PALANCA DE AVANCE</option>
                                            <option value='PALANCA DE CONTROL36'>PALANCA DE CONTROL </option>
                                            <option value='PALANCA DE CONVERTIDOR37'>PALANCA DE CONVERTIDOR</option>
                                            <option value='PALANCA DE MANDO38'>PALANCA DE MANDO </option>
                                            <option value='PALANCA DE PATÍN39'>PALANCA DE PATÍN  </option>
                                            <option value='PALANCA INMOVILIZADOR40'>PALANCA INMOVILIZADORA</option>
                                            <option value='PASADOR DE CLAMP41'>PASADOR DE CLAMP  </option>
                                            <option value='PASADOR PARA PATÍN HIDRÁULICO42'>PASADOR PARA PATÍN HIDRÁULICO  </option>
                                            <option value='PATÍN ELÉCTRICO43'>PATÍN ELÉCTRICO</option>
                                            <option value='PATÍN HIDRÁULICO44'>PATÍN HIDRÁULICO</option>
                                            <option value='PEDAL45'>PEDAL</option>
                                            <option value='PEDAL DE LIBERACIÓN46'>PEDAL DE LIBERACIÓN  </option>
                                            <option value='PERILLA PALANCA47'>PERILLA PALANCA   </option>
                                            <option value='PIEZA48'>PIEZA</option>
                                            <option value='PLACA49'>PLACA</option>
                                            <option value='RESORTE50'>RESORTE </option>
                                            <option value='RESORTE DE PALANCA DE MANO51'>RESORTE DE PALANCA DE MANO</option>
                                            <option value='RETEN 52'>RETEN </option>
                                            <option value='RUEDA DE PATÍN53'>RUEDA DE PATÍN</option>
                                            <option value='RUEDA LOCA54'>RUEDA LOCA</option>
                                            <option value='SISTEMA DE CARGA55'>SISTEMA DE CARGA </option>
                                            <option value='BUJE DE BASE DE PALANCA56'>BUJE DE BASE DE PALANCA </option>
                                            <option value='BUJES57'>BUJES</option>
                                            <option value='FECHA CON BALERO58'>FECHA CON BALERO</option>
                                            <option value='NIPLE59'>NIPLE</option>
                                            <option value='PERNO60'>PERNO</option>
                                            <option value='PLACA PARA SOPORTE61'>PLACA PARA SOPORTE  </option>
                                            <option value='POSTIZO62'>POSTIZO   </option>
                                            <option value='ROSCA A BARRA63'>ROSCA A BARRA</option>
                                            <option value='ROSCA A TORNILLOS DE BASE64'>ROSCA A TORNILLOS DE BASE</option>
                                            <option value='TUERCA65'>TUERCA </option>
                                            <option value='TORNILLO66'>TORNILLO</option>
                                            <option value='TOMA DE EMPAQUES67'>TOMA DE EMPAQUES </option>     

                                            ";
                                        break;

                                        case 19:
                                            $sistema="Motor";
                                            echo"  <option value='ABANICO01'>ABANICO</option>
                                            <option value='ABANICO BASE02'>ABANICO BASE</option>
                                            <option value='ACEITE DE MOTOR03'>ACEITE DE MOTOR</option>
                                            <option value='ARMADURA04'>ARMADURA </option>
                                            <option value='ARMADURA DE MOTOR05'>ARMADURA DE MOTOR</option>
                                            <option value='ARO DE VOLANTA06'>ARO DE VOLANTA</option>
                                            <option value='AVANCE07'>AVANCE</option>
                                            <option value='AVANCE-RETROCESO08'>AVANCE-RETROCESO</option>
                                            <option value='BANCADAS09'>BANCADAS</option>
                                            <option value='BANDA DE TIEMPO010'>BANDA DE TIEMPO</option>
                                            <option value='BANDA SUJETADORA DE MOTOR11'>BANDA SUJETADORA DE MOTOR</option>
                                            <option value='BARRA DE DISTRIBUIDOR12'>BARRA DE DISTRIBUIDOR  </option>
                                            <option value='BASE DE SILENCIADOR13'>BASE DE SILENCIADOR </option>
                                            <option value='SISTEMA DE ENFRIAMIENTO14'>SISTEMA DE ENFRIAMIENTO</option>
                                            <option value='BOMBA DE ACEITE15'>BOMBA DE ACEITE   </option>
                                            <option value='BOMBA DE AGUA16'>BOMBA DE AGUA </option>
                                            <option value='BOMBA DE DIRECCIÓN17'>BOMBA DE DIRECCIÓN</option>
                                            <option value='BROCHAS18'>BROCHAS</option>
                                            <option value='BOTADORES19'>BOTADORES</option>
                                            <option value='BROCHAS DE MOTOR DE ARRANQUE20'>BROCHAS DE MOTOR DE ARRANQUE</option>
                                            <option value='BUJES ÁRBOL DE LEVAS21'>BUJES ÁRBOL DE LEVAS  </option>
                                            <option value='BUJES DE BIELA Y CILINDRO22'>BUJES DE BIELA Y CILINDRO </option>
                                            <option value='BUJÍAS23'>BUJÍAS </option>
                                            <option value='BULBO DE ACEITE24'>BULBO DE ACEITE </option>
                                            <option value='CABEZA DE MOTOR25'>CABEZA DE MOTOR</option>
                                            <option value='CADENA DE TIEMPO26'>CADENA DE TIEMPO</option>
                                            <option value='CAMPANA DE ARRANQUE27'>CAMPANA DE ARRANQUE </option>
                                            <option value='CAMPANA DE MOTOR28'>CAMPANA DE MOTOR</option>
                                            <option value='CARBÓN Y ROTOR DE DISTRIBUIDOR29'>CARBÓN Y ROTOR DE DISTRIBUIDOR </option>
                                            <option value='CARBURADOR30'>CARBURADOR</option>
                                            <option value='CARTER31'>CARTER </option>
                                            <option value='CATALIZADOR32'>CATALIZADOR</option>
                                            <option value='CIGÜEÑAL33'>CIGÜEÑAL</option>
                                            <option value='CIRCUNFERENCIA A BIELA34'>CIRCUNFERENCIA A BIELA</option>
                                            <option value='COLILLAS DE MOTOR35'>COLILLAS DE MOTOR</option>
                                            <option value='COMBUSTIBLE 36'>COMBUSTIBLE </option>
                                            <option value='COMPONENTE TÉRMICO37'>COMPONENTE TÉRMICO</option>
                                            <option value='COMPRESIÓN MOTOR38'>COMPRESIÓN MOTOR </option>
                                            <option value='CONEXIONES RÁPIDAS39'>CONEXIONES RÁPIDAS </option>
                                            <option value='CONMUTADOR A MOTOR40'>CONMUTADOR A MOTOR</option>
                                            <option value='DISTRIBUIDOR41'>DISTRIBUIDOR  </option>
                                            <option value='EJE ARMADURA MOTOR42'>EJE ARMADURA MOTOR  </option>
                                            <option value='EMPAQUE A CARTER DE MOTOR43'>EMPAQUE A CARTER DE MOTOR</option>
                                            <option value='EMPAQUE DE BALANCÍN44'>EMPAQUE DE BALANCÍN </option>
                                            <option value='EMPAQUE DE CABEZA DE MOTOR45'>EMPAQUE DE CABEZA DE MOTOR  </option>
                                            <option value='EMPAQUE DE CARTER46'>EMPAQUE DE CARTER  </option>
                                            <option value='EMPAQUE DE TAPA DE BALANCINES47'>EMPAQUE DE TAPA DE BALANCINES  </option>
                                            <option value='ENGRANE DE TIEMPO48'>ENGRANE DE TIEMPO</option>
                                            <option value='ENGRANE DE ÁRBOL DE LEVAS49'>ENGRANE DE ÁRBOL DE LEVAS</option>
                                            <option value='EQUIPO DE GAS50'>EQUIPO DE GAS </option>
                                            <option value='ESCAPE51'>ESCAPE</option>
                                            <option value='ESPACIADOR PARA DISTRIBUIDOR52'>ESPACIADOR PARA DISTRIBUIDOR </option>
                                            <option value='EVAPORIZADOR53'>EVAPORIZADOR</option>
                                            <option value='FILTRO DE ACEITE DE MOTOR54'>FILTRO DE ACEITE DE MOTOR</option>
                                            <option value='FILTRO DE AIRE55'>FILTRO DE AIRE </option>
                                            <option value='FILTRO DE AIRE COMPLETO56'>FILTRO DE AIRE COMPLETO</option>
                                            <option value='FILTRO DE MOTOR57'>FILTRO DE MOTOR </option>
                                            <option value='FILTRO RESPIRADERO58'>FILTRO RESPIRADERO</option>
                                            <option value='FLOTADOR DE CARBURADOR59'>FLOTADOR DE CARBURADOR </option>
                                            <option value='FUGA DE AGUA60'>FUGA DE AGUA</option>
                                            <option value='MOTOR61'>MOTOR  </option>
                                            <option value='GOBERNADOR62'>GOBERNADOR   </option>
                                            <option value='GUÍA A POLEA63'>GUÍA A POLEA </option>
                                            <option value='MANGUERAS64'>MANGUERAS</option>
                                            <option value='MANGUERA DE GOBERNADOR65'>MANGUERA DE GOBERNADOR</option>
                                            <option value='MOTOR DE ARRANQUE66'>MOTOR DE ARRANQUE</option>
                                            <option value='PISTONES DE MOTOR67'>PISTONES DE MOTOR </option>
                                            <option value='PLATINOS68'>PLATINOS</option>
                                            <option value='PURIFICADOR DE AIRE69'>PURIFICADOR DE AIRE</option>
                                            <option value='QUÍMICO DE CABEZA70'>QUÍMICO DE CABEZA</option>
                                            <option value='QUÍMICO DE MOTOR71'>QUÍMICO DE MOTOR </option>
                                            <option value='RADIADOR72'>RADIADOR</option>
                                            <option value='RETEN DE CIGÜEÑAL73'>RETEN DE CIGÜEÑAL</option>
                                            <option value='RETEN DE CIGÜEÑAL DELANTERO74'>RETEN DE CIGÜEÑAL DELANTERO</option>
                                            <option value='ROSCA DE TENSOR75'>ROSCA DE TENSOR</option>
                                            <option value='ROTOR76'>ROTOR</option>
                                            <option value='SELLOS77'>SELLOS</option>
                                            <option value='SILENCIADOR78'>SILENCIADOR</option>
                                            <option value='SOPORTES DE MOTOR79'>SOPORTES DE MOTOR  </option>
                                            <option value='TAPA DE DISTRIBUIDOR, ROTOR80'>TAPA DE DISTRIBUIDOR, ROTOR  </option>
                                            <option value='TAPA DISTRIBUCIÓN81'>TAPA DISTRIBUCIÓN </option>
                                            <option value='TAPÓN DE CARTER82'>TAPÓN DE CARTER   </option>
                                            <option value='TEMPERATURA83'>TEMPERATURA </option>
                                            <option value='TENSOR84'>TENSOR</option>
                                            <option value='TERMOSTATO85'>TERMOSTATO</option>
                                            <option value='TOLVA86'>TOLVA</option>
                                            <option value='TUBO ESCAPE87'>TUBO ESCAPE</option>
                                            <option value='VÁLVULA BLOQUE88'>VÁLVULA BLOQUE </option>
                                            <option value='VÁLVULA DE LIBERACIÓN89'>VÁLVULA DE LIBERACIÓN</option>
                                            <option value='VÁLVULA RETENCIÓN90'>VÁLVULA RETENCIÓN</option>
                                            <option value='VENTILADOR91'>VENTILADOR </option>            

                                            ";
                                        break;

                                        case 20:
                                            $sistema="Torre mastil";

                                            echo" <option value='BASE DE DESPLAZADOR01'>BASE DE DESPLAZADOR</option>
                                            <option value='CADENA DE TORRE 02'>CADENA DE TORRE </option>
                                            <option value='BALEROS DE DESPLAZADOR LATERAL03'>BALEROS DE DESPLAZADOR LATERAL</option>
                                            <option value='CALSAS DE DESPLAZADOR LATERAL04'>CALSAS DE DESPLAZADOR LATERAL </option>
                                            <option value='CANDADO DE CADENA05'>CANDADO DE CADENA </option>
                                            <option value='CANDADO DE PASADOR 06'>CANDADO DE PASADOR  </option>
                                            <option value='CILINDRO DE DESPLAZAMIENTO LATERAL07'>CILINDRO DE DESPLAZAMIENTO LATERAL</option>
                                            <option value='CILINDRO DE LEVANTE08'>CILINDRO DE LEVANTE</option>
                                            <option value='COJINES DESPLAZADO09'>COJINES DESPLAZADOR LATERAL</option>
                                            <option value='COJINETES010'>COJINETES </option>
                                            <option value='CORREDERAS SADE SHIFT 11'>CORREDERAS SADE SHIFT </option>
                                            <option value='DESPLAZADOR LATERAL12'>DESPLAZADOR LATERAL </option>
                                            <option value='HORQUILLA13'>HORQUILLA </option>
                                            <option value='LEVANTE14'>LEVANTE</option>
                                            <option value='MANGUERA DE LEVANTE15'>MANGUERA DE LEVANTE</option>
                                            <option value='MANGUERAS DE DESPLAZADOR LATERAL16'>MANGUERAS DE DESPLAZADOR LATERAL</option>
                                            <option value='PALANCA DE LEVANTE17'>PALANCA DE LEVANTE </option>
                                            <option value='PLACA PORTA MANGUERAS18'>PLACA PORTA MANGUERAS</option>
                                            <option value='PORTA HORQUILLAS19'>PORTA HORQUILLAS</option>
                                            <option value='PUNTAS DE CUCHILLAS20'>PUNTAS DE CUCHILLAS</option>
                                            <option value='RESPALDO DE CARGA21'>RESPALDO DE CARGA</option>

                                            <option value='TORRE22'>TORRE </option>
                                            <option value='TORRE DE LEVANTE23'>TORRE DE LEVANTE</option>
                                            <option value='PASADOR DE TORRE24'>PASADOR DE TORRE</option>
                                            <option value='SWITCH DE DESPLAZADOR LATERAL25'>SWITCH DE DESPLAZADOR LATERAL</option>
                                            <option value='BALEROS DE TORRE26'>BALEROS DE TORRE </option>



                                            ";
                                        break;

                                        case 21:
                                            $sistema="Transmision diferencial";

                                            echo"<option value='ACEITES DE TRANSMISIÓN01'>ACEITES DE TRANSMISIÓN</option>
                                            <option value='BOMBA DE TRANSMISIÓN02'>BOMBA DE TRANSMISIÓN </option>
                                            <option value='CLUTCH03'>CLUTCH</option>
                                            <option value='CONVERTIDOR 04'>CONVERTIDOR </option>
                                            <option value='DISCO DE CLUTCH05'>DISCO DE CLUTCH </option>
                                            <option value='ENFRIADOR DE ACEITE 06'>ENFRIADOR DE ACEITE   </option>
                                            <option value='MANGUERAS DE ENFRIAMIENTO07'>MANGUERAS DE ENFRIAMIENTO</option>
                                            <option value='PALANCA DE AVANCE-RETROCESO08'>PALANCA DE AVANCE-RETROCESO</option>
                                            <option value='PALANCA DE CAMBIOS09'>PALANCA DE CAMBIOS</option>
                                            <option value='PLATO DE CLUTCH 010'>PLATO DE CLUTCH </option>
                                            <option value='PLATO Y DISCO DE CLUTCH11'>PLATO Y DISCO DE CLUTCH </option>
                                            <option value='PRENSA DE CLUTCH12'>PRENSA DE CLUTCH </option>
                                            <option value='REVERSA13'>REVERSA </option>
                                            <option value='SISTEMA DE CLUTCH14'>SISTEMA DE CLUTCH</option>
                                            <option value='SISTEMA DE VELOCIDADES15'>SISTEMA DE VELOCIDADES</option>
                                            <option value='TRACCIÓN16'>TRACCIÓN</option>
                                            <option value='TRANSMISIÓN17'>TRANSMISIÓN </option>
                                            <option value='TRANSMISIÓN HIDRÁULICA18'>TRANSMISIÓN HIDRÁULICA</option>

                                            ";
                                        break;

                                        case 22:
                                            $sistema="Frenos y llantas";
                                            echo"      <option value='AJUSTADORES01'>AJUSTADORES</option>
                                            <option value='BALATAS02'>BALATAS</option>
                                            <option value='BIRLO03'>BIRLO</option>
                                            <option value='BIRLOS Y TUERCAS04'>BIRLOS Y TUERCAS </option>
                                            <option value='CHICOTE DE FRENO05'>CHICOTE DE FRENO</option>
                                            <option value='CHICOTES DE FRENO DE ESTACIONAMIENTO06'>CHICOTES DE FRENO DE ESTACIONAMIENTO  </option>
                                            <option value='CILINDRO MAESTRO07'>CILINDRO MAESTRO</option>
                                            <option value='CILINDRO NEUTRALIZADOR08'>CILINDRO NEUTRALIZADOR</option>
                                            <option value='FRENO DE ESTACIONAMIENTO09'>FRENO DE ESTACIONAMIENTO</option>
                                            <option value='FRENOS010'>FRENOS</option>
                                            <option value='FRENOS DISCOS11'>FRENOS DISCOS </option>
                                            <option value='FRENOS LÍNEAS12'>FRENOS LÍNEAS </option>
                                            <option value='FRENOS SWITCH13'>FRENOS SWITCH </option>
                                            <option value='LIGA14'>LIGA</option>
                                            <option value='LLANTA15'>LLANTA</option>
                                            <option value='LLANTA DE TRACCIÓN16'>LLANTA DE TRACCIÓN</option>
                                            <option value='LLANTA DELANTERAS17'>LLANTA DELANTERAS </option>
                                            <option value='LLANTA DIRECCIONALES18'>LLANTA DIRECCIONALES</option>
                                            <option value='PEDAL DE FRENO19'>PEDAL DE FRENO</option>
                                            <option value='LLANTAS TRACERAS20'>LLANTAS TRACERAS</option>
                                            <option value='RETEN DE EJE DE TRACCIÓN21'>RETEN DE EJE DE TRACCIÓN</option>
                                            <option value='RIN22'>RIN</option>
                                            <option value='RIN DE MONTACARGAS23'>RIN DE MONTACARGAS</option>
                                            <option value='RUEDAS24'>RUEDAS</option>
                                            <option value='RUEDAS DE PASILLO25'>RUEDAS DE PASILLO</option>
                                            <option value='TAMBORES26'>TAMBORES </option>

                                            ";
                                        break;
                                    }
                                ?>
                            </select>
                            <input type="hidden" name="variable2" value="valor2" />
                        </div>

                        <div class="col-sm-3" >
                            <?php
                                if(isset($_POST['activity'])){
                                    $activity=$_POST['activity'];
                                    if($activity==""){
                                        $activity="";
                                        $actividad="";
                                    }
                                    switch($activity){
                                        case 01:
                                        $actividad="ADAPTAR";
                                        break;
                                        case 02:
                                        $actividad="AFINACIÓN";
                                        break;
                                        case 03:
                                        $actividad="AJUSTAR";
                                        break;
                                        case 04:
                                        $actividad="ALINEAR ";
                                        break;
                                        case 05:
                                        $actividad="ANILLAR";
                                        break;
                                        case 06:
                                        $actividad="ARMAR";
                                        break;
                                        case 07:
                                        $actividad="BALANCEAR";
                                        break;
                                        case 8:
                                        $actividad="BARRENAR";
                                        break;
                                        case 9:
                                        $actividad="CALIBRAR";
                                        break;
                                        case 10:
                                        $actividad="CARGAR";;
                                        break;
                                        case 11:
                                        $actividad="CONECTAR";
                                        break;
                                        case 12:
                                        $actividad="CORTAR";
                                        break;
                                        case 13:
                                        $actividad="DESARMAR";
                                        break;
                                        case 14:
                                        $actividad="DESMONTAR";
                                        break;
                                        case 15:
                                        $actividad="DESMONTAR Y MONTAR";
                                        break;
                                        case 16:
                                        $actividad="DIAGNÓSTICAR";
                                        break;
                                        case 17:
                                        $actividad="ELIMINAR";
                                        break;
                                        case 18:
                                        $actividad="EMPACAR";
                                        break;
                                        case 19:
                                        $actividad="EMPASTAR";
                                        break;
                                        case 20:
                                        $actividad="ENCASQUILLAR";
                                        break;
                                        case 21:
                                        $actividad="ENCHAQUETAR";
                                        break;
                                        case 22:
                                        $actividad="ENDEREZAR";
                                        break;
                                        case 23:
                                        $actividad="ENGRASADO";
                                        break;
                                        case 24:
                                        $actividad="EXTRAER";
                                        break;
                                        case 25:
                                        $actividad="FABRICAR";
                                        break;
                                        case 26:
                                        $actividad="INSTALAR";
                                        break;
                                        case 27:
                                        $actividad="LAVADO";
                                        break;
                                        case 28:
                                        $actividad="LIMPIAR";
                                        break;
                                        case 29:
                                        $actividad="LUBRICACIÓN";
                                        break;
                                        case 30:
                                        $actividad="MONTAR";
                                        break;
                                        case 31:
                                        $actividad="NIVELAR";
                                        break;
                                        case 32:
                                        $actividad="PEGAR";;
                                        break;
                                        case 33:
                                        $actividad="PINTAR";
                                        break;
                                        case 34:
                                        $actividad="PULIR";
                                        break;
                                        case 35:
                                        $actividad="PURGAR";
                                        break;
                                        case 36:
                                        $actividad="REACONDICIONAR";
                                        break;
                                        case 37:
                                        $actividad="REBAJAR";
                                        break;
                                        case 38:
                                        $actividad="REEMPLAZAR";
                                        break;
                                        case 39:
                                        $actividad="RECONSTRUIR";
                                        break;
                                        case 40:
                                        $actividad="RECTIFICACIÓN";
                                        break;
                                        case 41:
                                        $actividad="RELLENAR ";
                                        break;
                                        case 42:
                                        $actividad="REPARAR";
                                        break;
                                        case 43:
                                        $actividad="REVESTIR";
                                        break;
                                        case 44:
                                        $actividad="REVISAR ";
                                        break;
                                        case 45:
                                        $actividad="SERVICIO";
                                        break;
                                        case 46:
                                        $actividad="SOLDAR";
                                        break;
                                        case 47:
                                        $actividad="SUJETAR";
                                        break;
                                        case 48:
                                        $actividad="TAPIZAR";
                                        break;
                                        case 49:
                                        $actividad="TORNEAR";
                                        break;
                                        case 50:
                                        $actividad="TRASLADAR";
                                        break;
                                    }
                                }
                                else{
                                    $activity="";
                                    $actividad="";
                                }
                            ?>
                            <select onchange="this.form.submit()" class="chosen-select" data-placeholder="Selecciona actividad" id="activity" name="activity">
                                <option value="<?php echo  $activity;  ?>"><?php echo $actividad ?></option>
                                <option value="01">ADAPTAR </option>
                                <option value="02">AFINACIÓN</option>
                                <option value='03'>AJUSTAR </option>
                                <option value='04'>ALINEAR  </option>
                                <option value='05'>ANILLAR</option>
                                <option value='06'>ARMAR</option>
                                <option value='07'>BALANCEAR</option>
                                <option value='08'>BARRENAR</option>
                                <option value='09'>CALIBRAR</option>
                                <option value='010'>CARGAR</option>
                                <option value='11'>CONECTAR</option>
                                <option value='12'>CORTAR   </option>
                                <option value='13'>DESARMAR </option>
                                <option value='14'>DESMONTAR</option>
                                <option value='15'>DESMONTAR Y MONTAR </option>
                                <option value='16'>DIAGNÓSTICAR </option>
                                <option value='17'>ELIMINAR</option>
                                <option value='18'>EMPACAR</option>
                                <option value='19'>EMPASTAR</option>
                                <option value='20'>ENCASQUILLAR</option>
                                <option value='21'>ENCHAQUETAR </option>
                                <option value='22'>ENDEREZAR </option>
                                <option value='23'>ENGRASADO </option>
                                <option value='24'>EXTRAER </option>
                                <option value='25'>FABRICAR</option>
                                <option value='26'>INSTALAR</option>
                                <option value='27'>LAVADO </option>
                                <option value='28'>LIMPIAR</option>
                                <option value='29'>LUBRICACIÓN </option>
                                <option value='30'>MONTAR</option>
                                <option value='31'>NIVELAR </option>
                                <option value='32'>PEGAR</option>
                                <option value='33'>PINTAR</option>
                                <option value='34'>PULIR</option>
                                <option value='35'>PURGAR</option>
                                <option value='36'>REACONDICIONAR </option>
                                <option value='37'>REBAJAR</option>
                                <option value='38'>REEMPLAZAR </option>
                                <option value='39'>RECONSTRUIR </option>
                                <option value='40'>RECTIFICACIÓN</option>
                                <option value='41'>RELLENAR  </option>
                                <option value='42'>REPARAR </option>
                                <option value='43'>REVESTIR</option>
                                <option value='44'>REVISAR </option>
                                <option value='45'>SERVICIO  </option>
                                <option value='46'>SOLDAR   </option>
                                <option value='47'>SUJETAR  </option>
                                <option value='48'>TAPIZAR</option>
                                <option value='49'>TORNEAR</option>
                                <option value='50'>TRASLADAR </option>
                            </select>
                        </div>
                    </form>
                </div> <!--Cierre del row -->

                <?php

                    if(isset($tipo)){
                    }else{
                        $tipo="";
                    }

                    if(isset($_POST['sistema'])){
                        $sistemaa=$_POST['sistema'];
                        switch($sistemaa){
                            case 1:
                            $sistema="A";
                            break;
                            case 2:
                            $sistema="K";
                            break;
                            case 3:
                            $sistema="B";
                            break;
                            case 4:
                            $sistema="D";
                            break;
                            case 5:
                            $sistema="E";
                            break;
                            case 6:
                            $sistema="H";
                            break;
                            case 7:
                            $sistema="O";
                            break;
                            case 8:
                            $sistema="P";
                            break;
                            case 9:
                            $sistema="R";
                            break;
                            case 10:
                            $sistema="T";
                            break;
                            case 11:
                            $sistema="F";
                            break;
                            case 12:
                            $sistema="A";
                            break;
                            case 13:
                            $sistema="B";
                            break;
                            case 14:
                            $sistema="C";
                            break;
                            case 15:
                            $sistema="D";
                            break;
                            case 16:
                            $sistema="E";
                            break;
                            case 17:
                            $sistema="H";
                            break;
                            case 18:
                            $sistema="O";
                            break;
                            case 19:
                            $sistema="M";
                            break;
                            case 20:
                            $sistema="R";
                            break;
                            case 21:
                            $sistema="T";
                            break;
                            case 22:
                            $sistema="F";
                            break;
                        }
                    }else{
                        $sistemaa="";
                        $sistema="";
                    }

                    if(isset($sistema)){
                    }else{
                        $sistema="";
                    }

                    if(isset($_POST['local'])){
                        $local=$_POST['local'];
                        $num= strlen($local);
                        if($num>2){
                            $local = substr($local, -2); 
                            $rest2 = substr($local, 0, -2);
                            if($local=="10"){
                                $local="010";
                            }
                        }
                    }else{
                        $local="";
                        $rest2="";
                    }
                    if(isset($activity)){
                    }else{
                        $activity="";
                    }
                ?>

                <div class="rTableRow">
                    <div class="rTableCell">
                    </br>
                </div> <!--Cierre de rTableCell -->
            </div><!-- Cierre de rTableRow-->
            <div class="rTableRow">
                <div class="rTableCell">
                    <center><b>Código</b></center>
                </div>
            </div>
            <div class="rTableRow">
                <div class="rTableCell">
                <?php 
                    if($local=="10"){
                        $local="010";
                    }
                    try{
                        echo"  
                            <center>
                            <input type='text' name='' size='4' value='$tipo'> 
                            <input type='text' name='' size='4' value='$sistema'>
                            <input type='text' name='' size='4' value='$local'>
                            <input type='text' name='' size='4' value='$activity'>
                            </center>
                        ";
                    }catch (Exception $e){
                        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                    }
                ?> 
            </div>
        </div>
            <?php $codiguito = $tipo.$sistema.$local.$activity; ?>
            <form action="modmanodeobra.php" method="get" style="margin-top: 15px;">
                <input type="text" name="cod" value="<?php echo base64_encode($codiguito); ?>" style='display: none;'>
                <input type="text" name="l" value="<?php echo base64_encode($_GET['list']); ?>" style='display: none;'>
                <button class="btn btn-primary btn-block" type="submit">Guardar</button>
            </form>


        </div><!--Cierre de rTable -->
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
