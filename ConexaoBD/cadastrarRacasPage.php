<html>
    <head>
        <script src="js/code.jquery.com_jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/cdn.datatables.net_1.13.6_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_js_bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/cdn.datatables.net_1.13.6_js_jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>cadastro</title>
    </head>
    <body>
        <form method="post" action="controller/racaController.php">
            <div class="container">
                <?php
                if($_REQUEST){
                    $cod= $_REQUEST['cod'];
                    if($cod=='success'){
                        echo '<div class="alert alert-success">'
                        . '';
                        echo 'registro inserido!';
                        echo '</div>';
                    }else if ($cod=='error'){
                        echo '<div class="alert alert-danger">';
                        echo '<span>Erro:</span> ocorreu um erro. tente mais tarde.';
                        echo '</div>';
                    }else if($cod=='edit'){
                        //capturo o id q é informado para edição  
                        require_once './controller/racaController.php';
                        $id= $_REQUEST['id'];
                        //carrego o obj de racas q vai ser modificado
                        $racaObject = loadById($id);
                    }else if($cod=='excluir'){
                        
                    }
                }
                ?>
                <h1>Cadastro de Raças</h1>
                <input type="hidden" name="id" value="<?php echo @(isset($racaObject)? $racaObject->getId():'')?>">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" value="<?php echo @(isset($racaObject)? $racaObject->getNome():'')?>" name="nome" id="nome">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" value="<?php echo @(isset($racaObject)? $racaObject->getDescricao():'')?>" name="descricao" id="descricao">
                </div>
                <div class="form-group">
                    <label for="faixapreco">Faixa Preço:</label>
                    <input type="text" class="form-control" value="<?php echo @(isset($racaObject)? $racaObject->getFaixapreco():'')?>" name="faixapreco" id="faixapreco">
                </div>
                <div class="form-group">
                    <label for="faixapeso">Faixa Peso:</label>
                    <input type="text" class="form-control" value="<?php echo @(isset($racaObject)? $racaObject->getFaixapeso():'')?>" name="faixapeso" id="faixapeso">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </body>
</html>
