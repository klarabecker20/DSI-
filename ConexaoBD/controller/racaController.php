<?php
require_once './model/racasModel.php';
if($_POST){
    //inseri no bd
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
    $racas = new racasModel();
    //retorna um objeto de raças preenchido se existir o registro
    return $racas ->loadById($id);;
}