<?php
    include "sesion.php";
    include "VerificarAdministradorLaboratorista.php";
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
    <title>Nuevo ensayo</title>
</head>
<body>    

    <div class="container">                
    <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">  
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
                    <br><h4 class="texto2">Nuevo ensayo</h4><br>
                </center>
                <!-- Aqui se muestran los errores                    -->
                <?php
                         if(isset($_GET['resultado']))
                         {

                              if($_GET['resultado']==0)
                              {
                    ?>
                                   <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> No fue posible realizar esta acción.
                                   </div>
                    <?php
                              }
                              if($_GET['resultado']==1)
                              {
                    ?>
                                   <div class="alert alert-danger ">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Error!</strong> No se han encontrado datos de constantes, por favor regístrelos.
                                   </div>  
                    <?php

                                }
                                if($_GET['resultado']!=1 && $_GET['resultado']!=0 && $_GET['resultado']!=2)
                                {
                    ?>
                                <div class="window-notice" id="window-notice">
                                    <div class="content">
                                        <div clss="row">
                                        <div class="col-sm">
                                        <div class="content-text" style="    font-size: 100%"> El material analizado tiene una compactacia de   
                                            <?php echo $_GET['resultado'].'%. ';
                                                if ($_GET['resultado']>=95)
                                                {
                                                    echo "Por tanto, se  libera el tramo.";
                                                }
                                                else
                                                {
                                                    echo "Por tanto, se debe repetir el ensayo ";
                                                }
                                            ?>
                                            </div> 
                                            <br>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-sm">
                                                <center>
                                                    <button class="boton6" type="button" onclick="window.open('NuevoEnsayo.php', '_self');">Aceptar</button><br>
                                                </center>
                                            </div>
                                            <div class="col-sm">
                                                <center>
                                                    <form action="CancelarEnsayo.php" method="POST" onsubmit="return Cancelar();">
                                                        <button class="boton6" type="submit" name="cancelar" id="cancelar" value=" <?php echo $_GET['id_const'];?>" >Cancelar</button>
                                                    </form>
                                                </center>
                                            </div>
                                        </div> 
                                    </div>
                                </div>                
                    <?php
                              }
                         }
                    ?>
                <!-- --------------------------- -->
                <form action="NuevoEnsayo1.php" method="POST" enctype="multipart/form-data" onsubmit="return Validar2();">
                    <label class="form-control-sm">Localización:</label>
                    <input type="varchar" class="form-control form-control-sm" name="Localizacion" id="Localizacion" autofocus >
                    <label class="form-control-sm">Peso del frasco + cono + arena incial (gr):</label>
                    <input type="number" step="0.01" class="form-control form-control-sm" name="PesoInicial" id="PesoInicial" required>
                    <label class="form-control-sm">Peso del frasco + cono + arena final (gr):</label>
                    <input type="number" step="0.01" class="form-control form-control-sm" name="PesoFinal" id="PesoFinal" required>
                    <label class="form-control-sm">Peso del material extraído húmedo (gr):</label>
                    <input type="number" step="0.01" class="form-control form-control-sm" name="PesoHumedo" id="PesoHumedo" required>
                    <label class="form-control-sm">Húmedad del material extraído (%):</label>
                    <input type="number" step="0.01" class="form-control form-control-sm" name="Humedad" id="Humedad" required>
                    <label class="form-control-sm">Registro fotográfico:</label>
                    <div class="row">
                        <div class="col-sm">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto1" Name="foto1">
                                <label class="custom-file-label" for="Firma" >Seleccionar archivo</label>
                            </div><br><br>
                        </div>
                        <div class="col-sm">    
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto2" Name="foto2">
                                <label class="custom-file-label" for="Firma" >Seleccionar archivo</label>
                            </div><br><br>
                        </div>
                    </div>   
                    <script>
                        // Add the following code if you want the name of the file appear on select
                        $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });
                    </script>
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
                            <div class="col-sm">
                                <center>
                                    <button class="boton1" type="submit">Calcular compactancia</button><br><br>
                                </center>
                            </div>
                            <div class="col-sm">
                                <center>
                                <button class="boton1" type="button" onclick="ConfirmDemo();">Salir</button>
                                </center>
                            </div>
                    </div> 
                    <br><br>
                </form>  
          
            </div><br> 
            <div class="col-sm-2"></div>
          
        </div>
    </div>
     
</body>
</html>
