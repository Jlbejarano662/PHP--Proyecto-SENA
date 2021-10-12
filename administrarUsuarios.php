<?php
    include "sesion.php";
    include "verificarAdministrador.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css"> 
    <script src ="JS/funciones.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Administrar usuarios</title>
</head>
<body>
    <div  class="container" >

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <?php
                    include('encabezado.php')
                ?>          
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div> 
            <div class="col-sm-4" >
                <center>
                       <br> <h4 class="texto2">Administrar usuarios</h4>
                </center>
                <center>
                    <form action="RegistrarUsuario.php">
                        <br><button class="boton5" type="submit"> Registar nuevo usuario </button> <br><br>
                    </form>
                    <form action="ActualizarUsuario.php">
                        <button class="boton5" type="submit" > Actualizar datos de usuario </button> <br><br>
                    </form>
                    <form action="EliminarUsuario.php">
                        <button class="boton5" type="submit" > Eliminar usuario </button><br><br>
                    </form>
                    <!-- <form action="Desktop.php">
                        <button class="boton5" type="submit" > Salir</button><br><br>
                    </form> -->
                </center>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" >
                    <a href="Desktop.php" style="text-align: right; display: inline-block; width: 100%; ">Salir</a>
                </div>
                <div class="col-sm-4"></div>
        </div>

    </div>
   
</body>
</html>