<?php 
 $mysql=new mysqli("localhost","root","","sic");
 if ($mysql->connect_error)
 die("Problemas con la conexiأ╠n a la base de datos");
 
 $numero=$_POST['puesto'];
  $mesa=$_POST['num'];
 
$registros=$mysql->query("insert into mesa (idmesa,descripcion) values('$mesa','$numero')") or die('no inserto datos');
echo"<script type=\"text/javascript\">alert('el valor se guardo'); window.location='../insertar_mesa.php';</script>"; 
  
 
?>
