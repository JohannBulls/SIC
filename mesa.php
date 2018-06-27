<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");

 $buscar = $_POST['T1'];
 $registros=$mysql->query("SELECT idmesa,descripcion FROM mesa ") or die($mysql->error);

 echo '<table id="tabla_articulos" class="table1">';
 echo'<thead>';

 echo '<tr><th class="center">numero mesa</th><th class="center">cantidad puestos</th><th class="center">Eliminar</th>';
 

 while ($reg=$registros->fetch_array())
 {
 echo '<tr>';
 echo '<td>';
 echo '<center>'.$reg['idmesa'];
 echo '</td>';
  echo '<td>';
 echo '<center>'.$reg['descripcion'];

 echo '</td>';
 echo '<td >';
 echo '<center>'.'<a href="borrar/borrar_mesa.php?idmesa='.$reg['idmesa'].'"><img src="../images/borrar.png" width="33"></a>';
 echo '</td>';
 echo '</tr>';
 }
    
 echo '<table>';
 $mysql->close();
					
?>			

	
		
					