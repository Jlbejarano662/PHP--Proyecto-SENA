<?php
    include "sesion.php";
    include_once "conexion.php";

    
    //RECUPERAMOS LAS VARIABLES 
    $documento=$_POST['Documento'];
    $contrasena=$_POST['Contraseña'];
    $nombre=$_POST['Nombres'];
    $apellido=$_POST['Apellidos'];
    $UniFuncional=$_POST['UniFuncional'];
    $Correo=$_POST['Correo'];
    $firma=$_FILES['Firma']['name'];
    if ($firma==""){
            //HACEMOS LA SENTENCIA DE SQL
            $sql="UPDATE tb_usuario SET doc_usu='$documento', contrasena='$contrasena', nom_usu='$nombre', ape_usu='$apellido', UnidadFuncional='$UniFuncional', correo='$Correo' WHERE doc_usu ='".$_SESSION['usu']."'";
            echo $sql;
            //EJECUTAMOS LA SENTENCIA SQL
            $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
            $row =mysqli_fetch_array($result);
            if (!$result)
            {

                header('Location: Micuenta.php?resultado=0'); 

            }
            else{
                //move_uploaded_file($temp,'firmas/'.$firma1);
                header('Location: Micuenta.php?resultado=1'); 

            }

    }
    else{
        //comprobar tipo de imagen y  huardar su ubicacion
        $tipo=$_FILES['Firma']['type'];
        $temp=$_FILES['Firma']['tmp_name'];
        if(!strpos($tipo,'jpeg'))
        {
            header('Location: Micuenta.php?resultado=2');
        }
        else
        {
            //HACEMOS LA SENTENCIA DE SQL
            $firma1=$_SESSION['usu'].$firma;//se le da un nombre único a la firma
            $sql="UPDATE tb_usuario SET doc_usu='$documento', contrasena='$contrasena', nom_usu='$nombre', ape_usu='$apellido', UnidadFuncional='$UniFuncional', correo='$Correo', firma_usu='$firma1' WHERE doc_usu ='".$_SESSION['usu']."'";
            echo $sql;
            //EJECUTAMOS LA SENTENCIA SQL
            $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
            $row =mysqli_fetch_array($result);
            if (!$result)
            {

                header('Location: Micuenta.php?resultado=0'); 

            }
            else{
                move_uploaded_file($temp,'firmas/'.$firma1);
                header('Location: Micuenta.php?resultado=1'); 

            }
        }

    }


?>