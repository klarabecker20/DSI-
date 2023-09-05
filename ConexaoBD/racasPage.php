<html>
    <head>
        <title>oioi</title>
    </head>
    <body>
        <?php
        require_once './model/ConexaoMysql.php';
        //criar um obj de conexão
        $db= new ConexaoMysql();
        $db->Conectar();
        $sql= "select* from racas";
        $result= $db->Consultar($sql);
        foreach ($result as $data) {
             echo '<p>'.$data['nome'].'</p>';
        }
        $db->Desconectar();
        ?>
    </body>
</html>
