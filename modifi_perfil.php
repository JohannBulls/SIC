
<?php

    session_start();
    if ($_SESSION['estado']!="1") {
        header("Location:../controlador/desconectar.php");
    }
 require("../../controlador/conecxion.php");

 $nombre=($_SESSION['nombre']);

 $mysql->query("update registro set nombre=('$_REQUEST[name]'), apellido=('$_REQUEST[Apellido]'),  Documento=('$_REQUEST[Documento]'), telefono=('$_REQUEST[telefono]'), pasadmin=('$_REQUEST[pasadmin]'), pregunta=('$_REQUEST[Pregunta]'), respuesta=('$_REQUEST[Respuesta]') where registro.nombre = '$nombre'") or
die($mysql->error);

echo"<script type=\"text/javascript\">alert('Datos actulizados con exito'); window.location='../perfil.php';</script>"; 
 
 $mysql->close();
 ?>