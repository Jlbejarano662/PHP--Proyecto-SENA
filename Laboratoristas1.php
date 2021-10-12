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
    <title>Laboratoristas1</title>
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
        <div class="row" > 
            <div class="col-sm-2"></div> 
            <div class="col-sm-8">
                <br><h4 class="texto3">Listar laboratoristas</h4><br> 
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Documento</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Unidad Funcional</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    for($i=0;$i<$row;$i++){
                                        echo"<tr>";
                                            echo"<td>";
                                                echo $row['doc_usu'];
                                            echo"</td>";
                                            echo"<td>";
                                                echo $row['nom_usu'];
                                            echo"</td>";
                                            echo"<td>";
                                                echo $row['ape_usu'];
                                            echo"</td>";
                                            echo"<td>";
                                                echo $row['correo'];
                                            echo"</td>";
                                            echo"<td>";
                                                echo $row['UnidadFuncional'];
                                            echo"</td>";
                                        echo"</tr>";
                                        $row =mysqli_fetch_array($result);
                                    }   
                                ?>
                            </tbody>
                        </table>
                    </div>    
                </div>
                <br>
                <div>
                    <form action="buscarLaboratoristas.php"method="POST" onsubmit="return Busqueda2();">   
                        <div class="row">
                                <div class="col-sm">
                                    <center>
                                        <input type="number" class="form-control form-control-sm" name="buscar1" id="buscar1" placeholder="Documento" autofocus><br><br>
                                    </center>
                                </div>
                                <div class="col-sm">
                                    <center>
                                        <input type="text" class="form-control form-control-sm" name="buscar2" id="buscar2" placeholder="Nombres"><br><br>
                                    </center>
                                </div>
                                <div class="col-sm">
                                    <center>
                                        <input type="text" class="form-control form-control-sm" name="buscar3" id="buscar3" placeholder="Apellidos"><br><br>
                                    </center>
                                </div>
                                <div class="col-sm">
                                    <center>
                                        <button class="boton4" type="submit">Buscar</button><br><br>
                                    </center>
                                </div>
                                <div class="col-sm">
                                    <center>
                                        <button class="boton4" type="button"  onclick="ConfirmDemo();">Salir</button>
                                    </center>
                                </div> 

                        </div>    
                    </form> 
                </div>
                <br> 
                <br> 
            </div>  
            <div class="col-sm-2"></div>          
        </div>
    </div>
</body>
</html>