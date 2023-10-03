<?php
if($_POST){
    //inseri no bd
    require_once '../model/racasModel.php';
    $raca = new racasModel();
    $raca->setNome($_POST['nome']);
    $raca->setDescricao($_POST['descricao']);
    $raca->setFaixapreco($_POST['faixapreco']);
    $raca->setFaixapeso($_POST['faixapeso']);
    $total = $raca->insert();
    if($total==1){
        header('location:../cadastrarRacasPage.php?cod=success');
    } else {
        header('location:../cadastrarRacasPage.php?cod=error');
    }
}else if($_REQUEST){
    //edita algo no bd ou exclui algo
}else {
    //selecionar todos os registros
    loadAll();
}
function loadAll(){
    //importo racas model
    require_once './model/racasModel.php';
    //crio um objeto do tipo racas
    $racas = new racasModel();
    $racasList =$racas ->loadAll();
    return $racasList;
}
function loadById($id){
    //importo racas model
    require_once './model/racasModel.php';
    //crio um objeto do tipo racas
    $raca = new racasModel();
    //executa o metodo para carregar por id 
    $raca ->loadById($id);
    //retorna um 
    return $raca;
}