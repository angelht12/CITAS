<?php

include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$numero=$_POST['numero'];
$tipoTramite=$_POST['tipoTramite'];
$fechaAtencion=$_POST['fechaAtencion'];
$municipio=$_POST['municipio'];
$estadoCurso=$_POST['estadoCurso'];
$correo=$_POST['correo'];


$sql="UPDATE institucion SET  numero='$numero',tipoTramite='$tipoTramite', fechaAtencion='$fechaAtencion', municipio='$municipio', estadoCurso='$estadoCurso', correo='$correo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../tintituciones.php");
    }
?>