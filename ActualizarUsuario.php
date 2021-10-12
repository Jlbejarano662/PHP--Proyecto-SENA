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
    <title>Actualizar Usuario</title>
</head>
<body >
  
    <div class="container"  >
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <?php
                    include('encabezado.php')
                ?>          
            </div>
            <div class="col-sm-2"></div>
        </div> 
        <div class="row " >
               <div class="col-sm-2"></div> 
               <div class="col-sm-8">
                    <br>
                    <h4 class=" texto3 " >Actualizar datos de usuario</h4>
                    <!-- Aqui se muestran los errores                    -->
                                        <?php
                         if(isset($_GET['error']))
                         {
                              if($_GET['error']==0)
                              {
                    ?>
                                   <br>
                                   <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> La consulta no fue exitosa.
                                   </div>                              
                    <?php
                            }
                            if($_GET['error']==1)
                            {

                    ?>
                                <br>
                                <div class="alert alert-danger ">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>¡Error!</strong> No se han encontrado resultados de búsqueda.
                                </div>                      
                    <?php
                            }
                            if($_GET['error']==2)
                            {
                    ?>
                                   <br>
                                   <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong class>¡éxito!</strong> Los datos han sido actualizados.
                                   </div>
                    <?php
                            }
                            if($_GET['error']==3)
                            {
                    ?>
                                   <br>
                                   <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> Los datos no fueron actualizados.
                                   </div>
                    <?php
                              }
                         }
                    ?>
                    <!-- --------------------------- -->
                    <form  action="BuscarUsuario.php" method="POST" onsubmit="return Busqueda();">
                        <label class="form-control-sm">Ingrese el número de documento del usuario:</label><br>
                        <div class="row" >
                            <div class="col">
                                <input type="number" class=" form-control form-control-sm" id="BuscarDocumento" name="BuscarDocumento" required autofocus>
                            </div>
                            <div class="col">
                                <center>
                                    <button class="boton5" type="submit" value="BotonActualizarUsuario" id="BotonBuscar" name="BotonBuscar">buscar</button><br>
                                </center>
                            </div>
                        </div>
                    </form>

                    <form  action="#" method="POST"  onsubmit="return validar();">
                        <fieldset id="fieldset" disabled>  
                            <label class="form-control-sm"  >Tipo de usuario:</label>
                            <select id="rol" name="rol" class="custom-select mb-3" required >
                                <option></option>
                                <option value="1">Administrador</option>
                                <option value="2">Laboratorista</option>
                                <option value="3">Inspector</option>
                            </select>  
                            <label class="form-control-sm" >Número de documento:</label>
                            <input type="number" disabled  class="form-control form-control-sm"  id="Documento" name="Documento" required >     
                            <label class="form-control-sm" >Nombres:</label>
                            <input type="text" disabled class="form-control form-control-sm" id="Nombres" name="Nombres" required >
                            <label class="form-control-sm" >Apellidos:</label>
                            <input type="text" disabled class="form-control form-control-sm" id="Apellidos" name="Apellidos" required >
                            <label class="form-control-sm">Unidad Funcional:</label>
                            <input type="text" class="form-control form-control-sm" id="UniFuncional" name="UniFuncional" required>
                            <label class="form-control-sm" >Correo:</label>
                            <input type="email" class="form-control form-control-sm" id="Correo" name="Correo"  required>                              
                            <label class="form-control-sm" >Estado:</label>
                            <select id="estado" name="estado" class="custom-select mb-3" required >
                                <option></option>
                                <option value="1">Usuario habilitado</option>
                                <option value="2">Usuario inhabilitado</option>
                            </select> <br> <br>
                        </fieldset>   
                        <div class="row">
   
                                <div class="col">
                                    <button class="boton1 disabled" type="button" onclick="EditarUsuario()" disabled>Editar</button>
                                </div>
                                <div class="col">
                                    <button class="boton1 disabled" type="submit"id="Guardar" disabled >Guardar</button>
                                </div>
                                <div class="col">
                                    <button class="boton1" type="button" onclick="ConfirmDemo1()">Salir</button>
                                </div>  
                        </div>

                    </form> <br>

                </div>       
                <div class="col-sm-2"></div>
        </div>     
    </div>
</body>
</html>