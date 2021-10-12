<?php
    include "sesion.php";
    include "verificarAdministrador.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src ="JS/funciones.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registrar Usuario</title>
</head>
<body >
  
     <div class="container">
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
               <div class="col-sm-2"></div> 
               <div class="col-sm-8">
                    <center>
                         <br><h4 class="texto2">Registrar nuevo usuario</h4>
                    </center>
                    <!-- Aqui se muestran los errores                    -->
                    <?php
                         if(isset($_GET['resultado']))
                         {

                              if($_GET['resultado']==0 || $_GET['resultado']==3)
                              {
                    ?>
                                   <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> El usuario no fue registrado.
                                   </div>
                    <?php

                              }
                              if($_GET['resultado']==1)
                              {
                    ?>
                                   <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> El número de documento ingresado ya esta resgitrado.
                                   </div>   
                    <?php
                              }
                              if($_GET['resultado']==2)
                              {
                    ?>
                              <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                                   <strong class>¡éxito!</strong> El usuario ha sido registrado.
                              </div>
                                 
                    <?php
                              }
                         }
                    ?>
                    <!-- --------------------------- -->
                    <form  action="RegistrarUsuario1.php" method="POST"  onsubmit="return validar();">
                         <label class="form-control-sm" cl>Tipo de usuario:</label>
                         <select id="rol" name="rol" class="custom-select mb-3" required autofocus>
                              <option value="">Tipo de usuario</option>
                              <option value="1">Administrador</option>
                              <option value="2">Laboratorista</option>
                              <option value="3">Inspector</option>
                         </select>
                         <label class="form-control-sm">Número de documento:</label>
                         <input type="number" class="form-control form-control-sm" id="Documento" name="Documento" required >     
                         <label class="form-control-sm">Contraseña:</label>
                         <input type="password" class="form-control form-control-sm" id="Contraseña" name="Contraseña" required >
                         <label class="form-control-sm">Nombres:</label>
                         <input type="text" class="form-control form-control-sm" id="Nombres" name="Nombres" required >
                         <label class="form-control-sm">Apellidos:</label>
                         <input type="text" class="form-control form-control-sm" id="Apellidos" name="Apellidos" required >
                         <label class="form-control-sm">Unidad Funcional:</label>
                         <input type="text" class="form-control form-control-sm" id="UniFuncional" name="UniFuncional" required>
                         <label class="form-control-sm" >Correo:</label>
                         <input type="email" class="form-control form-control-sm" id="Correo" name="Correo"  required>                              
                         <br><br>
                         <div class="row">

                                   <div class="col">
                                        <center>
                                             <button class="boton3" type="submit" onclick="return ConfirmGuardar()">Guardar</button>
                                        </center>
                                   </div>
                                   <div class="col">
                                        <center>
                                             <button class="boton3" type="button" onclick="ConfirmDemo1()">Salir</button> <br><br>
                                        </center>
                                   </div>

                         </div>
                    </form>

               </div>       
               <div class="col-sm-2"></div>
          </div>     
     </div>
</body>
</html>