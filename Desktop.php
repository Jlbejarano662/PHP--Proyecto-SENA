<?php
    include "sesion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Desktop</title>
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
                    <br><a href="cerrar.php" style="text-align: right; display: inline-block; width: 100%; ">Cerrar sesión</a>
                </div>
                <div class="col-sm-4"></div>
        </div>
        <?php
                include_once "conexion.php";
                $sql="SELECT Cuenta, Usuarios, Constantes, Ensayos, Informes, Laboratoristas FROM tb_rol as r JOIN tb_usuario as u WHERE r.ID_rol=u.id_rol AND u.doc_usu ='".$_SESSION['usu']."'";
                $result=$link->query($sql);

        ?>         
        <div class="row">
            <div class="col-sm-4"></div> 
            <div class="col-sm-4" >
                <center>
                    <?php
                        while($row=mysqli_fetch_array($link->query($sql)))
                        {
                            if($row[0]==1)
                            {
                    ?>
                                <form action="Micuenta.php">
                                    <br><button class="boton5" type="submit"> Mi cuenta </button> <br><br>
                                </form>
                    <?php
                            }
                            if($row[1]==1)
                            {
                    ?>
                                <form action="administrarUsuarios.php">
                                    <button class="boton5" type="submit" > Administrar Usuarios </button> <br><br>
                                </form>
                
                    <?php
                            }
                            if($row[2]==1)
                            {
                    ?>
                                <form action="AdministrarConstantes.php">
                                    <button class="boton5" type="submit" > Administrar Constantes </button> <br><br>
                                </form>
                    <?php  
                            }
                            if($row[3]==1)
                            {
                    ?>
                                <form action="NuevoEnsayo.php">
                                    <button class="boton5" type="submit" > Nuevo Ensayo </button><br><br>
                                </form>
                    <?php  
                            }
                            if($row[4]==1)
                            {
                    ?>
                                <form action="Informes.php">
                                    <button class="boton5" type="submit" > Informes </button><br><br>
                                </form>
                    <?php  
                            }
                            if($row[5]==1)
                            {
                    ?>
                                <form action="Laboratoristas.php">
                                    <button class="boton5" type="submit" > Laboratoristas </button><br><br>
                                </form>
                    <?php  
                            }
                            break;
                        }
                    ?>
                        <!-- <form action="cerrar.php">
                            <button class="boton5" type="submit" >Cerrar sesión</button><br><br>
                        </form> -->
                </center>
            </div>
            <div class="col-sm-4"></div>
        </div>


    </div>
</body>
</html>