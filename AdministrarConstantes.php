<?php
    include "sesion.php";
    include "VerificarAdministradorLaboratorista.php";
?>

</html>
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
    <title>Constantes</title>
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
                    <br><h4 class="texto2">Administrar constantes</h4><br>
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
                <form action="AdministrarConstantes1.php" method="POST" onsubmit="return Validar1();">   
                    <?php
                        include_once "conexion.php";
                        $sql="SELECT*FROM tb_constantes AS c JOIN tb_usuario AS u WHERE c.id_usu=u.ID_usu AND u.doc_usu ='".$_SESSION['usu']."' ORDER BY  ID_const DESC LIMIT 1";
                        //echo $sql;
                        $result=$link->query($sql);
                        $row=mysqli_fetch_array($result)
                    ?>
                    <fieldset id="fieldset" disabled>    
                        <label class="form-control-sm" >Constante del cono (gr):</label>
                        <input type="number" step="0.01" class="form-control form-control-sm" name="ConstanteDelCono" id="ConstanteDelCono" value="<?php echo $row[2];?>" required>
                        <label class="form-control-sm" >Densidad de la arena (gr/cm3):</label>
                        <input type="number" step="0.01" class="form-control form-control-sm" name="DensidadDeLaArena" id="DensidadDeLaArena" value="<?php echo $row[3];?>" required>
                        <label class="form-control-sm" >Densidad máxima del material (gr/cm3):</label>
                        <input type="number" step="0.01" class="form-control form-control-sm" name="DensidadMáximaDelMaterial" id="DensidadMáximaDelMaterial" value="<?php echo $row[4];?>" required>
                        <label class="form-control-sm" >Porcentaje de compactación minimo (%):</label>
                        <input type="number" step="0.01" class="form-control form-control-sm" name="PorcentajeDeCompactación" id="PorcentajeDeCompactación" value="<?php echo $row[5];?>" required><br>
                    </fieldset>    
                    <div class="row">
                        <div class="col-sm">
                            <center>
                                <button class="boton1"type="button" id="Editar" onclick="EditarUsuario()">Editar</button>&nbsp;&nbsp;
                            </center>
                        </div>
                        <div class="col-sm">
                            <center>
                            <button class="boton1 disabled" type="submit" id="Guardar" disabled  onclick="return ConfirmGuardar();">Guardar</button>&nbsp;&nbsp;
                            </center>
                        </div>
                        <div class="col-sm">
                            <center>
                                <button class="boton1" type="button" onclick="ConfirmDemo()">Salir</button>
                            </center>
                        </div>
                    </div>
                </form>          
            </div>       
            <div class="col-sm-8"></div>
        </div>
    </div>
</body>
</html>