<?php
if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    @$nome = $_POST['nome'];
    require_once '../model/usuariosModel.php';
    $usuario = new usuariosModel();
    if(isset($_POST['id'])){
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setId($_POST['id']);
        $usuario->setSenha($senha);
        $usuario->update();
        header('location:../home.php');
    } else {
    $usuario->Autenticar($email,$senha); //retorna 0 ou 1  
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
    //Importo raças model
    require_once './model/usuariosModel.php';
    //Crio um objeto do tipo raças
    $usuario = new usuariosModel();

    //Executa o método para carregar por id
    $usuario->loadById($id);

    return $usuario;
}
?>