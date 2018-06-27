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
	$D=($_POST['Documentoo']);
	$R=($_POST['Respuesta']);
	  
$registro=$mysql->query("SELECT nombre,apellido,Documento,telefono,password,rol,pregunta,respuesta FROM registro where Documento = '$D' and respuesta = '$R'") or
 die($mysql->error);  
                
 if ($reg=$registro->fetch_array())
 {
 ?>
      
    
       <br>
<h7> 
USUARIO:
	<?php echo $reg['nombre']; echo " "; echo $reg['apellido']; ?>
	<br><br> 					NUEVA CONTRASEÑA<br>
	<h9>Ingrese una nueva contraseña</h9> <br><br> 
 <form name="areat" method="post"action="recuperar_Cxn_amd_2.php">
               
         
<input type="Documento" class="adsi-css" name="Documento"   style="width:250px; height:40px"placeholder="Documento" value="<?php echo $reg['Documento']; ?>" required autofocus readonly > 
<br>
<input type="password" class="adsi-css" name="Nueva" placeholder="Nueva contraseña" required autofocus style="width:250px; height:40px">
</h7>
<br>

  <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:180px"<input type="submit" name="login">ENVIAR </button>

</form>


  <?php
 }

 else
 {
  echo '<script>alert("Contraseña Incorrecta")</script>';
	 echo "<script>location.href='../vista/recuperar_Cxn.php'</script>";
}
 $mysql->close();
 ?>           
                                 
          
          
            <br>   
            
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