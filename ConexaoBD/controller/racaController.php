<?php
require_once './model/ConexaoMysql.php';
if($_POST){
    
}else if ($_REQUEST){
    
}
function carregarDados(){
    $db = new ConexaoMysql();
    $db->Conectar();
    $sql= "select* from racas";
    $resultList = $db->Consultar($sql);
    $db->Desconectar();
    return $resultList;
}