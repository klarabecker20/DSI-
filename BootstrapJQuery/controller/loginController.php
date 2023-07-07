<?php

//se vier qlqr coisa via get
if ($_POST) {
    //entra aq
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    //abrir a conexão
    //executar a consulta
    if ($email == 'a@a' && $senha == 'asasas') {
        //login OK
        //echo ('Usuário logado com sucesso');
        //abrir a sessão
        session_start();
        //criei a sessão
        $_SESSION['Login'] = $email;
        header('location:../home.php');
    } else {
        //login inválido
        header('location:../index.php?cod=171');
    }
} else {
    //redireciona pra index
    header('location:../index.php');
}
?>