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
    $racas = new racasModel();
    $racasList =$racas ->loadAll();
    return $racasList;
}