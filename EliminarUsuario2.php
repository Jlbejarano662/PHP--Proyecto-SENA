<?php
    include "sesion.php";
    include_once "conexion.php";

    
    //RECUPERAMOS LAS VARIABLES 
    $documento=$_POST['Documento'];
    //HACEMOS LA SENTENCIA DE SQL
    $sql="DELETE FROM  tb_usuario WHERE doc_usu=$documento LIMIT 1";
    echo $sql;
    //EJECUTAMOS LA SENTENCIA SQL
    $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
    if (!$result)
    {
         header('Location: EliminarUsuario.php?error=3'); 
    }
    else{
         header('Location: EliminarUsuario.php?error=2'); 

    }
?>