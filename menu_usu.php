<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Menu</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body class="indexx1">
<!--==============================header=================================-->
<?php
include "include_usu.php";
?>

<!--=======content================================-->
 <div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
 <center>
 <section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>					
						<h11><font color="#000000"><label style="font-weight: 500">Menu</h11></font>
						
						<br><br><br><br>
					</header>
					
				</div>							
				</div>
			</div>
			<center>
			<div class="ceet-css" style="auto"><br><br>
			
			
			<?php
	require("../controlador/conecxion.php");				
		
 
		$registros=$mysql->query("SELECT nombre,id,imagen FROM `productos` where estado ='activo'")or die('mal');
		while ($reg=$registros->fetch_array()) {
		?>
			<div class="producto">
			<center>
				<a href="./Detalles.php?id=<?php  echo $reg['id'];?>"><img src="../platos/<?php echo $reg['imagen'];?>"></a>
			
			
			</center>
		</div>
	<?php
		}
	?>			<br><br></div>
				<br><br>
			</center>					
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
</body>
</html>