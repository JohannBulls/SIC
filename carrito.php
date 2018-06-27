<?php
session_start();
if (empty($_SESSION['nombre'])) {header("Location: ../cerrar.php");}
?>
  
     
   <?php
require("../controlador/conecxion.php");	
 
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$registros=$mysql->query("select * from productos where id=".$_GET['id']);
						while ($reg=$registros->fetch_array()) {
							$nombre=$reg['nombre'];
							$precio=$reg['precio'];
							$imagen=$reg['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}

	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$registros=$mysql->query("select * from productos where id=".$_GET['id']);
			while ($reg=$registros->fetch_array()) {
				$nombre=$reg['nombre'];
				$precio=$reg['precio'];
				$imagen=$reg['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
	<title>Administrador</title>
	
	</head>
<body class="indexx1">

<!--==============================conectar link=================================-->
  
  
  <?php include "include_usu.php"; ?>

<!--=======COMANDO FFECHA========================-->
 <?php
       
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

      
        ?>

        
         
                             
 <center>
 <section id="content">
	<div class="full-width-container block-1">
		
            <br>
            <br>
            
				<div class="grid_6">
				      <header>					

                               <br><br><br>
                                
</div></h7></font><h7><font color="#000000"><div class="adsi-css"  style="auto"><h6><font color="#000000"><?php echo $fecha; ?></h6></font></div>
</div></h7></font>
					</header>
                    	
</div>							
</div>
</div>
<center>
</body>
 <body class="index-2">     

     
				
   
				<!--=======titulo================-->
											<!--=======fondo imagen================-->
							<div class="full-width-container block-3">
				
<!--=======contenedor principal================-->
          <font color="#000000"><div class="ceet-css"  style="auto"><h6>
          
       
     
				   <section>  

<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
   <form name="insertar" method="post" action="compras/comprar.php">
   
				<div class="producti">
				<table>
				<td>
					<center>
						<img src="../platos/<?php echo $datos[$i]['Imagen'];?>" width="50"><br>
						<center>						
						<span><p class="p"><?php echo $datos[$i]['Nombre'];?></p></span></font>					
								
						<h7><span>Precio: $ <?php echo $datos[$i]['Precio'];?></span><br><br></h7> 
						<span><input class="adsi-css" style="width: 32px; height: 20px " type="number"  style="auto" name="cantidad" >
							</center>

						</span><br><span style="color: maroon" Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?>></span>
                        <br> 
						</td>
					</center>
					</tr>
					</table>
				</div>
   
   
   
   
 
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadirdo ningun producto</h2></center>';
			}
		
			
		?>

<br><br><br>
<h8>Seleccione su mesa</h8>
 <select name="codigocategoria" class="adsi-css" style="width: 32px; height: 20px ">
 
 <?php
require("../controlador/conecxion.php");
	 
 $registros=$mysql->query("select idmesa from mesa where estado ='disponible'") or
 die('error a selecionar la base de datos');
 while ($reg=$registros->fetch_array())
 {
 
 echo "<option value=\"".$reg['idmesa']."\" >".$reg['idmesa']."</option>";
 }
 ?>
 </select>
 
</tr><tr>
          <input type="submit" value="Comprar" name="t" class="anadir" style="font-size: 29px">	
</form>
	 	<?php 
   
require("../controlador/conecxion.php");
     $registros=$mysql->query("SELECT id,nombre,precio,cantidad FROM `compras`") or die($mysql->error);?>
			<center><a href="./menu_usu.php" ><h3><p class="l"style="color: black">Ver menu</p></h3></a></center>
		 

	
			
					</font>

					</div>
						</div>

						</div>
				</div>
         </div>
 </div>  
          
          
          
          
				<div id="touch_gallery">
					<div class="grid_3">
					
						<article>
                        <h4><em style="color:#F00"></em> </h4>
                      
						</article>
			</div>
			</div>
		</div>
	</div>
</section>


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