<?php

require_once '../model/usuariosModel.php';
if ($_POST) {
    $usuario = new usuariosModel();
    $usuario->Autenticar();
}
?>