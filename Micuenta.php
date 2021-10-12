<?php
    include "sesion.php";
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
    <title>Mi cuenta</title>
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
          <?php
                    include_once "conexion.php";
                    $sql="SELECT*FROM tb_usuario WHERE doc_usu ='".$_SESSION['usu']."'";
                    $result=$link->query($sql);
                    $row=mysqli_fetch_array($link->query($sql))
          ?>
          <div class="row">
               <div class="col-sm-2"></div> 
               <div class="col-sm-8">
                    <center>
                         <br><h4>Mi Cuenta</h4>
                    </center>
          <!-- Aqui se muestran los errores                    -->


                    <?php
                         if(isset($_GET['resultado']))
                         {
                              if($_GET['resultado']==1)
                              {
                    ?>
                                   <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong class>¡éxito!</strong> Los datos han sido actualizados.
                                   </div>
                    <?php
                              }
                              if($_GET['resultado']==0)
                              {
                    ?>
                                   <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> Los datos no fueron actualizados.
                                   </div>
                    <?php
                              }
                         }
                    ?>
          <!-- --------------------------- -->
                    <form action="Micuenta1.php" method="POST"   enctype="multipart/form-data" onsubmit="return validar();">
                         <label class="form-control-sm"  >Tipo de usuario:</label>
                         <select id="rol" name="rol" class="custom-select mb-3" disabled >
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
                         <fieldset id="fieldset" disabled>                       
                              <label class="form-control-sm">Número de documento:</label>
                              <input type="number" class="form-control form-control-sm" value="<?php echo $row[2];?>" id="Documento" name="Documento" required autofocus>     
                              <label class="form-control-sm" >Contraseña:</label>
                              <input type="password" class="form-control form-control-sm" value="<?php echo $row[3];?>"  id="Contraseña" name="Contraseña" required>
                              <label class="form-control-sm" >Nombres:</label>
                              <input type="text" class="form-control form-control-sm" value="<?php echo $row[4];?>"  id="Nombres" name="Nombres" required>
                              <label class="form-control-sm">Apellidos:</label>
                              <input type="text" class="form-control form-control-sm" value="<?php echo $row[5];?>" id="Apellidos" name="Apellidos"  required>
                              <label class="form-control-sm">Unidad Funcional:</label>
                              <input type="text" class="form-control form-control-sm" value="<?php echo $row[6];?>"  id="UniFuncional" name="UniFuncional" required>
                              <label class="form-control-sm" >Correo:</label>
                              <input type="email" class="form-control form-control-sm" value="<?php echo $row[7];?>"  id="Correo" name="Correo"  required>                              
                              <label class="form-control-sm">Firma:</label>
                              <div class="custom-file"value="<?php echo $row[8];?>">
                                   <input type="file" class="custom-file-input" id="Firma" Name="Firma">
                                   <label class="custom-file-label" for="Firma" ><?php echo $row[8];?></label>
                              </div><br><br>
                              <script>
                                   // Add the following code if you want the name of the file appear on select
                                   $(".custom-file-input").on("change", function() {
                                   var fileName = $(this).val().split("\\").pop();
                                   $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                   });
                              </script>
                         </fieldset>     
                         <!-- Aqui se muestran los errores                    -->
                         <?php
                              if(isset($_GET['resultado']))
                              {
                                   if($_GET['resultado']==2)
                                   {
                         ?>
                                        <div class="alert alert-danger ">
                                             <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>¡Error!</strong> Solo se admiten archivos jpeg.
                                        </div>
                         <?php
                                   }
                              }
                         ?>
                         <!-- --------------------------- -->
                         <div class="row">
                              <div class="col">
                                   <button class="boton1"type="button" id="Editar" onclick="EditarUsuario()">Editar</button>
                              </div>
                              <div class="col">
                                   <button class="boton1 disabled" type="submit" id="Guardar" disabled  onclick="return ConfirmGuardar()">Guardar</button>
                              </div>
                              <div class="col">
                              <button class="boton1" type="button" onclick="ConfirmDemo()">Salir</button>
                              </div>                         
                         </div> 
                    </form>
                    <br>        
               </div>       
               <div class="col-sm-8"></div>
          </div>

     </div>
</body>
</html>