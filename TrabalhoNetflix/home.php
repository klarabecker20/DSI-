<?php
require_once './controller/autenticationController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/images.png">
        <title>Quem está assistindo?</title>
        <style>
            body{
                background-color: black;
            }
            #img{
                padding-top: 20%;
                padding-left: 30%;
            }
        </style>
    </head>
    <body class="container">
        <form method="post" action="perfis.php">
            <div class="row" id="img">
                <h3 style="color: white;padding-left: 10%">Quem está assistindo?</h3>
                <?php
                $result = array(
                    array('nome' => 'Falcão', 'img' => 'img/falcão.png', 'id' => '1'),
                    array('nome' => 'Kids', 'img' => 'img/kids.png', 'id' => '2'),
                    array('nome' => 'Yang', 'img' => 'img/yang.png', 'id' => '3')
                );
                foreach ($result as $data) {
                    echo '<div class="col-md-2" >
                    <a href="./perfis.php?cod='.$data['id'].'">
                            <img style=" height: 150px; width: 150px;" src="'.$data['img'].'"/></a>
                            <h5 style="color:white">'.$data['nome'].'</h5>
                    </div>';
                }
                ?>
            </div>
        </form>
    </body>
</html>