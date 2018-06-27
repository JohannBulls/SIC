<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Contact</title>
		
<link rel="shortcut icon" type="../image/ico" href="../images/lom.png">
</head>
<body >
<!--==============================header=================================-->
<?php
include "include_usu.php";
?>
<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
					<h2><span></span></h2>
						<h2 class="h1">Contactenos</h2>
						<br>
					</header>
					
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_5">
               <table>
               <tr><td>
					<form id="contact-form">
						<div class="contact-form-loader"></div>
							<header>
                            
								<h2 class="h1">Formulario</h2>
							</header>
							     <h6>LOMO & PARRILLA te ofrece una excelente atencion, puedes contactarnos telefonicamente, via internet por correo o visitando nuestro restaurante, puedes dejarnos tus opiniones.  </h6> <br>
   <h7>Nombre </h7><input type="nombre" id="nombre" name="nombre"  class="adsi-css" placeholder="Nombre" required/><br/>
      
      <br>  
      <h7>Email   </h7>    
      <input type="email" id="email" name="email"   class="adsi-css" placeholder="Email"  required/><br/>
      <br>
      <h7>Asunto   </h7>    
      <input type="text" id="asunt" name="asunt"  class="adsi-css" placeholder="Asunto" required/><br/>
      <br>
      <h7>Mensaje </h7>   
      <br>
      <br>
      <textarea style="width:400px; height: 120px;" id="text" name="text" class="adsi-css"  placeholder="Mensaje" required></textarea>
      <br>
      <input type="submit" title="" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:290px" required>
       <br>
         	</form>
					</td><td>
				</div>
				<div  class="ceet-css" style="auto"><br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2094.2981098053483!2d-74.07806692974321!3d4.698466734640058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b282791884b%3A0x2f5922c8b1e45690!2sLomo+Y+Parrilla!5e0!3m2!1ses!2sco!4v1521237692695" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br>


</td> </tr>
</table>
				</div>
			</div>
		</div>
	</div>
	<br>
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