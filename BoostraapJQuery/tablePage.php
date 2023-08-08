<!DOCTYPE html>
<html>
    <?php
    require_once './controller/autenticationController.php';
    require_once './shared/header.php';
    ?>
    <div>
        <br>
        <table id="example" class="table table-responsive table-bordered table-striped table-dark">
            <!-- Cabeçalho da tabela -->
            <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Stock
                    </th>
                    <th>
                        Sold
                    </th>
                </tr>
            </thead>
           
            <tbody>
                <?php
                //Abrir conexão com banco de dados
                //Executar a consulta sql
                //Trabalhar com o resultado desta consulta
                //$cars = resultado da consulta
                //SELECT * cars;
                $cars = array(
                    array("Volvo", 22, 18),
                    array("BMW", 15, 13),
                    array("Saab", 5, 2),
                    array("Land Rover", 17, 15)
                );
                foreach ($cars as $row) {
                    echo('<tr>');
                    foreach ($row as $col) {
                        echo('<td>');
                        echo($col);
                        echo('</td>');
                    }
                    echo('</tr>');
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <?php
    require_once './shared/footer.php';
    ?>
</html>
