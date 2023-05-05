<html>
    <head>
        <title>bottons</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/deafult.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
           
        </style>
    </head>
    <body>
        <form method="POST" action="bottonsbootstrap.php">
        <input type="text" name="teste">
        <input class="btn btn-success" type="submit" value="enviar">
        <a class="btn btn-danger" href="#">Google</a>
        <input class="btn btn-link" type="submit" value="enviar">
        <?php
        if ($_POST){
            $texto = $_POST['teste'];
            if (!empty($texto)){
                header("location: http://www.ufsm.br");
            }else{
                echo('<div class="alert alert-danger">
                      <strong>ATENÇÃO!</strong> O campo não pode ser vazio! 
                      </div> ');   
            }
        }
        ?>
        </form>
    </body>
</html>
