<?php
session_start();

require("conecxion.php");

$Documento=$_POST['Documento'];
$password=$_POST['password'];
$pasaemple=$_POST['pasaemple'];

	//la variable  $mysqli viene de connect_db que lo traigo con el require("conecxion.php");
//Usuario
	$sql=mysqli_query($mysql,"SELECT * FROM registro WHERE Documento='$Documento'and password=sha1('$password')");
	if($f=mysqli_fetch_assoc($sql)){

			$_SESSION['codigo']=$f['codigo'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['Documento']=$_POST['Documento'];
			$_SESSION['rol']=$f['rol'];
			$_SESSION['estado']=1;
			echo '<script>alert("BIENVENIDO USUARIO")</script> ';
			echo "<script>location.href='../vista/About_usu.php'</script>";

		} else{
		
		}
//Empleados
		$sql3=mysqli_query($mysql,"SELECT * FROM registro WHERE Documento='$Documento'");
	if($f3=mysqli_fetch_assoc($sql3)){
              if($password==$f3['pasaemple']){
			$_SESSION['codigo']=$f3['codigo'];
			$_SESSION['nombre']=$f3['nombre'];
			$_SESSION['Documento']=$_POST['Documento'];
			$_SESSION['rol']=$f3['rol'];
			$_SESSION['estado']=1;
			echo '<script>alert("BIENVENIDO EMPLEADO")</script> ';
			echo "<script>location.href='../vista_emple/emple.php'</script>";
			}  
		} else{
		
		}
//Administrador
	$sql2=mysqli_query($mysql,"SELECT * FROM registro WHERE Documento='$Documento'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($password==$f2['pasadmin']){
			$_SESSION['codigo']=$f2['codigo'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['Documento']=$_POST['Documento'];
			$_SESSION['rol']=$f2['rol'];
			$_SESSION['estado']=1;
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../vista_administrador/pag_admi.php'</script>";
		
		}
		else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../vista/login.php'</script>";
		}
	}

//NO EXISTE
	else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../vista/Registrar.php'</script>";	

	}

?>