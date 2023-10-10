<!DOCTYPE html>
<html>
    <head>
        <script src="js/code.jquery.com_jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/cdn.datatables.net_1.13.6_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_js_bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/cdn.datatables.net_1.13.6_js_jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Lista</title>
    </head>
    <body class="container">
        <table id="racasTable" class="table table-bordered">
            <thead>
            <th>Nome</th>
            <th>Faixa preço</th>
            <th>Faixa peso</th>
            <th>Operações</th>
        </thead>
        <tbody>
            <?php
            require_once './controller/racaController.php';
            $resultList = loadAll();
            foreach ($resultList as $raca) {
                echo '<tr>';
                echo '<td>';
                echo $raca['nome'];
                echo '</td>';
                echo '<td>';
                echo $raca['faixa_peso'];
                echo '</td>';
                echo '<td>';
                echo $raca['faixa_preco'];
                echo '</td>';
                echo '<td>';
                //operações
                echo '<a class="btn btn-primary" href="cadastrarRacasPage.php?cod=edit&&id='.$raca['id'].'">Editar</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="./controller/racaController.php?cod=del&&id='.$raca['id'].'">Excluir</a>';
                echo '</td>';
                echo '</tr>';
            }
            $raca = loadById(5);
            echo $raca ->getNome();
            echo '<hr>';
            $raca->setNome('Brasil');
            echo $raca -> getNome();
            echo '<hr>';
            echo $raca ->getFaixapeso();
            ?>
        </tbody>
    </table>
</body>
<script>
    $(document).ready (function () {
        $('#racasTable').DataTable({
            
        });
    });
</script>
</html>