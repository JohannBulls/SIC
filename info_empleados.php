<?php
require("../controlador/conecxion.php");	


$registros=$mysql->query("SELECT imagen,empleado,empleado_apellido,cargo FROM empleados ")or die($mysql->error);
while ($reg=$registros->fetch_array()) {
?>
<div class="producto" style="width: 20%">
<center>
<img src="../vista_administrador/empleados/<?php echo $reg['imagen'];?>">
<h8>
<span style="color:#FFFFFF">
<?php
echo '<center>'.ucfirst($reg['empleado']).' '.ucfirst($reg['empleado_apellido']).'</center>'.'</h8>';
echo '<center>'.'<h9>'.'<span style="color:#FFFFFF">'.ucfirst($reg['cargo']).'</center>';

?>

</center></div>
<?php
}
$mysql->close();
?>