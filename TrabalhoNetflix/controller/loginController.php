<?php

if ($_POST) {
    require_once '../model/usuariosModel.php';
    $usuario = new usuariosModel();
    $usuario->Autenticar();
} else if ($_REQUEST) {
    if (isset($_REQUEST)) {
        require_once '../model/usuariosModel.php';
        @$doc = $_REQUEST['doc'];
        $usuario = new usuariosModel();
        @$id = $_REQUEST['id'];
        $usuario->loadById($id);
        if ($doc == 'alterar') {
            header('location:../index.php?pg=2');
            $usuario->update();
        }
    }
}
?>