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
            }
        </style>
    </head>
    <body class="container">
        <form method="POST" action="index.php">
            <div class="row page-header">
                <div class="col-sm-12">
                    <h1>Formulário de Ordem e Serviço - Bicho Chique PetShop</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <img src="cachorrinho.png" alt="cachorrinho"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <h5><b>Nome do Cliente:</b></h5> 
                        <input name="nome" type="text" placeholder="Digite o nome do Cliente"/>
                    </div>
                    <div class="form-group">
                        <h5><b>Telefone:</b></h5> 
                        <input name="telefone" type="text" placeholder="Digite o Telefone do Cliente"/>
                    </div>
                    <div class="form-group">
                        <h5><b>Animal:</b></h5> 
                        <input name="animal" type="text" placeholder="Digite o nome do Animal"/>
                    </div>
                    <div class="form-group" >
                        <h5><b>Serviços:</b></h5> 
                        <div class="checkbox">
                            <label><input type="checkbox" name="servico" value="banhoetosa"><b>Banho e Tosa</b></label><br>
                            <label><input type="checkbox" name="servico" value="cortedeunhas"><b>Corte de Unhas</b></label><br>
                            <label><input type="checkbox" name="servico" value="limpezadeouvidos"><b>Limpeza de Ouvidos</b></label><br>
                            <label><input type="checkbox" name="servico" value="vacinacao"><b>Vacinação</b></label><br>
                        </div> 
                    </div> 
                   <div class="form-group">
                        <h5><b>Data:</b></h5> 
                        <input name="data" type="date"/>
                    </div>
                    <div class="form-group">
                        <h5><b>Observações:</b></h5> 
                        <textarea name="observacao" placeholder="Digite quaisquer Observações"></textarea>
                    </div>
                    <input class="btn btn-info" type="submit" value="Enviar Ordem de Serviço">
                </div>
                <div class="col-sm-4">
                    <img class="patas img-responsive" src="patas.png" alt="duas patas de cachorros"/>
                    <img class="patas img-responsive" src="patas.png" alt="duas patas de cachorros"/>
                </div>
            </div>
        </form>
        
        <?php
            if ($_POST) {
                        @$telefone = $_POST['telefone'];
                        @$nome = $_POST['nome'];
                        @$animal = $_POST['animal'];
                        @$servico = $_POST['servico'];
                        @$data = $_POST['data'];
                        @$observacao = $_POST['observacao'];
                        echo('<div class="panel panel-success">
                            <div class= "panel-heading"> Dados Informados </div>
                            <div class="panel-body"
                            <p>Matrícula: '.$nome.'</p>
                            <p>Nome: '.$telefone.'</p>
                            <p>Turma: '.$animal.'</p>
                            <p>servico: '.$servico.'</p>
                            <p>Data: '.$data.'</p>
                            <p>Observação: '.$observacao.'</p>
                            </div>
                            </div>');    
            }//else($_POST ===null){
               // echo('<div class="panel panel-danger">
                 //           <div class= "panel-heading">Dados Incompletos</div>
                   //         <div class="panel-body"
                     //       </div>
                       //     </div>');  
               // }
        ?>
    </body>
</html>
