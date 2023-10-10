<?php
if ($_POST) {
    //print_r($_GET);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dados = array('email'=>'oi@oi','senha'=>'carne');
    $lembrar = $_POST['lembrar'];
    //executar a consulta
    if ($email == $dados['email'] && $senha == $dados['senha']) {
        session_start();
                print_r($_POST);
        if(isset($lembrar)){
            if($lembrar == 1){
                setcookie('email', $email, time() + (86400 * 30), "/");
            }
        }
        //Criei a sessão "login"
        $_SESSION['login'] = $email;
        header('location:../home.php');
    } else {
        //Login inválido 
        header('location:../index.php?cod=50');
    }
} else {
    //redireciona para a index
    header('location:../index.php');
}

?>