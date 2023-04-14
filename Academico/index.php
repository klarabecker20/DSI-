<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de ensino</title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Sistema de ensino</h2>
        <form method="get" action="index.php">
            <table>
                <tr>
                    <td>Matricula (número):</td>
                    <td>
                        <!-- int matricula = 1872150 -->
                        <input type="number" name="matricula"
                               placeholder="Matricula">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>
                        <input type="text" name="nome"
                               placeholder="Nome do aluno">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Turmas:</td>
                    <td>
                        <input type="radio" name="turma" value="411">411
                        <input type="radio" name="turma" value="423">423
                        <input type="radio" name="turma" value="413">413
                        <br>
                        <input type="radio" name="turma" value="421">421
                        <input type="radio" name="turma" value="422">422
                        <input type="radio" name="turma" value="433">433
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td>
                        <input type="text" name="telefone"
                               placeholder="Telefone de contato">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td>
                        <input type="text" name="endereco"
                               placeholder="Endereço">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td>
                        <select name="estado">
                            <option value="">Selecione um estado</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar campos">
                    </td>
                    <td></td>
                </tr>
            </table>
            <?php
            if ($_GET) {
                //print_r($_GET);//Imprime tudo que estiver dentro do vetor
                @$matricula=$_GET['matricula'];
                @$turma=$_GET['turma'];
                @$nome=$_GET['nome'];
                @$telefone=$_GET['telefone'];
                @$endereco=$_GET['endereco'];
                @$estado=$_GET['estado'];
                /*echo('<br>Sua matricula é: '. $matricula); 
                echo('<br>Sua turma é: '. $turma);
                echo('<br>Seu nome é: '. $nome);
                echo('<br>seu telefone é:'.$telefone);
                echo('<br>seu endereço é:'.$endereco);
                echo('<br>seu estado é:'.$estado);
                FOOORA DO IF/ELSE, vai printar sempre que enviar*/
                if(empty($matricula)||empty($nome)|| empty($turma)|| empty($telefone)|| empty($endereco)|| empty($estado)){
                    echo ('<div class="alert"> TODOS os campos são obrigatórios </div>');
                } else {
                //entra aqui se todos os campos obrigatórios foram preenchidos
                    $result="matricula:".$matricula."<br>turma".$turma."<br>nome".$nome."<br>telefone".$telefone."<br>endereço".$endereco."<br>estado".$estado;
                    echo($result);
                }
            }
            ?>
        </form>
    </body>
</html>
