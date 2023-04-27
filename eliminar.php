<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tusuarios.php");
    }
?>
