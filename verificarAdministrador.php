<?php
    include_once "conexion.php";
    $sql="SELECT*FROM tb_usuario WHERE doc_usu ='".$_SESSION['usu']."'";
    $result=$link->query($sql);
    $row=mysqli_fetch_array($link->query($sql));
    if($row[1]!=1)
    {
        header('Location: index.php?error=5');
        die();
    }
?>

 