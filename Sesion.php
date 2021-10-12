<?php
session_start();
if(!isset($_SESSION['usu'])){
    header('Location: index.php?error=0');
    die();
}
?>