<?php
			  ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

require("../controlador/conecxion.php");

 $registros=$mysql->query("SELECT * FROM `empleados` ORDER BY id ASC") or die($mysql->error);

  echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">Num</th><th class="center" >Nombre</th><th class="center">Documento</th><th class="center">Cargo</th><th class="center">Telefofo</th><th class="center">Sueldo</th><th class="center">Dias de trabajo</th><th class="center">Eliminar</th><th class="center">Modificar</th>';

 
 while ($reg=$registros->fetch_array())
 {
 echo '<tr>';
 echo '<td>';
 echo $reg['id'];
 echo '</td>';
 echo '<td width="130px">';
 echo $reg['empleado'].'&nbsp;&nbsp;'.$reg['empleado_apellido'];
 echo '</td>';
  echo '<td>';
 echo $reg['iden'];
 echo '</td>';
 echo '<td>';
 echo $reg['cargo'];
 echo '</td>';
 echo '<td>';
 echo $reg['telefono'];
 echo '</td>';
 echo '<td>';
 echo '$ '.$reg['sueldo'];
 echo '</td>';
 echo '<td>';
 echo $reg['trabajo'];
 echo '</td>';
 echo '<td>';
 echo '<a href="borrar/borrar_empleado.php?iden='.$reg['iden'].'"><img src="../images/borrar.png" width="33"></a>';
 echo '</td>';
 echo '<td>';
 echo '<a href="modi_empleado.php?id='.$reg['id'].'"><img src="../images/modificar.png" width="33"></a>';
 echo '</td>';
 echo '</tr>';
 }
 echo '<table>';
 $mysql->close();
 ?> 
          