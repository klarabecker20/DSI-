<?php
session_start();
//se não existir a session login
if(!isset($_SESSION['Login'])){
    header('location:index.php?cod=172');
}
?>