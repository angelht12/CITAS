<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$pass=$_POST['pass'];
$tipoUsuario=$_POST['tipoUsuario'];


$sql="INSERT INTO usuarios VALUES('','$nombre','$apellido','$correo','$telefono','$pass','$tipoUsuario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
    ?>
    <?php
    include("admin.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
?>