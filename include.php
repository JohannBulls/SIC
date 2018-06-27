<!--=======funcion================================-->
<?php
$archivo = basename($_SERVER['PHP_SELF']);
$c0=""; $c1=""; $c2=""; $c3=""; $c4=""; $c5="";$c6="";
if ($archivo=="index.php" || $archivo=="About.php") 
{ $c0="current"; }
if ($archivo=="menu.php")
{ $c1="current"; }
if ($archivo=="contacto.php")
{ $c2="current"; }
if ($archivo=="login.php"|| $archivo=="Registrar.php")
{ $c3="current"; }



if($archivo=="index.php")
{$ruta="vista/";
	}
	else{
	$ruta="";
	}
if($archivo=="index.php")
{$rutaa="images/";
	}
	else{
	$rutaa="../images/";
	}
		
if($archivo=="index.php")
{$ruti="css/

";
	}
	else{
	$ruti="../css/";
	}
		
if($archivo=="index.php")
{$rutii="js/

";
	}
	else{
	$rutii="../js/";
	}

?>
<!--=======styles================================-->
<html lang="en">
	<head>
	<title>SIC</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="stylesheet" href="<?php echo $ruti;?>grid.css">
	<link rel="stylesheet" href="<?php echo $ruti;?>style.css">
	<link rel="stylesheet" href="<?php echo $ruti;?>camera.css">
	<link rel="stylesheet" href="<?php echo $ruti;?>owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $ruti;?>touchTouch.css">

	<script src="<?php echo $rutii;?>jquery.js"></script>
	<script src="<?php echo $rutii;?>jquery-migrate-1.2.1.js"></script>
	<script src="<?php echo $rutii;?>touchTouch.jquery.js"></script>
	<script src="<?php echo $rutii;?>script.js"></script>
	<script src="<?php echo $rutii;?>wow.js"></script>
	
	<script src='<?php echo $rutii;?>camera.js'></script>
	<script src="<?php echo $rutii;?>owl.carousel.js"></script>
	<script src="<?php echo $rutii;?>jquery.stellar.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="<?php echo $rutii;?>jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="<?php echo $rutii;?>dife.js"></script>
	
	
<!--=======funcion_1================================-->
	<script>
		$(document).ready(function () {
			if ($('php').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>

<!--=======MENU_Tareas================================-->	
	
<head>
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					
					<h1><a href="<?php echo $ruta;?>../index.php">LOMO & PARRILLA<span>RESTAURANTE Y CAFETERIA</span></h1></a>
					<nav>
						<ul class="sf-menu">
															
								<li class="<?php echo $c0;?>"><a href="<?php echo $ruta;?>../index.php">Inicio</a></li>		
								<li class="<?php echo $c1;?>"><a href="<?php echo $ruta;?>menu.php">Menu</a><ul>
										
											<li><a href="vista/menu.php#Sopas">Sopas</a></li>
											<li><a href="vista/menu.php#Entradas">Entradas</a></li>
											<li><a href="vista/menu.php#Bebidas">Bebidas</a></li>
											
											
										</ul></li>
							
							<li class="<?php echo $c2;?>"><a href="<?php echo $ruta;?>contacto.php">Contactenos</a></li>	
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li class="<?php echo $c3;?>"><a href="<?php echo $ruta;?>login.php">
							<img src="<?php echo $rutaa?>User-Graphic-Icon.png" width="27"></a><ul>
											<li><a href="<?php echo $ruta;?>login.php">login</a></li>
											<li><a href="<?php echo $ruta;?>Registrar.php">Registrar</a></li>
										</ul></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<script>
// Inhabilitar el botón derecho
var DADrccolor = "#F1F1F1";
var DADrcimage = "<?php echo $rutaa?>DENEGADO.png";
</script>
<script type="text/javascript" src="http://yourjavascript.com/2122535051/antirightclick.js"></script>
</body>
</html>