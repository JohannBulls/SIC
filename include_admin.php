
	<?php
    session_start();
    if ($_SESSION['estado']!="1") {
        header("Location:../controlador/desconectar.php");
    }
    ?>
<!--=======funcion================================-->
<?php
$archivo = basename($_SERVER['PHP_SELF']);
$c0=""; $c1=""; $c2=""; $c3=""; $c4=""; $c5="";$c6="";
if ($archivo=="pag_admin.php" ) 
{ $c0="current"; }





if($archivo=="pag_admin.php")
{$ruta="../vista_administrador/";
	}
	else{
	$ruta="../vista_administrador/";
	}
if($archivo=="usuario.php")
{$rutaa="../images/";
	}
	else{
	$rutaa="../images/";
	}
		
if($archivo=="usuario.php")
{$ruti="../css/

";
	}
	else{
	$ruti="../css/";
	}
		
if($archivo=="../usuario.php")
{$rutii="../js/

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
	<link rel="stylesheet" href="<?php echo $ruti;?>style_tablas.css"></script>

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



	<link rel="stylesheet" href="<?php echo $ruti;?>style_form.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	
	
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
					
					<h1><a href="<?php echo $ruta;?>pag_admi.php">LOMO & PARRILLA<span>RESTAURANTE Y CAFETERIA</span></h1></a>
					<nav>
						<ul class="sf-menu">
															
								
							<li class="<?php echo $c3;?>"  data-toggle="modal" data-target="#myModal">
							<a><?php echo $_SESSION['nombre'];?>
							<img src="<?php echo $rutaa?>User-Graphic-Icon.png" width="27"></li></a>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<?php
       
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

      
        ?>
<script>
// Inhabilitar el botón derecho
var DADrccolor = "#F1F1F1";
var DADrcimage = "<?php echo $rutaa?>DENEGADO.png";
</script>
<script type="text/javascript" src="http://yourjavascript.com/2122535051/antirightclick.js"></script>

<!--ventana emergente cerar secion-->
 <center>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">  
     <div class="adsi-css">
       <div class="modal-body">
         <img src="<?php echo $rutaa?>1448784664user-icon.png" width="157" ><br><?php echo $_SESSION['nombre'];?>
       </div>      
         <div class="modal-footer">
             <a href="perfil.php"> <button type="button"   class="l, boton_personalizado">Perfil</button></a> 
         <a href="../controlador/desconectar.php"><button type="button"  class="l, boton_rojo">Cerrar sesion</button></a>
       </div>       
     </div>
 </center>
    </div>
  </div>
</body>
</html>