<?php
	 ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
 
require("../controlador/conecxion.php");

 $buscar = $_POST['T1'];

 $registros=$mysql->query("SELECT id,fecha,nombre,precio,cantidad,subtotal FROM `compras` WHERE nombre like '%$buscar%' or fecha like '%$buscar%' ORDER BY `compras`.`Id`  ASC") or die($mysql->error);

 $CantidadMostrar=20;
//Conexion  al servidor mysql
$conetar = new mysqli("localhost", "root", "", "sic");
if ($conetar->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conetar->connect_errno . ") " . $conetar->connect_error;
}else{
                    // Validado de la variable GET
        $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
	$TotalReg       =$conetar->query("SELECT id,fecha,nombre,precio,cantidad,subtotal FROM `compras` WHERE nombre like '%$buscar%' or fecha like '%$buscar%' ORDER BY `compras`.`Id`  DESC");
	
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 
	$TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
	
	//Consulta SQL
	$consultavistas ="SELECT id,fecha,nombre,precio,cantidad,subtotal FROM `compras` WHERE nombre like '%$buscar%' or fecha like '%$buscar%' ORDER BY `compras`.`Id`  DESC
						LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
	$consulta=$conetar->query($consultavistas);
	
  echo '<table id="tabla_articulos" class="table1">';
 echo'<thead >';

 echo '<tr><th class="center">Cod</th><th class="center">Fecha</th><th class="center">Nombre</th><th class="center">Precio</th><th class="center">cantidad</th><th class="center">subtotal</th>';
	
	while ($lista =$consulta->fetch_row()) {
	     echo "<tr><td>".$lista[0]."</td><td>".$lista[1]."</td><td>".$lista[2]."</td><td>".$lista[3]."</td><td>".$lista[4]."</td><td>".$lista[5]."</td></tr>";
	}
	    echo "</table><br><br><br>";
     
    /*Sector de Paginacion */
    
    //Operacion matematica para botón siguiente y atrás 
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
  	$DecrementNum =(($compag -1))<1?1:($compag -1);
  
	echo "<ul><li class=\"btn\"><a href=\"?pag=".$DecrementNum."\">◀</a></li>";
    //Se resta y suma con el numero de pag actual con el cantidad de 
    //números  a mostrar
     $Desde=$compag-(ceil($CantidadMostrar/2)-1);
     $Hasta=$compag+(ceil($CantidadMostrar/2)-1);
     
     //Se valida
     $Desde=($Desde<1)?1: $Desde;
     $Hasta=($Hasta<$CantidadMostrar)?$CantidadMostrar:$Hasta;
     //Se muestra los números de paginas
     for($i=$Desde; $i<=$Hasta;$i++){
     	//Se valida la paginacion total
     	//de registros
     	if($i<=$TotalRegistro){
     		//Validamos la pag activo
     	  if($i==$compag){
           echo "<li class=\"active\"><a href=\"?pag=".$i."\">".$i."</a></li>";
     	  }else {
     	  	echo "<li><a href=\"?pag=".$i."\">".$i."</a></li>";
     	  }     		
     	}
     }
	echo "<li class=\"btn\"><a href=\"?pag=".$IncrimentNum."\">▶</a></li></ul>";
  
}
 $mysql->close();
 ?> 