<?php
if ($_REQUEST) {
    @session_start();
    @session_destroy();
    @session_abort();
    @setcookie('email', $email, time() -86400, "/");
    header('location:../index.php?cod=51');
}

