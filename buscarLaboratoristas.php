<?php
    include "sesion.php";
    include "verificarAdministradorInspector.php";
    //CONECTAMOS CON EL SERVIDOR
    include_once "conexion.php";
    //RECUPERAMOS LAS VARIABLES 
    $buscar1=$_POST['buscar1'];
    $buscar2=$_POST['buscar2'];
    $buscar3=$_POST['buscar3'];
    if($buscar1==""){
        $buscar1="NULL";
    }
    if($buscar2==""){
        $buscar2="NULL";
    }
    if($buscar3==""){
        $buscar3="NULL";
    }
    //SENTENCIA SQL
    $sql="CALL Listar_laboratoristas('$buscar1','$buscar2','$buscar3')";
    //echo $sql;
    $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
    $row=mysqli_fetch_array($result);
    if (!$result)
    {
            header('Location: Laboratoristas.php?resultado=0'); 

    }
    else
    {
        if(is_null($row))
        {
            header('Location: Laboratoristas.php?resultado=1'); 
        
        }
        else
        {
            include ('Laboratoristas1.php');
        }
    }
?>