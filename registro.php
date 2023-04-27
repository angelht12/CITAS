<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>FORMULARIO</title>
    
</head>
<body>
    <form ></form>
    <section class="form-register animated zoomIn">


    <h2> Registrese </h2>
    <br>
        <form action="insertarp.php" method="POST">
             
            <input  type="hidden"  class="form-control mb-3" name="id" value="4">
            <br>
            
             
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" required>
            <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" required>
            <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" required>
          
            <input type="text" class="form-control mb-3" name="pass" placeholder="Password" required>
            <input  type="hidden"  class="form-control mb-3" name="tipoUsuario" value="2">
            <input type="submit" value="Registrar">
            <style>
                input[type="submit"] {
            border-collapse: collapse;
            border: transparent;
            border-radius: 15px;
            font-family: "Mitr", sans-serif;
            color: white;
            margin: 15px auto;
            padding: 10px 50px 10px 50px;
            background-color: black;
            
        }
        input[type="submit"]:hover {
            color: black;
            border: 2px solid #000;
            background-color: darkgray;
            
        }
            </style>
        </form>
        
    </section>
    
    
</body>
</html>