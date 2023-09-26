<?php
require_once './model/racasModel.php';
if($_POST){
    //inseri no bd
    $raca = new racasModel();
    $raca->setNome($POST['nome']);
    $raca->setDescricao($POST['descrição']);
    $raca->setFaixapreco($POST['faisapreco']);
    $raca->setFaixapeso($POST['faixapeso']);
    $raca->insert();
    if($total==1){
        header('location:cadastrarRacasPage.php?cod=success');
    } else {
        header('location:cadastrarRacasPage.php?cod=error');
    }
}else if($_REQUEST){
    //edita algo no bd ou exclui algo
}else {
    //selecionar algo no bd
    loadAll();
}
function loadAll(){
    //crio um objeto do tipo racas
    $racas = new racasModel();
    $racasList =$racas ->loadAll();
    return $racasList;
}
function loadById($id){
    //crio um objeto do tipo racas
    $raca = new racasModel();
    //executa o metodo para carregar por id 
    $raca ->loadById($id);
    //retorna um 
    return $raca;
}