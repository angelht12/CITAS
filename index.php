<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESIÓN</title>
    <link  rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
    <link rel="stylesheet" href="css/estilos.css">    
</head>
<body>
<style>
        body {
            background-color: #D2D9DA ;
            width: 100%;
            min-width: 400px;
        }

        .content{
            min-width: 400px;
            width: 40%;
            margin: 0 auto;
            background-color: #a3c4e6;
            border-radius: 30px;
            border: transparent;
            font-family: "Mitr", sans-serif;
            text-align: center;
            margin-top: 100px;
            padding-top: 5px;
            padding-bottom: 20px;
            
            
        }
        .content label{
            margin-right: 0px;
            font-family: "Mitr", sans-serif;
            
            border-radius: 10px;
            margin: 200 auto;
            padding: 3px 50px 5px 50px;
            min-width: 300px;
        

        }

        input[type="text"] {
            font-family: "Mitr", sans-serif;
            border: 5px solid rgb(109, 198, 198);
            border-radius: 10px;
            margin: 0 auto;
            padding: 10px 25px 10px 25px;
            min-width: 300px;
            
            
            

            
        }

        input[type="password"] {
            font-family: "Mitr", sans-serif;
            border: 5px solid rgb(109, 198, 198);
            border-radius: 10px;
            margin: 0 auto;
            padding: 10px 25px 10px 25px;
            min-width: 300px;
            
            
        }

        input[type="submit"] {
            border-collapse: collapse;
            border: transparent;
            border-radius: 15px;
            font-family: "Mitr", sans-serif;
            color: white;
            margin: 15px auto;
            padding: 5px 50px 5px 50px;
            background-color: #38E512;
            transition: 0.5s;
            
        }
        input[type="submit"]:hover {
            color: rgb(255, 255, 255);
            background-color: #fd7e1b;
            
        }
        .regis{
            text-decoration: none;
            font-size: 13px;
            border-collapse: collapse;
            border: transparent;
            border-radius: 15px;
            font-family: "Mitr", sans-serif;
            color: rgb(255, 255, 255);
            margin: 15px;
            padding: 5px 50px 5px 50px;
            background-color: #1B25FD;
            transition: 0.5s;
            min-width: 300px;
        }
        .regis:hover{
            text-decoration: none;
            color: white;
            background-color: #298dba;
        }
        .footer{
            position:absolute;
            left: 0px;
            right: 0px;
            bottom: 0px;
            width: 100%;
            height: 50px;
            color: white;
            font-family: "Mitr", sans-serif;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #2b8fc7;
        }
        .footer p{
            text-align: right;
            margin-right: 50px;
            position:relative;
        }
        .img{
            width: 300%;
            padding-top: 20px;
            min-width: 400px;
            background-color:  #D2D9DA;
            
            
        }
            
        }
    </style>
    
    <header1 class="img">
    
        <img src="img/SGIE.png" width="400" height="90" HSPACE="50" VSPACE="50"  >
		<nav class="navbar">
			
            

		</nav>
        
	</header1>
    
    <div class = "content">
    <h1>Iniciar sesión</h1>
    <br>
        <form action="validar.php" method="POST">
            <label align= "horizontal" for="username">Correo: </label>
            <br>
            <input type="text" placeholder="Correo" name="correo" >
            <br>
            <label align= "horizontal" for="pass">  Contraseña: </label>
            
            <br>
            <input type="password" placeholder="Contraseña" name="pass">
            <br>
            <input type="submit" value="Enviar">
            
        </form>
        <a href="registro.php" class="regis">Registrarse</a>
    </div>
    
    

    


</body>
</html>