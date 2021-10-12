<?php
    include "sesion.php";
    include "VerificarAdministradorLaboratorista.php";
    include_once "conexion.php";

    
    //RECUPERAMOS LAS VARIABLES 
    $cono=$_POST['ConstanteDelCono'];
    $dArena=$_POST['DensidadDeLaArena'];
    $dMaxMaterial=$_POST['DensidadMáximaDelMaterial'];
    $porcentaje=$_POST['PorcentajeDeCompactación'];
    //DEFINIMOS EL PUNTO COMO INDICADOR DE DECIMALES
    $cono1=str_replace(',','.',$cono);
    $dArena1=str_replace(',','.',$dArena);
    $dMaxMaterial1=str_replace(',','.',$dMaxMaterial);
    $porcentaje1=str_replace(',','.',$porcentaje);
    //HACEMOS LA SENTENCIA DE SQL PARA INSERTAR LAS NUEVAS CONSTANTES
    $sql="INSERT INTO tb_constantes (id_usu, cons_cono, den_arena, den_max, porc_min) VALUES($row[0],$cono1,$dArena1,$dMaxMaterial1,$porcentaje1)";
    echo $sql;
    //EJECUTAMOS LA SENTENCIA SQL
    $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
    $row =mysqli_fetch_array($result);
    if (!$result)
    {

         header('Location: AdministrarConstantes.php?resultado=0'); 

    }
    else{
         header('Location: AdministrarConstantes.php?resultado=1'); 

    }

?>
