<?php
			  ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 require("../controlador/conecxion.php");

 $registros=$mysql->query("SELECT * FROM `proveedores`") or die($mysql->error);

  echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">num</th><th class="center">nombre int</th><th class="center">nombres proveedor </th><th class="center">productos</th><th class="center">telefonos</th><th class="center">Modificar</th><th class="center"> Eliminar</th>';

 echo '</td>';
 while ($reg=$registros->fetch_array())
 {
 echo '<tr>';
 echo '<td>';
 echo $reg['id_proveedor'];
 echo '</td>';
 echo '<td>';
 echo $reg['nombre'];
 echo '</td>';
 echo '<td>';
 echo $reg['nombreprove'];
 echo '</td>';
 echo '<td>';
 echo $reg['producto'];
 echo '</td>';
 echo '<td>';
 echo $reg['telefono'];
 echo '</td>';
 echo '<td>';
 echo '<a href="modi_proveedor.php?id_proveedor='.$reg['id_proveedor'].'"><img src="../images/modificar.png" width="33"></a>';
 echo '</td>';
 echo '<td>';
 echo '<a href="borrar/borrar_proveedor.php?telefono='.$reg['telefono'].'"><img src="../images/borrar.png" width="33"></a>';
 echo '</td>';
 echo '</tr>';
 }

 echo '<table>';
 $mysql->close();
 ?> 