<?php

include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$pass=$_POST['pass'];
$tipoUsuario=$_POST['tipoUsuario'];

$sql="UPDATE usuarios SET  nombre='$nombre',apellido='$apellido',correo='$correo', telefono='$telefono', pass='$pass', tipoUsuario='$tipoUsuario' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../tusuarios.php");
    }
?>