<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        if($_POST){
                @$Nome /*nome da variáve*/= $_POST['Nome'];
                @$Email= $_POST['Email'];
                @$Telefone= $_POST['Telefone'];
                @$Atuacao= $_POST['Atuacao'];
                @$Acesso= $_POST['Acesso'];
                @$Estado= $_POST['Estado'];
                @$Cidade= $_POST['Cidade'];
                
                if(empty($Nome)||empty($Email)||empty($Telefone)||empty($Atuacao)||empty($Acesso)||empty($Estado)||empty($Cidade)){
                    echo ('<div class="alert"> Todos os campos são obrigatórios</div>');
                } else {
                    $result = "<br>Nome: ".$Nome. "<br>E-mail: ".$Email. "<br>Telefone".$Telefone. "<br>Atuação: ".$Atuacao. "<br>Acesso: ".$Acesso. "<br>Estado: ".$Estado. "<br>Cidade: ".$Cidade;
                echo($result);    
                }
        }
        ?>
    </body>
</html>
