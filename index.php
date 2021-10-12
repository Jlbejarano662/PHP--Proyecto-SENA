<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src ="JS/funciones.js"></script>
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <br><br>
                    <center>
                        <img id="logo" src="IMG/logo2.png">
                    </center> 
                    <br>
                    
                </div>
                <div class="col-sm-4"></div>
            </div> 

            <div class="row">
                <div class="col-sm-4" ></div>
                <div class="col-sm-4"> 
                    <form  action="check.php" method="POST" onsubmit="return Index();">
                        <div>
                            <select name="rol" id="rol" class="custom-select mb-3" required  autofocus>
                                <option value="">Tipo de usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">Laboratorista</option>
                                <option value="3">Inspector</option>
                            </select>
                        </div>
                        <div>
                        <input type="number" class="form-control"  id="Documento"placeholder="Número de documento" name="doc_usu" required ><br>
                        </div>
                        <div>
                        <input type="password" class="form-control" id="Contraseña" placeholder="Contraseña" name="Contraseña" required ><br>
                        </div>
                        <div >
                        <button class="btn btn-lg btn-danger btn-block" type="submit" >Iniciar sesión</button>
                        </div>
                        <br>
                    </form><br> 
                <div>
                <div class="col-sm-4"></div>                         
            </div> 
            <!-- Aqui se muestran los errores                    -->
            <div class="row">
                <!-- <div class="col-sm-0"></div>     -->
                <div class="col-sm-12">  
                    <center>
                        <?php
                            if(isset($_GET['error']))
                            {
                                if($_GET['error']==1)
                                {
                        ?>
                                    <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> El tipo de usuario, nombre de usuario o la contraseña que escribió son incorrectos. Inténtelo nuevamente. Si aún no puede iniciar sesión, comuníquese con el administrador del sistema.
                                    </div>
                        <?php
                                }
                                if($_GET['error']==2)
                                {
                        ?>
                                    <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> El tipo de usuario, nombre de usuario o la contraseña que escribió son incorrectos. Inténtelo nuevamente. Si aún no puede iniciar sesión, comuníquese con el administrador del sistema.

                                    </div>
                        <?php
                                }
                                if($_GET['error']==3)
                                {
                        ?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> La contraseña que escribió es incorrecta. Inténtelo nuevamente. Si aún no puede iniciar sesión, comuníquese con el administrador del sistema.
                                    </div>
                        <?php
                                }
                                if($_GET['error']==0)
                                {
                        ?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> No se ha iniciado sesion.
                                    </div>
                        <?php
                                }
                                if($_GET['error']==4)
                                {
                        ?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> El usuario está inahabilitado. Comuníquese con el administrador del sistema.
                                    </div>
                        <?php
                                }
                                if($_GET['error']==5)
                                {
                        ?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> Acción no permitida.
                                    </div>
                        <?php
                                }
                            }
                        ?>
                    </center>
                </div>
                <!-- <div class="col-sm-0"></div> -->
            </div>
        </div>
</body>
</html>