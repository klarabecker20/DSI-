<?php
if ($_REQUEST) {
    echo "test";
    @session_start();
    @session_destroy();
    @session_abort();
    header('location:../index.php');
}
