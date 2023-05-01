<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/deafult.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Pampa Corte Plus</title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="responsive"> 
         <h2>Pampa Corte Plus</h2>
        <form method="post" action="UserDetails.php">
            <div class="alert alert-warning">
            <strong>Atenção!</strong> A solicitação para utilizar o sistempa Pampa Corte Plus depende da aprovação do administrador do sistema. Para tal, preencha corretamente todos os campos solicitados. Em breve entraremos em contato.
            </div>
            <table>
                <tr>
                    <td class="colunas">Nome:</td>
                    <td>
                        <input type="text" name="Nome"
                               placeholder="Informe seu nome completo">
                    </td>
                </tr>
                <tr>
                    <td class="colunas">E-mail:</td>
                    <td>
                        <input type="text" name="Email"
                               placeholder="Informe seu E-mail">
                    </td>
                </tr>
                <tr>
                    <td class="colunas">Telefone:</td>
                    <td>
                        <input type="text" name="Telefone"
                               placeholder="Informe seu telefome">
                    </td>
                </tr>
                <tr>
                    <td class="colunas">Atuação:</td>
                    <td>
                        <textarea name="Atuacao" Placeholder="Informe a sua área de atuação"> </textarea>
                    </td>
                    <td></td>
                </tr>
                 <tr>
                     <td class="colunas">Selecione um tipo de acesso:</td>
                    <td>
                        <input type="radio" name="Acesso" value="Administrador">Administrador<br>
                        <input type="radio" name="Acesso" value="Estudante">Estudante <br>
                        <input type="radio" name="Acesso" value="Produtor">Produtor <br>
                        <input type="radio" name="Acesso" value="Professor">Professor <br>
                        <input type="radio" name="Acesso" value="Técnico">Técnico <br>
                        <input type="radio" name="Acesso" value="Visitante">Visitante <br>
                    </td>
                </tr>
                <tr>
                    <td class="colunas" >Estado:</td>
                    <td>
                        <select name="Estado">
                            <option value="">Selecione um estado</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="colunas">cidade:</td>
                    <td>
                        <select name="Cidade">
                            <option value="">Selecione uma cidade</option>
                            <option value="Santa Maria">Santa Maria</option>
                            <option value="Acuto">Acuto</option>
                            <option value="Porto Alegre">Porto Alegre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success" type="submit" value="Solicitar Acesso"> 
                    </td>
                </tr>
            </table>
            </div>
        <?php
        if($_POST)
            
        ?>
    </body>
</html>
