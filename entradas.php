<div class="adsi-css"><h3><font color="#000000">Entradas</h3></font></div><br><br>
<div  class="ceet-css" style="auto"><br><br>
<!--Platos-->
<!--Entradas-->
<?php
	if ($gestor = opendir('../platos/Entrada')) {   
		echo "<table>";   
		echo "<tr>";   
		$i=0;   
		while (($archivo = readdir($gestor)))   {      
			if ($archivo!="." && $archivo!="..")      
			{             
				if ($i==4)
				{                
					$i=0;                   
					echo "</tr>";                    
					echo "<tr>";
				echo "<tr height='30px'>"; echo "<tr>"; echo "<tr>"; 
			
				}         
				$i++;             
				echo "<td width='30px'>"; echo "<td>"; echo "<td>";            
				echo "<a href=login.php><img src=../platos/Entrada/$archivo width='200px' height='200px'> </a>";            
				echo "</td>";          }   }   
		echo "</tr>";   echo "</table>";   closedir($gestor); }

?>
<br><br></div>