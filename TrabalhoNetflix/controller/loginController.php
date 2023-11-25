<?php

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    @$nome = $_POST['nome'];
    $lembrar = $_POST ['lembrar'];
    require_once '../model/usuariosModel.php';
    $usuario = new usuariosModel();
    if (isset($_POST['id'])) {
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setId($_POST['id']);
        $usuario->setSenha($senha);
        $usuario->update();
        header('location:../home.php');
    } else {
        $usuario->Autenticar($email, $senha, $lembrar); //retorna 0 ou 1  
    }
} else if ($_REQUEST) {
    if (isset($_REQUEST)) {
        require_once './model/usuariosModel.php';
        @$id = $_REQUEST['id'];
        $usuario = new usuariosModel();
        $usuario->loadById($id);
    }
}

function loadById($id) {
    require_once './model/usuariosModel.php';
    $usuario = new usuariosModel();
    $usuario->loadById($id);

    return $usuario;
}

?>