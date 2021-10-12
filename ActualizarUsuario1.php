<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src ="JS/funciones.js"></script>
    <script src ="ControladorBuscarUsuario.php"></script>
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
            <div class="col-sm-8 " >
                <?php
                    include('encabezado.php')
                ?>          
            </div>
            <div class="col-sm-2"></div>
        </div> 
        <div class="row " >
            <div class="col-sm-2"></div> 
            <div class="col-sm-8 ">
                    <br>
                    <h4 class=" texto3 " >Actualizar datos de usuario</h4>

                    <form  action="#" method="POST" onsubmit="return Busqueda();">
                        <label class="form-control-sm">Ingrese el número de documento del usuario:</label><br>
                        <div class="row" >
                            <div class="col">
                                <input type="number" value="<?php echo $buscar;?>" class=" form-control form-control-sm" disabled id="BuscarDocumento" name="BuscarDocumento">
                            </div>
                            <div class="col">
                                <center>
                                    <button class="boton5  disabled "  disabled type="submit">buscar</button><br>
                                </center>
                            </div>
                        </div>
                    </form>

                    <form  action="ActualizarUsuario2.php" method="POST"  onsubmit="return validar0();">
                        <fieldset id="fieldset" disabled>
                            <label class="form-control-sm"  >Tipo de usuario:</label>
                            <select id="rol" name="rol" class="custom-select mb-3" required autofocus>
                                <option value="<?php echo $row[1];?>">
                                <?php
                                        if($row[1]==1){
                                             echo "Administrador";
                                        } 
                                        elseif ($row[1]==2){
                                             echo "Laboratorista";
                                        }
                                        elseif ($row[1]==3){
                                             echo "Inspector";
                                        }
                                   ?>
                                </option>
                                <option value="1">Administrador</option>
                                <option value="2">Laboratorista</option>
                                <option value="3">Inspector</option>
                            </select>         
                            <label class="form-control-sm"  >Número de documento:</label>
                            <input type="number" value="<?php echo $row[2];?>"  class="form-control form-control-sm"  id="Documento" name="Documento" required disabled>     
                            <label class="form-control-sm" >Nombres:</label>
                            <input type="text" value="<?php echo $row[4];?>" class="form-control form-control-sm" id="Nombres" name="Nombres" required >
                            <label class="form-control-sm" >Apellidos:</label>
                            <input type="text"value="<?php echo $row[5];?>" class="form-control form-control-sm" id="Apellidos" name="Apellidos" required >
                            <label class="form-control-sm">Unidad Funcional:</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $row[6];?>"  id="UniFuncional" name="UniFuncional" required>
                            <label class="form-control-sm" >Correo:</label>
                            <input type="email" class="form-control form-control-sm" value="<?php echo $row[7];?>"  id="Correo" name="Correo"  required>                              
                            <label class="form-control-sm" >Estado:</label>
                            <select id="estado" name="estado" class="custom-select mb-3" required >
                                <option value="<?php echo $row[9];?>">
                                <?php
                                        if($row[9]==0)
                                        {
                                            echo "Inhabilitado";
                                ?>     
                                            </option>
                                            <option value="1">Habilitado</option>       
                                <?php        
                                        } 
                                        elseif ($row[9]==1)
                                        {
                                             echo "Habilitado";
                                ?>
                                            </option>
                                            <option value="2">Inhabilitado</option>
                                <?php        
                                        }
                                   ?>
                                </select> <br> <br>
                        </fieldset>
                        <div class="row">

                                <div class="col">
                                    <button class="boton1"type="button" id="Editar" onclick="EditarUsuario()">Editar</button>
                                </div>
                                <div class="col">
                                    <button class="boton1 disabled" type="submit"id="Guardar" disabled onclick="return ConfirmGuardar1()" >Guardar</button>
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