<?php
    include "sesion.php";
    include "verificarAdministrador.php";
    //CONECTAMOS CON EL SERVIDOR
    include_once "conexion.php";
    //RECUPERAMOS LAS VARIABLES 
    $buscar=$_POST['BuscarDocumento'];
    $boton=$_POST['BotonBuscar'];
    //HACEMOS LA SENTENCIA DE SQL
    $sql="SELECT * FROM tb_usuario WHERE doc_usu=$buscar";
	//EJECUTAMOS LA SENTENCIA SQL
    $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
    $row=mysqli_fetch_array($result);
    if (!$result)
    {
        if($boton=="BotonActualizarUsuario")
        {
            header('Location: ActualizarUsuario.php?error=0'); 
        } 
        elseif($boton=="BotonEliminarUsuario")
        {
            header('Location: EliminarUsuario.php?error=4'); 
        }

    }
    else{
        if($boton=="BotonActualizarUsuario")
        {
            if(is_null($row))
            {
                header('Location: ActualizarUsuario.php?error=1');   
            
            }
            else
            {
                include ('ActualizarUsuario1.php');
            }
        }
        elseif ($boton=="BotonEliminarUsuario")
        {
            if(is_null($row))
            {
                header('Location: EliminarUsuario.php?error=1');   
            
            }
            else
            {
                include ('EliminarUsuario1.php');
            }            
        }

    }
?>