 <link href="../../css/style_form.css">
 <?php
require("../controlador/conecxion.php");

 $registros=$mysql->query("SELECT * FROM `productos` ORDER BY id") or die($mysql->error);

  echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">Cod</th><th class="center">Nombre</th><th class="center">Descripción</th><th class="center">Precio</th><th class="center">Imagen</th><th class="center">Estado</th><th class="center">Modificar</th><th class="center">Eliminar</th>';
 
  echo '</td>';

 
 while ($reg=$registros->fetch_array())
 {
 echo '<tr>';
 echo '<td>';
 echo $reg['id'];
 echo '</td>';
 echo '<td>';
 echo $reg['nombre'];
 echo '</td>';
 echo '<td width="220px">';
 echo $reg['descripcion'];
 echo '</td>';
 echo '<td>';
 echo '$ '.$reg['precio'];
 echo '</td>';
 echo '<td>';
 echo $reg['imagen'];
 echo '</td>';
 echo '<td>';
 echo '<a class="l" href="insertar/insertar_estado_plato.php?id='.$reg['id'].'"><img src="../images/chulo.png" width="33"></a>';
  echo '<a class="l" href="insertar/insertar_estado.php?id='.$reg['id'].'"><img src="../images/equis.png" width="33"></a>';
echo '</td>';

 echo '<td>';
 echo '<a href="modi_menu.php?id='.$reg['id'].'"><img src="../images/modificar.png" width="33"></a>';
 echo '</td>';
 echo '<td>';
 echo '<a href="borrar/borrar_menu.php?id='.$reg['id'].'"><img src="../images/borrar.png" width="33"></a>';
 echo '</td>';
 echo '</tr>';
 }

 echo '</table>';


 $mysql->close();

 ?> 