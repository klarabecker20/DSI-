<?php
if($_POST){
    //inseri no bd
    require_once '../model/racasModel.php';
    $raca = new racasModel();
    $raca->setNome($_POST['nome']);
    $raca->setDescricao($_POST['descricao']);
    $raca->setFaixapreco($_POST['faixapreco']);
    $raca->setFaixapeso($_POST['faixapeso']);
    $raca->setId($_POST['id']);
    // se a variável q vier do form vier vazia, entt inseri um novo registro 
    if(empty($_POST['id'])){
        $total = $raca->insert();
    }else {
        //atualiza o registro existente 
        $id = $_POST['id'];
        $raca->setId($id);
        $total = $raca->update();
    }
    if ($total == 1) {
        //Se estiver inserindo um novo registro somente exibo  a msg.
        if(empty($raca->getId())) {
            header('location:../cadastrarRacasPage.php?cod=success');
        }else{
            //Atualizei e foi um sucesso
             header('location:../listarRacasPage.php?cod=success');
        }
    } else {
        header('location:../cadastrarRacasPage.php?cod=error');
    }
}else if($_REQUEST){
    //edita algo no bd ou exclui algo
    if(isset($_REQUEST['id'])&&$_REQUEST['cod']=='del'){
        require_once '../model/racasModel.php';
        $raca = new racasModel();
        $raca->setId($_REQUEST['id']);
        if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])){
          $raca ->setId($_REQUEST['id']);
        //exclui
        $total= $raca ->delete();
        if($total==1){
            header('location:../listarRacasPage.php?cod=success');
        }
   }
}
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