<?php

if ($_POST) {
    require_once '../model/usuariosModel.php';
    $usuario = new usuariosModel();
    $usuario->setEmail($_POST['email']);    
    $usuario->setSenha($_POST['senha']);
    $usuario->setNome($_POST['nome']);
    if(!empty($_POST['email'])&&!empty($_POST['senha'])&&!empty($_POST['nome'])){
        $total = $usuario->insert(); 
        header('location:../home.php');
    } else {
        header('location:../index.php?pg=1');
    }
} else {
    header('location:../index.php');
}
function loadAll() {
    require_once './model/usuariosModel.php';
    $usuario = new usuariosModel();
    $usuarios = $usuario->loadAll();
    return $usuarios;
} 