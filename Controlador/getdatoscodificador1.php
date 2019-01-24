<?php // aqui va la consulta para preguntar por los permisos de cada usuario
$id=$_GET['q'];
require '../Modelo/conexioncod.php'; 
                        
?>
<center><h4>Localizacion</h4></center>
<select data-placeholder="Selecciona el usuario" onchange="cale2(this.value)" id="localizacion" name="localizacion" class="chosen-select col-sm-10" style="width:350px;"  required="llenar campo">

    <option value="" disabled="" selected="">Localizacion</option>
    <?php
    require('../Modelo/conexioncod.php');

    $rs = mysqli_query($conexionbdwmcod, "SELECT * FROM sistemas");
    while($row=mysqli_fetch_array($rs))
    {
      echo "<option value='".$row['sistema']."'>";
      echo $row['sistema'];
      echo "</option>";                     
  }

  mysqli_close($conexionbdwmcod);
  ?>

</select><br><br>
