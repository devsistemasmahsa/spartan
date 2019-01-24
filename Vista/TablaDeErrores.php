<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAHSA | WEBMASTER </title>
    <?php require '../Vista/css.php'; ?>
    

</head>

<body>
    <div id="wrapper">
        <?php require '../Vista/menu.php'; ?>
        </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <?php //AQUI VA EL CONTENIDO DE LA PAGINA ?>
                         <div class="jumbotron">
                             <center>
                                <p>CODIGOS DE ERRORES</p>
                                
                             </center>
                             <input type="text" class="form-control input-sm m-b-xs" id="filter"
                            placeholder="Busca error por codigo o descripcion">
                             <table class="footable table-striped table-bordered table-hover" data-filter=#filter>
                                <thead>
                                <tbody>
                                 <tr>
                                     <th>Codigo</th>
                                     <th>Descripción</th>
                                 </tr>
                                </thead>
                                 <tr>
                                     <td>100</td>
                                     <td>Problemas en la inserción de usuarios</td>
                                 </tr>
                                 <tr>
                                     <td>101</td>
                                     <td>Se dejaron campos vacios</td>
                                 </tr>
                                 <tr>
                                     <td>102</td>
                                     <td>No se pudo eliminar usuario porque no se encontro el identificador</td>
                                 </tr>
                                 <tr>
                                     <td>103</td>
                                     <td>No se pudo obtener el listado de usuarios</td>
                                 </tr>
                                 <tr>
                                     <td>104</td>
                                     <td>No se pudo obtener el listado de clientes</td>
                                 </tr>
                                 <tr>
                                     <td>105</td>
                                     <td>No se pudo obtener el listado de proveedores</td>
                                 </tr>
                                 <tr>
                                     <td>106</td>
                                     <td>Problemas en la inserción de clientes</td>
                                 </tr>
                                 <tr>
                                     <td>107</td>
                                     <td>Problemas en la inserción de levantamientos</td>
                                 </tr>
                                 <tr>
                                     <td>108</td>
                                     <td>Problemas en la inserción de listado con levantamiento</td>
                                 </tr>
                                 <tr>
                                     <td>109</td>
                                     <td>Problemas en la inserción de listado sin levantamiento</td>
                                 </tr>
                                 <tr>
                                     <td>111</td>
                                     <td>No se pudo realizar la conexion a la base de datos</td>
                                 </tr>
                                 <tr>
                                     <td>112</td>
                                     <td>Problemas al obtener los permisos</td>
                                 </tr>
                                 <tr>
                                     <td>113</td>
                                     <td>Problemas al actualizar permisos de usuario</td>
                                 </tr>
                                 <tr>
                                     <td>114</td>
                                     <td>Problemas al actualizar permisos de usuario</td>
                                 </tr>
                                 <tr>
                                     <td>115</td>
                                     <td>Problemas al actualizar datos del listado</td>
                                 </tr>
                                 <tr>
                                     <td>116</td>
                                     <td>Problemas al guardar reporte</td>
                                 </tr>
                                 <tr>
                                     <td>117</td>
                                     <td>No se pudo obtener el listado de reportes</td>
                                 </tr>
                                 <tr>
                                     <td>118</td>
                                     <td>No se pudo obtener el listado de mano de obras</td>
                                 </tr>
                                 <tr>
                                     <td>119</td>
                                     <td>No se pudo obtener el listado de refacciones</td>
                                 </tr>
                                 <tr>
                                     <td>120</td>
                                     <td>Problemas en la inserción la mano de obra</td>
                                 </tr>

                             </tbody>
                             <tfoot>
                                <tr>
                                    <td colspan="11">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                             </table>
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
        <?php require '../Vista/js.php'; ?>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
