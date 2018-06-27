   <?php
session_start();
if (empty($_SESSION['nombre'])) {header("Location: ../cerrar.php");}


$mysql=new mysqli("localhost","root","","sic");
		if ($mysql->connect_error)die("Problemas con la conexion a la base de datos");
		   
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
    
 


	$arreglo=$_SESSION['carrito'];

$nombre=$_SESSION['nombre'];
$registro=$mysql->query("SELECT * FROM `registro` where nombre ='$nombre'") or die('error tabla');

while (	$reg=$registro->fetch_array()) {
		$cliente=$reg['codigo'];
			
		}


		$numeroventa=0;
		$registros=$mysql->query("select * from compras ") or die('seleccionando compras');	


		while (	$reg=$registros->fetch_array()) {
			$numeroventa=$reg['Id'];
			
		}



		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=1; $i<count($arreglo);$i++){
			
			$cantidad=$_POST['cantidad'];
			
			$registros=$mysql->query("insert into compras (id,imagen,fecha,nombre,precio,cantidad,subtotal,idmesa,estado)values(
				".$numeroventa.",
				'".$arreglo[$i]['Imagen']."',
				'$fecha',
				'".$arreglo[$i]['Nombre']."',	
				'".$arreglo[$i]['Precio']."',
				'$cantidad',
				'".($arreglo[$i]['Precio']*$cantidad)."',
				'$_REQUEST[codigocategoria]','porentregar'
				)")or die('mal');
			
			$producto=$arreglo[$i]['Nombre'];
			$venta=$numeroventa;
			$fechas=$fecha;
			$mesa=$_REQUEST[codigocategoria];
				$registro=$mysql->query("insert into factura (cliente,idcompras,fecha,total)values(
				'".$cliente."',
				'".$venta."',	
				'".$fechas."',
				'".($arreglo[$i]['Precio']*$cantidad)."'
				)")or die('mal');
			
			 $mysql->query("update mesa set estado=('ocupado') where idmesa =('$_REQUEST[codigocategoria]')") or
die('error a modificar');
			
		}

unset($_SESSION['carrito']);
echo"<script type=\"text/javascript\">alert('su pedido ha sido enviado'); window.location='../factura_cliente.php';</script>";	
 ?> 




