<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    
    <style>
        body { background-color: #677BDC; padding: 150px; font-family: Arial; }

        #menu {
            background-color:;
        }

        #menu ul { 
            list-style: none;
            margin: 0; 
            padding: 0;
        }

        #menu ul li{
            display: inline-block
        }

        #menu ul li a{
            color: white;
            display: block;
            padding: 20px 60px;
            text-decoration: none;
        }

        #menu ul li a:hover{
            background-color:#42B881
        }

        .item-r{
            color: white;
        }

    </style>  
    

    
</head>
<body>
    <div id="menu">
     <ul>
    <h2 class="item-r"><?php echo "<h4>Bienvenido - ".$_SESSION['usuario']."</h4>";?></h2>
    </br>
    <li><a href="home.php">Menu Principal</a></li>
    <li><a href="salir.php">Salir de la Sesion</a></li>
     </ul>
    </div>

    </body>
</html>