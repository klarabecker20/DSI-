<!DOCTYPE html>
<!-- NOVO -->
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/images.png">
        <title>Netflix</title>
        <style>
            body{
                background-image: url("img/back.jpg");
            }
        </style>
    </head>
    <body class="container">
        <header>
            <a href="index.php"><img src="img/logo.png" alt="" style="width: 15%; padding: 20px;"></a>
        </header>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form method="POST" action="controller/loginController.php">
                    <div class="row" style="border-radius: 5px; background-color:black;
                         background:rgba(0,0,0,0.8);margin: 30px 30px 30px 30px; padding: 20px">
                        <h3 style="color: white; opacity: 1">Entrar:</h3>
                        <div class="mb-3 mt-3">
                            <?php
                            $enderecoServidor = 'localhost';
                            $usuario = 'root';
                            $senha = '202211276024';
                            $bancoDados = 'netflix';

                            $mysqli = new mysqli($enderecoServidor, $usuario, $senha, $bancoDados);

                            if (mysqli_connect_errno()) {
                                echo 'Erro de conexao ' . mysqli_connect_error();
                                exit();
                            } else {
                                echo 'Conexão realizada com sucesso!!!<br>';
                            }
                            ?>
                        </div><!-- Header -->
                        <?php 
                        $cadastro = insert();
                        ?>
                        <div class="col-md"><!-- Footer -->
                            <?php
                            if (isset($_COOKIE['email'])) {
                                echo('<input type="checkbox" checked="" class="form-check-input" id="lembrar" name="lembrar" value="1">');
                            } else {
                                echo('<input type="checkbox" checked="" class="form-check-input" id="lembrar" name="lembrar" value="1">');
                            }
                            ?>
                            <label style="color:white" for="lembrar">Lembre-se de mim</label>
                        </div>
                        <p style="color:white">Novo por aqui? <b>Assine agora.</b></p>
                        <p style="color:white">Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a href="">Saiba mais.</a></p>
                    </div>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </body>
</html>              