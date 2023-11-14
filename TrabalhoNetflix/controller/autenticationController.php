<?php
session_start();
//Se não existir a session login
if(!isset($_SESSION['id'])){
    header('location:index.php?cod=50');
}
?>
