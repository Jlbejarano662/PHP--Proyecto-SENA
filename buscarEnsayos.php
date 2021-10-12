<?php
    include "sesion.php";
    //CONECTAMOS CON EL SERVIDOR
    include_once "conexion.php";
    //RECUPERAMOS LAS VARIABLES 
    $buscar1=$_POST['buscar1'];
    $buscar2=$_POST['buscar2'];
    if ($buscar2==""){
        $newDate1 = date("Y-m-d", strtotime($buscar1));
        //echo $newDate1;
        $sql="SELECT * FROM tb_resultados  WHERE fecha_ensayo='$newDate1'";
        //EJECUTAMOS LA SENTENCIA SQL
        $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
        $row=mysqli_fetch_array($result);
        if (!$result)
        {
                header('Location: Informes.php?resultado=0'); 

        }
        else{
                if(is_null($row))
                {
                    header('Location: Informes.php?resultado=1');   
                }
                else
                {
                    include ('Informes1.php');
                }
            }
    }
    else{
        $newDate1 = date("Y-m-d", strtotime($buscar1));
        $newDate2 = date("Y-m-d", strtotime($buscar2));
        $sql="SELECT * FROM tb_resultados  WHERE fecha_ensayo BETWEEN '$newDate1' AND '$newDate2'";
        //echo $sql;
        $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
        $row=mysqli_fetch_array($result);
        if (!$result)
        {
                header('Location: Informes.php?resultado=0'); 

        }
        else{
                if(is_null($row))
                {
                    header('Location: Informes.php?resultado=1');   
                
                }
                else
                {
                    include ('Informes1.php');
                }
            }
    }

  
?>