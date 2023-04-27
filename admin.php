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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<nav class="navbar">
			
			<div class="contenedor">
				<img src="imagen/SGIE.jfif"  width="500" height="100" HSPACE="20" VSPACE="20" >
				<br>
				
				<a href="admin.php">Inicio</a>

				<a href="tusuarios.php">Usuarios</a>
				<a href="tintituciones.php">Institucion</a>
				<a></a>
				<a></a>
				<a href="cerrarsesion.php">Cerrar sesión</a>
		
				
		
			</div>
		</nav>
		
	</header>
	<main id="blog">
		<div class="contenedor">
			
			<div class="contenido">
				<div class="post">
					<h1 class="titulo">Bienvenido ADMIN</h1><br/>
                    <img src="imagen/cobach.jpg" width="300" height="300">
					
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
                
                <p class="copy">© 2023 cobach | TODO LOS DERECHOS RESERVADO </p>
            </div>
        </footer>
</body>
</html>