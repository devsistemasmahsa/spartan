<?php // aqui va la consulta para preguntar por los permisos de cada usuario
$codigo=$_GET['q'];
$listado=$_GET['l'];
$nombre=$_GET['n'];
$sucursal=$_GET['s'];

/*echo $listado;
echo $codigo;*/
require '../Modelo/conexion.php'; 

  $buscades="SELECT descripcionmo from manodeobra where num_listadomo=$listado and codigomo='$codigo'";
  $ejecuta_buscades=mysqli_query($conexionbdwm, $buscades) or die ('No se pudo encontrar la descripcion');
  $rowdesc = mysqli_fetch_array($ejecuta_buscades);
  $descrmo=$rowdesc['descripcionmo'];
?>
<form role="form" action="../Controlador/registrarefaccion.php" method="POST">

 <div class="row">
  
  <div class="col-lg-12">
    <input type="hidden" value="<?php echo $nombre ?>" name="usuario"> 
    <input type="hidden" value="<?php echo $sucursal ?>" name="sucursal"> 
    <input type="hidden" value="<?php echo $listado ?>" name="listado"> 
    <input type="hidden" value="<?php echo $codigo ?>" name="codigo">
  </div>  
  <div class="col-lg-12">
    <label for="">Descripción</label>
    <input type="text" readonly="true" class="form-control"  value="<?php echo $descrmo ?>" name="descripcioncodigo"><br>
  </div>
  <div class="col-lg-6">
    <label for="">Cantidad</label>
    <input type="text" class="form-control" name="cantidad">
  </div>
  <div class="col-lg-6">
    <label for="">No. de parte</label>
    <input type="text" class="form-control" name="parte">
  </div>
  <div class="col-lg-12">
    <label for="">Descripción</label>
    <input type="text" class="form-control" name="descripcionrefaccion">
  </div>
  
 </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        
      </div>
 </form>