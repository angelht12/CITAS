<?php
include("conexion.php");
$con=conectar();

    $id = $_POST['id'];    
    $numero = $_POST['numero'];
    $tipo = $_POST['tipoTramite'];
    $fecha= $_POST['fechaAtencion'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estadoCurso'];
    $correo = $_POST['correo'];
    
    


   
    $sql="INSERT INTO institucion VALUES('','$numero','$tipo','$fecha','$municipio','$estado','$correo')";
    $query= mysqli_query($con,$sql);
    
    if($query){
        Header("Location: indexusuario.php");
        
    }else {
        ?>
        <?php
        include("admin.php");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }



?>