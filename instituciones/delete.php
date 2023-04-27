<?php

include("../conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM institucion  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../tintituciones.php");
    }
?>
