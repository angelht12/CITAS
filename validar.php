<?php


$correo=$_POST['correo'];
$pass=$_POST['pass'];
session_start();
$_SESSION['correo']=$correo;


$conexion=mysqli_connect("localhost","refacc94_refacc94_sgie","mm3]+rF38JyZS0","refacc94_sgie");

$consulta="SELECT*FROM usuarios where correo='$correo' and pass='$pass'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_fetch_array($resultado);


if($filas['tipoUsuario']==1){ //administrador
    header("location:admin.php");


}else
if($filas['tipoUsuario']==2){ //usuario
   
header("location:indexusuario.php");
    
   


}

else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
