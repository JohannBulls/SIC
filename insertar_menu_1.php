
<?php
require("../../controlador/conecxion.php");
 
$nombreimg =$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="../../platos";
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);

$mysql->query("INSERT INTO productos (nombre,descripcion,imagen,precio)VALUES('$_REQUEST[nombre]','$_REQUEST[descripcion]','".$ruta."','$_REQUEST[precio]')");

if($mysql){
	echo '<script>alert("INSERTADO CON EXITO!!")</script> ';
			echo "<script>location.href='../pagi_menu.php'</script>";
}else{
	echo '<script>alert("ERROR Al SUBIR ARCHIVO")</script> ';
			echo "<script>location.href='../insertar_menu.php'</script>";
}

 $verificar_producto = mysqli_query(require("../../controlador/conecxion.php"), "SELECT * FROM productos WHERE nombre = '$_REQUEST[nombre]' ");
 if (mysqli_num_rows($verificar_producto) >0) {
 	header('Location: ../pagi_menu.php');
 	exit;
 }


 
?>