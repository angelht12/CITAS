
<?php
session_start();
error_reporting(0);
$varsesion= $_SESSION['correo'];
if($varsesion== null || $varsesion=''){
    header("location:index.php");
    die();
}


include("conexion.php");


$correo = $_SESSION['correo']; 
$conexion=mysqli_connect("localhost","root","","sgie");

$sql = "SELECT * FROM usuarios WHERE correo = $correo";

$resultado=mysqli_query($conexion,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CITAS</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/dise.css">

    <style>
        a{
            display: block;
            width: 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 800;
            background-color: #ee0d18;
            border-radius: 10px;
            padding: 10px;
            margin: 40px 20px;
            color: #0f0e0e;
            text-decoration: none;
        }

        a:hover{
            background-color: transparent;
            border: 2px solid rgb(127, 206, 255);
            color: rgb(127, 206, 255);
        }
    </style>
</head>
<body>
    
	<header>
        <img src="img/SGIE.png" width="300" height="60" HSPACE="20" VSPACE="20" >
				
        <a href="cerrarsesion.php"   >Cerrar sesión</a>
    
		
        
	</header>
	 

	<main id="blog">
		<div class="contenedor">
			<div class="contenido">
				<div class="post">
					<h1 class="titulo" style="font-weight: bolder;" align="center">BIENVENIDO:</h1>
					<br>
					<h2 align="center"><?php echo("$correo");?></h2>

            

                    
				</div>
                
			</div>
            
		</div>
        <main id="blog">
		<div class="contenedor">
			<div class="contenido">
				<div class="post">
					<h1 class="titulo" style="font-weight: bolder;" align="center"></h1>
				</div>
			</div>
		</div>
		<section class="form-register animated zoomIn">


    <h1>Registro de la institución</h1>
    <br>
        <form action="agregar.php" method="POST">
             <label align= "horizontal" for="username">Número de plantel: </label>
            <br>
            <input  type="hidden"  class="form-control mb-3" name="id" value="4">
            <input type="text" class="form-control mb-3" name="numero" placeholder="numero">
           <br>
           <label align= "horizontal" for="username">Motivo del trámite: </label>
           <br>
            <select type="text" name=tipoTramite class="form-control mb-3" style="width:300px";>
                <option disabled selected="">   SELECCIONE UNA OPCIÓN   </option>
                <option value="curso faro">   Curso de FARO   </option>
                <option value="curso pva">   Curso de PVA   </option>
                <option value="configuracion de antena">   Configuración de antenas   </option>
                <option value="actualizacion de faro">   Actualización de FARO   </option>
                <option value="instalacion de faro">   Instalación de FARO   </option>
            </select>
            
            <br>
            <br>
            <input type="hidden" class="form-control mb-3" name="fechaAtencion" value="2023-03-30">
            <label align= "horizontal" for="username">Municipio: </label>
            <br>
            <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio">
           
            <input type="hidden" class="form-control mb-3" name="estadoCurso" value="En Proceso">
            <input  type="hidden"  class="form-control mb-3" name="correo" value=<?php echo("$correo");?>>
            <input type="submit" class="btn btn-primary">
            <style>
                input[type="submit"] {
            border-collapse: collapse;
            border: transparent;
            border-radius: 15px;
            font-family: "Mitr", sans-serif;
            color: white;
            margin: 15px auto;
            padding: 10px 50px 10px 50px;
            background-color: #800000;
            transition: 0.5s;
            
        }
        input[type="submit"]:hover {
            color: rgb(255, 255, 255);
            background-color: #0ab627;
            
        }
        input[type="angel"]:hover {
            border-collapse: collapse;
            border: transparent;
            border-radius: 15px;
            font-family: "Mitr", sans-serif;
            color: white;
            margin: 15px auto;
            padding: 5px 50px 5px 50px;
            background-color: #b177e3;
            transition: 0.5s;
        }
            </style>
        </form>
        
    </section>
	</main>


        
	</main>
    
     

	<footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">CONTÁCTANOS</h2>
                    <h3 class="column__txt">Blvd. Presa Chicoasen No. 950
Tuxtla Gutiérrez, Chiapas</h3>
               <h3 class="column__txt">Teléfono: 9191512955</h3> 
                </div>
                
                <p class="copy">© 2023 cobach | TODOS LOS DERECHOS RESERVADOS </p>
            </div>
        </footer>
</body>
</html>