<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Contraseña</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body class="indexx">
<BODY oncontextmenu="return false" onselectstart="return false" ondragstart="return false"> 
<!--==============================header=================================-->
<?php
include "../controlador/include.php";

?>
<!--=======content================================-->
 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <div id="genaeral">
<center>
  	
   
                          
           <br>
            <img src="../images/user-icon.png" width="150">
            <br>
               <br>   
               <!--=======formulario================================-->   
              
                     <?php
	require("../controlador/conecxion.php");
	$D=($_POST['Documento']);
	
					
$mysql->query("update registro set pasaemple= (('$_REQUEST[Nueva]')) where registro.Documento=('$D')") or
 die($mysql->error);
echo '<script>alert("Contraseña Modificada con exito!")</script>';
	 echo "<script>location.href='../vista/login.php'</script>";

 $mysql->close();
 ?>
 
            
            </div>
           </div>
         
            </div>
<!--=======footer=================================-->
<footer id="footer">
	<div class="footer_bottom">
	<a href="" rel="nofollow"><img src="../images/footer-logo.png" alt="logo">
	</a></div>
</footer>
<!--=======controlador=================================-->
<?php
include "../controlador/barra_fin_tarea.php";	
?>
</body></body>
</html>