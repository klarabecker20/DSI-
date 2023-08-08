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
                $result = array(
                    array('id'=>1, 'nome'=>'Oi','imagem'=>'img/filmes/meuANiversario.png'),
                    array('id'=>2, 'nome'=>'Clara','imagem'=>'img/filmes/meusSogrosTaoProCrime.png'),
                    array('id'=>3, 'nome'=>'Eu','imagem'=>'img/filmes/bb.png'),
                    array('id'=>4, 'nome'=>'Te','imagem'=>'img/filmes/taticasDoAmor2.png'),
                    array('id'=>5, 'nome'=>'Amo<3','imagem'=>'img/filmes/panico.png')
                );
                
                foreach ($result as $data){
                    echo('<tr>');
                        echo('<td>');
                            echo($data['id']);
                        echo('</td>');
                        echo('<td>') ;
                            echo($data['nome']);
                        echo('</td>');
                        echo('<td>');
                            echo('<img src="'.$data['imagem'].'"alt=""/>');
                        echo('</td>');
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
