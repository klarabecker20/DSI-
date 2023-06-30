<?php
//se vier qlqr coisa via get
if ($_GET) {
    //entra aq
    $email = $_GET ['email'];
    $senha = $_GET ['senha'];
    //abrir a conexão
    //executar a consulta
    if ($email == 'a@a' && $senha == 'asasas') {
        //login OK
        //echo ('Usuário logado com sucesso');
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