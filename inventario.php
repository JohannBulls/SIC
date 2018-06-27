<?php
 require("../controlador/conecxion.php");

 $registros=$mysql->query("SELECT inventario.id,producto,cantidad,inventario.descripcion,codigo,valor,valorCantidad,categoria.nombre FROM `inventario` JOIN categoria on inventario.idcate=categoria.id ORDER BY `inventario`.`id` ASC") or die($mysql->error);

  echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">Num</th><th class="center">Nom producto</th><th class="center">Cantidad</th><th class="center">Descripción</th><th class="center">Codigo</th><th class="center">Valor</th><th class="center">Valor por Cantidad</th><th class="center">categoria</th><th class="center">Modificar</th><th class="center">Eliminar</th>';
 echo '</td>';
 
 while ($reg=$registros->fetch_array())
 {
 echo '<tr>';
 echo '<td>';
 echo $reg['id'];
 echo '</td>';
 echo '<td>';
 echo $reg['producto'];
 echo '</td>';
 echo '<td>';
 echo $reg['cantidad'];
 echo '</td>';
 echo '<td>';
 echo $reg['descripcion'];
 echo '</td>';
 echo '<td>';
 echo $reg['codigo'];
 echo '</td>';
 echo '<td>';
 echo $reg['valor'];
 echo '</td>';
 echo '<td>';
 echo'<center>';
 echo $reg['valorCantidad'];
 echo'</center>';
 echo '</td>';
  echo '<td>';
 echo $reg['nombre'];
 echo '</td>';
 echo '<td>';
 echo '<a href="modi_inventario.php?id='.$reg['id'].'"><img src="../images/modificar.png" width="33"></a>';
 echo '</td>';
 echo '<td>';
 echo '<a href="borrar/borrar_inventario.php?id='.$reg['id'].'"><img src="../images/borrar.png" width="33"></a>';
 echo '</td>';
 echo '</tr>';
 }
 echo '<table>';
 $mysql->close();
 ?> 
          
          