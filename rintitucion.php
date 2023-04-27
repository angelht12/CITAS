<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DATOS DE INSTITUCIÓN</title>
	<link  rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">

</head>
<body>
	<header>
        <img src="img/SGIE.png" >
		<nav class="navbar">
			<div class="contenedor">
				<IMG SRC="img/usuario.png" width="80" height="80" HSPACE="10" VSPACE="10">
			</div>
		</nav>
	</header>
    
	<main id="blog">
		<div class="contenedor">
			<div class="contenido">
				<div class="post">
					<h1 class="titulo" style="font-weight: bolder;" align="center">INSTITUCIÓN</h1>
				</div>
			</div>
		</div>
		<section action="base/con_platel.php" class="form-register1 animated fadeInTopLeft">
		<form action="insertarp.php" method="POST">
             <label align= "horizontal" for="username">Nombre: </label>
            <br>
            <input  type="hidden"  class="form-control mb-3" name="ID" value="4">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
            <input type="text" class="form-control mb-3" name="tipoTramite" placeholder="tipoTramite">
            <input type="hidden" class="form-control mb-3" name="fechaAtencion" value="1/2/2023">
            <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio">
            <input type="hidden" class="form-control mb-3" name="estadoCursos" value="en proceso">
            <input type="submit" class="btn btn-primary">
        </form>
    	</section>
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