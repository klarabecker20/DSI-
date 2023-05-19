<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Formulário de ordem de serviço- Bicho Chique PetShop</title>
        <style>
            .patas{
                width: 100%;
                border: black;
            }
            body{
                background: #BDECB6;
            }
            .fundo{
                background: white;
                padding-left: 10px;
                padding-right: 10px;
                padding: 20px;
            }
            .container{
                height: 100%;
            }
        </style>
    </head>
    <body class="container">
        <form method="POST" action="index.php">
            <div class="fundo">
                <div class="row page-header">
                    <div class="col-sm-12">
                        <h1>Formulário de Ordem e Serviço - Bicho Chique PetShop</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <img src="img/cachorrinho.png" alt="cachorrinho"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Nome do Cliente:</label>
                            <input class="form-control" name="nome" type="text" placeholder="Digite o nome do Cliente"/>
                        </div>
                        <div class="form-group">
                            <label>Telefone:</label> 
                            <input class="form-control" name="telefone" type="text" placeholder="Digite o Telefone do Cliente"/>
                        </div>
                        <div class="form-group">
                            <label>Animal:</label> 
                            <input class="form-control" name="animal" type="text" placeholder="Digite o nome do Animal"/>
                        </div>
                        <div class="form-group" >
                            <label>Serviços:</label> 
                            <div class="checkbox">
                                <label><input type="checkbox" name="servico[]" value="Banho e Tosa"><b>Banho e Tosa</b></label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="servico[]" value="Corte de Unhas"><b>Corte de Unhas</b></label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="servico[]" value="Limpeza de Ouvidos"><b>Limpeza de Ouvidos</b></label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="servico[]" value="Vacinação"><b>Vacinação</b></label><br>
                            </div> 
                        </div> 
                        <div class="form-group">
                            <label>Data:</label> 
                            <input class="form-control" name="data" type="date"/>
                        </div>
                        <div class="form-group">
                            <label>Observações:</label> 
                            <textarea class="form-control" name="observacao" placeholder="Digite quaisquer Observações"></textarea>
                        </div>
                        <input class="btn btn-info" type="submit" value="Enviar Ordem de Serviço">
                    </div>
                    <div class="col-sm-4">
                        <img class="patas img-responsive" src="img/patas.png" alt="duas patas de cachorros"/>
                        <img class="patas img-responsive" src="img/patas.png" alt="duas patas de cachorros"/>
                    </div>
                </div>
        </form>
        <?php
        if ($_POST) {
            @$nome = $_POST['nome'];
            @$telefone = $_POST['telefone'];
            @$animal = $_POST['animal'];
            @$servicoList = $_POST['servico'];
            @$data = $_POST['data'];
            @$observacao = $_POST['observacao'];
            if (empty($nome) || empty($telefone) || empty($animal) || empty($servicoList) || empty($data)) {
                echo('<div class="panel panel-danger"><div class= "panel-heading">Preencher os campos obrigatórios.</div></div>');
            } else {
                echo('<div class="panel panel-success">
                    <div class= "panel-heading"> Dados Informados: </div>
                        <div class="panel-body">
                            <p>Nome: ' . $nome . '</p>
                            <p>Telefone: ' . $telefone . '</p>
                            <p>Animal: ' . $animal . '</p>');
                foreach ($servicoList as $indice => $valor) {
                    echo '<p> Serviços escolhidos:' . $valor . '</p>';
                }
                echo ('<p>Data: ' . $data . '</p>
                            <p>Observação: ' . $observacao . '</p>
                            </div>
                        </div>');
            }
        }
        ?>
    </div>
</body>
</html>
