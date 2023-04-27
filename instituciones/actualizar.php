<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM institucion WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="numero" placeholder="Numero" value="<?php echo $row['numero']  ?>">
                                <input type="text" class="form-control mb-3" name="tipoTramite" placeholder="tipoTramite" value="<?php echo $row['tipoTramite']  ?>">
                                <input type="date" class="form-control mb-3" name="fechaAtencion" placeholder="Fecha de Atencion" value="<?php echo $row['fechaAtencion']  ?>">
                                <input type="text" class="form-control mb-3" name="municipio" placeholder="Municipio" value="<?php echo $row['municipio']  ?>">
                                <input type="text" class="form-control mb-3" name="estadoCurso" placeholder="Estado" value="<?php echo $row['estadoCurso']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                                
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">