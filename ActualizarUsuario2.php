<?php
    include "sesion.php";
    include_once "conexion.php";

    
    //RECUPERAMOS LAS VARIABLES 
    $documento=$_POST['Documento'];
    $nombre=$_POST['Nombres'];
    $apellido=$_POST['Apellidos'];
    $UniFuncional=$_POST['UniFuncional'];
    $Correo=$_POST['Correo'];

    //HACEMOS LA SENTENCIA DE SQL
    $sql="UPDATE tb_usuario SET nom_usu='$nombre', ape_usu='$apellido', UnidadFuncional='$UniFuncional', correo='$Correo' WHERE doc_usu=$documento";
    // echo $sql;
    //EJECUTAMOS LA SENTENCIA SQL
    $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
    if (!$result)
    {

        header('Location: ActualizarUsuario.php?error=3'); 

    }
    else{
        header('Location: ActualizarUsuario.php?error=2'); 

    }
?>