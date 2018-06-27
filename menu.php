<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Menu</title>
	
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body class="indexx1">
<!--==============================header=================================-->
<?php
include "../controlador/include.php";

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
						<h2><font color="#000000">Menu</h2></font>
						
						
					</header>
					
				</div>							
				</div>
			</div>
			<center>
<div id="Sopas">	
		<?php
include "../controlador/platos/sopas.php";

?>
				</div>
	<br><br><br><br>
		<br><br><br>
	
<div id="Entradas">		
			<?php
include "../controlador/platos/entradas.php";

?>
</div>
	<br><br><br><br><br><br><br>
	<div id="Bebidas">	
			<?php
include "../controlador/platos/bebidas.php";

?>
				</div>
		<br><br>
			</center>					
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
</body>
</html>