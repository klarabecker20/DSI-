<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Formulário de seleção de Acessórios - Montadora HONDA Veículos</title>
        <style>
            #FOOOTO{
                background-image: url('img/honda.png');
            }
            body{
                color:white;
            }
            p{
                color: black;
            }
        </style>
    </head>
    <body class="container" id="FOOOTO">
        <form method="POST" action="index.php">
            <div class="row">
                <h1>Formulário de seleção de Acessórios - Montadora HONDA Veículos</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <br>
                        <div class="cor">
                            <label>Cor do veículo:</label>
                            <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor do veículo:">
                        </div>
                        <br>
                        <div class="modelo">
                            <label>Modelo do veículo:</label>
                            <select class="form-control" id="modelo" name="modelo">
                                <option>Selecione um modelo</option>
                                <option>Civic</option>
                                <option>Accord</option>
                                <option>CR-V</option>
                                <option>HR-V</option>
                                <option>Fit</option>
                                <option>City</option>
                                <option>WR-V</option>
                                <option>Jazz</option>
                                <option>Pilot</option>
                                <option>Odyssey</option>
                            </select>
                        </div>
                        <br>
                        <div class="ac">
                            <label>Acessórios:</label>
                            <div>
                                <label><input type="checkbox" value="Rodas de Liga Leve" name="acessorio[]"> Roda de Liga Leve</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Teto Solar" name="acessorio[]"> Teto Solar</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Bancos de Couro" name="acessorio[]"> Bancos de Couro</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Ar-Condicionado Digital" name="acessorio[]"> Ar-Condicionado Digital</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Central multimídia" name="acessorio[]"> Central multimídia</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Sensor de Estacionamento" name="acessorio[]"> Sensor de Estacionamento</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Câmera de Ré" name="acessorio[]"> Câmera de Ré</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Faróis de LED" name="acessorio[]"> Faróis de LED</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Bancos com Aquecimento" name="acessorio[]"> Bancos com Aquecimento</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Sistema de Navegação GPS" name="acessorio[]"> Sistema de Navegação GPS</label>
                            </div>
                            <div>
                                <label><input type="checkbox" value="Sensor de Chuva" name="acessorio[]"> Sensor de Chuva</label> 
                            </div>
                            <div>
                                <label><input type="checkbox" value="Controle de Cruzeiro" name="acessorio[]"> Controle de Cruzeiro</label>
                            </div>
                        </div>
                        <br>
                        <div class="obs">
                            <label>Observação:</label>
                            <br>
                            <textarea class="form-control" id="obs" name="obs" placeholder="digite quaisquer observações"></textarea>
                        </div>
                        <br>
                        <input class="btn btn-danger" type="submit" value="Confirmar Seleção de Acessórios">
                    </div>
                </div>
            </div>
            <?php
            if ($_POST) {
                @$cor = $_POST['cor'];
                @$modelo = $_POST['modelo'];
                @$acessorioList = $_POST['acessorio'];
                @$obs = $_POST['obs'];
                if (empty($cor) || empty($modelo) || empty($obs)) {
                    echo('<div class="alert alert-danger">TODOS OS CAMPOS SÃO OBRIGATÓRIOS</div>');
                } else {
                    echo ('<div class="panel panel-success">
                        <div class="panel-heading">Dados Informados:</div>
                        <div class="panel-body">
                        <p>Cor:' . $cor . '</p>
                        <p>Modelo:' . $modelo . '</p>');
                    foreach ($acessorioList as $indice => $valor) {
                        echo '<p> Acessorios escolhidos:' . $valor . '</p>';
                    }
                    echo('<p>Observação:' . $obs . '</p>
                        </div>
                        </div>');
                }
            }
            ?>
        </form>
    </body>
</html>