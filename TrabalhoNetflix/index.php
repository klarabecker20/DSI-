<!DOCTYPE html>
<!-- NOVO -->
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/images.png">
    <title>Netflix</title>
    <style>
        body {
            background-image: url("img/back.jpg");
        }
    </style>
</head>
<body class="container">

<header>
    <a href="index.php"><img src="img/logo.png" alt="Logo da Netflix" style="width: 15%; padding: 20px;"></a>
</header>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="row" style="border-radius: 5px; background-color: black; background:rgba(0,0,0,0.8);
             margin: 30px 30px 30px 30px; padding: 20px">
            <!-- Header -->
            <?php
            $pg = isset($_REQUEST['pg']) ? $_REQUEST['pg'] : null;

            if (isset($pg)) {
                if ($pg == '1') {
                    echo '<form method="POST" action="controller/cadastrarController.php">';
                    echo '<h3 style="color: white; opacity: 1">Cadastrar:</h3>';
                    echo '<div class="mb-3 mt-3">';
                    echo '<input type="email" class="form-control" id="email" placeholder="Insira seu Email"
                             name="email" required="" style="background-color: #484d50; border-color:#484d50">';
                    echo '</div>';
                    echo '<div class="mb-3 mt-3">';
                    echo '<input style="background-color: #484d50; border-color:#484d50;"
                           class="form-control" type="password" id="senha"
                           placeholder="Insira sua senha" name="senha" required>';
                    echo '</div>';
                    echo '<div class="mb-3 mt-3">';
                    echo '<input style="background-color: #484d50; border-color:#484d50;"
                           class="form-control" type="text" id="nome"
                           placeholder="Insira seu nome" name="nome" required>';
                    echo '</div>';
                    echo '<div class="d-grid" >
                    <input type="submit" class="form-control btn btn-danger">
                    </div>';
                    echo '</form>';
                }
            } else {
                echo '<form method="POST" action="controller/loginController.php">';
                echo '<h3 style="color: white; opacity: 1">Entrar:</h3>';
                if (!isset($_COOKIE['email'])) {
                    echo '<div class="mb-3 mt-3">';
                    echo '<input type="email" class="form-control" id="email" placeholder="Insiira seu Email"
                             name="email" required="" style="background-color: #484d50; border-color:#484d50">';
                    echo '</div>';
                } else {
                    echo '<div class="mb-3 mt-3">';
                    echo '<input type="email" class="form-control" id="email" placeholder="Insira seu Email" name="email" value="' .
                    $_COOKIE['email'] . '" required="" style="background-color: #484d50; border-color:#484d50;">';
                    echo '</div>';
                }
                echo '<div class="mb-3 mt-3">';
                echo '<input style="background-color: #484d50; border-color:#484d50;"
                       class="form-control" type="password" id="senha"
                       placeholder="Insira sua senha" name="senha" required>';
                echo '</div>';
                echo '<div class="d-grid" >
                <input type="submit" class="form-control btn btn-danger">
                </div>';
                echo '<div class="d-grid">';
                $cod = isset($_REQUEST['cod']) ? $_REQUEST['cod'] : null;
                if (isset($cod)) {
                    if ($cod == '50') {
                        echo ('<br><div class="alert alert-danger">');
                        echo ('Verifique usuário ou senha.');
                        echo ('</div>');
                    } else if ($cod == '51') {
                        echo ('<br><div class="alert alert-warning">');
                        echo ('Sua sessão expirou. Realize o login novamente.');
                        echo ('</div>');
                    }
                }
                echo '</div>';
                echo '</form>';
            }
            ?>
            <div>
                <?php
                echo '<form  method="post" action="controller/loginController.php">';
                echo '<label style="color:white" for="lembrar">';
                if (!isset($_COOKIE['email'])) {
                    echo('<input type="checkbox" checked="" class="form-check-input" for="lembrar" id="lembrar" name="lembrar" value="1">');
                } else {
                    echo('<input type="checkbox" checked="" class="form-check-input" for="lembrar" id="lembrar" name="lembrar" value="1">');
                }
                echo '  Lembre-se de mim </label>';
                echo '</form>';
                ?>
            </div>
            <p style="color:white">Novo por aqui? <b><a href="index.php?pg=1">Assine agora.</a></b></p>
            <p style="color:white">Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a href="">Saiba mais.</a></p>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>
</body>
</html>
