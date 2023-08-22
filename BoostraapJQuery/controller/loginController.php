<?php

//Se vier qualquer coisa via get
if ($_POST) {
    //print_r($_GET);
    //entra aqui e pega os valores.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    @$lembrar = $_POST['lembrar'];
    
    //abrir a conexao
    $dados = array('email'=>'a@a','senha'=>'asasas');
    //executar a consulta
    if ($email == $dados['email'] && $senha == $dados['senha']) {
        //Login OK
        //header('location:../index.php?email='.$email.'&&senha='.$senha);
        //echo ('Usuário logado com sucesso.');
        
        //Abrir a sessão
        session_start();
        //Criei a sessão "login"
        $_SESSION['login'] = $email;
        //se o checkbox estiver selecionado
        if (isset($lembrar)){
            if ($lembrar==1){
                //crio o cookie
                //nome,valor,tempo de vida em segundos (o time() soma a hora atual com os segundos do código)
                setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
            }
        }else{
            //se ele não estiverv selecionado e o cookie existe.. destruo
            if(isset($_COOKIE['email'])){
                //destruir cookie
                setcookie("email", "", time() - (86400 * 30), "/" );
            }
        }
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
