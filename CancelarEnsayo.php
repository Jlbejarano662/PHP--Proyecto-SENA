<?php
    include "sesion.php";
    include "VerificarAdministradorLaboratorista.php";

    //RECUPERAMOS VARIABLES
    $id_const=$_POST['cancelar'];
    include_once "conexion.php";
    $sql="DELETE FROM tb_resultados WHERE id_const='".$id_const."' ORDER BY ID_result DESC LIMIT 1";
    echo $sql;
    $result=$link->query($sql);
    if (!$result)
    {
        header('Location: NuevoEnsayo.php?resultado=0'); 
    }
    else
    {
        header('Location: NuevoEnsayo.php'); 
    }
?>