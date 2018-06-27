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
		
			<center>
			<div  class="coot-css" style="auto"><br><br>
			
		<?php
				
	require("../controlador/conecxion.php");
 
		$registros=$mysql->query("select * from productos where id = ".$_GET['id'])or die('mal');
		while ($reg=$registros->fetch_array()) {
		?>
			<div class="ceet-css" style="auto">
			<center><table><tr></tr><td>
			<br>
				<img src="../platos/<?php echo $reg['imagen'];?>" width=300px><br><br></td>
					<td width="25px"></td>
				<td width="250px">	
				<br><br>
				<h7><font size="18px"><span><?php echo $reg['nombre'];?></span><br><br></h7></font>
				<h7><?php echo $reg['descripcion'];?><br><br>
				<font size="6px"><span>Precio: $ <?php echo $reg['precio'];?></span><br></font>
					<center><br>
				<a href="./carrito.php?id=<?php  echo $reg['id'];?>"><button type="button" title="Agregar al carrito" class="anadir">
                        <img class="icon-add-to-cart" style="width: auto;" src="https://gzip-resources.aws.alkosto.com/skin/frontend/base/default/images/carrito-ak-23x23.png">&nbsp;Agregar al carrito        </button></a>
				</table>
			</center>
		
	<?php
		}
	?>
		</div></div>
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