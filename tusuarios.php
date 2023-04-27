
<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['correo'];
if($varsesion== null || $varsesion=''){
    header("location:index.php");
    die();
}
?>
<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM usuarios";
    if (isset($_POST['buscar'])) {
    	$correo=$_POST['correo'];
    	$sql="SELECT * FROM usuarios where correo like '%$correo%'";
    }

    
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuario</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<nav class="navbar">
			
			<div class="contenedor">
				<img src="imagen/SGIE.jfif" width="400" height="70" HSPACE="20" VSPACE="20">
				<br>
				
				<a href="admin.php">Inicio</a>

				<a href="tusuarios.php">Usuarios</a>
                <a href="tintituciones.php">Instituciones</a>
				<a></a>
				<a></a>
                <a href="cerrarsesion.php">Cerrar sesión</a>
		
				
		
			</div>
		</nav>
		
	</header>
	

	<main id="blog">
		<div class="contenedor">

        <div class="container mt-5">
                    <div class="row"> 
					<div class="contenido">
				<div class="post">
					<h1 class="titulo">Usuarios</h1>
					
				</div>        
                        <div class="col-md-8">
                             <div style="text-align: letf" >
                             </div>
                        	<form action="tusuarios.php" method="post"> 
                        		<div class="row">
                        			<div class="col-6">
                        				<input type="text"  name="correo" class="form-control" placeholder="Buscar usuario por correo">
                        			</div>
                        			<div class="col-6">
                        				<input type="submit" value="Buscar" name="buscar" class="btn btn-secondary">
                                        <th><a href="imprimir.php" class="btn btn-danger">Imprimir reporte</a></th>
                        			</div>
                                    
                                    
                        		</div>
                        	</form>
                            <div class="table">
                                <style>
                                    
                                    .table{
                                        
	                                    border-collapse: collapse;
                                        overflow-x: auto;
	                                    min-width: auto;
                                        
                                        }
                                        .table-container {
                                            overflow-x: auto;
                                            

                                        }
                                        .table-rwd {
                                            min-width: 500px;

                                        }

                                </style>
                                
                            <table class="table mt-3" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
										<th>Teléfono</th>
										<th>Contraseña</th>
										<th>Tipo usuario</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['correo']?></th> 
												<th><?php  echo $row['telefono']?></th>
												<th><?php  echo $row['pass']?></th> 
												<th><?php  echo $row['tipoUsuario']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th> 
                                                                                         
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                                   
                            </table>

                            </div>
                            
                        </div>
                    </div>  
            </div>
            
        </div>
			
			
		


	</main>

	<footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">CONTACTANOS</h2>
                    <p class="column__txt">Blvd. Presa Chicoasen No. 950
										Tuxtla Gutiérrez, Chiapas</p>
               		<p class="column__txt">Telefono: 9191651810</p> 
                </div>
                
                <p class="copy">© 2023 cobach | TODOS LOS DERECHOS RESERVADOS </p>
            </div>
    </footer>
</body>
</html>