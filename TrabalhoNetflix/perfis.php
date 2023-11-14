<?php
require_once './controller/autenticationController.php';
?>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/images.png">
<title>Perfis</title>
<style>
    body{
        background-color: black;
    }
    .filmes{
        width: 100%;
        height: 100%;
    }
    .filmes:hover{
        opacity: 0.3;
        transform: scale(1.2);

    }
    #text{
        padding-left: 3%;
    }
</style>
</head>
<body class="container">
    <header>
        <a href="index.php"><img src="img/logo.png" alt="" style="width: 15%; padding: 20px;"></a>
        <a style="text-decoration: none; color: white; margin:50px;" href="./home.php">Perfis</a>
        <a style="text-decoration: none; color: red;margin:50px;" href="./controller/logoutController.php?cod=logout">Logout</a>
        <a style="text-decoration: none; color: green;margin:50px;" href="index.php?pg=2&&id=<?php
        @session_start();
        echo $_SESSION['id'];
        ?>">Alterar Cadastro</a>
        <div class="row">
            <?php
            $falcao = array("img/filmes/falcao/VeF1.jpeg", "img/filmes/falcao/+Ve+F.jpeg", "img/filmes/falcao/VeF.T.jpeg", "img/filmes/falcao/VeF.4.jpeg", "img/filmes/falcao/VeF.R.jpeg");
            $kids = array("img/filmes/infantil/apequenasereia.jpeg", "img/filmes/infantil/cada um na sua casa.jpeg", "img/filmes/infantil/elementos.jpeg", "img/filmes/infantil/enrolado.jpeg", "img/filmes/infantil/gato de botas.jpeg");
            $yang = array("img/filmes/yang/licoes.jpg", "img/filmes/yang/até que a sorte nos separe.jpeg", "img/filmes/yang/pai em dobro.jpg", "img/filmes/yang/todo dia a mesma noite.jpeg", "img/filmes/yang/minha mãe é uma peça.jpeg");
            $oficial = array();
            @$cod = $_REQUEST['cod'];
            if (isset($cod)) {
                if ($cod == '1') {
                    echo '<h5 id="text" style="color:white">Assistidos Recentemente:</h5>';
                    $oficial = $falcao;
                } else if ($cod == '2') {
                    $oficial = $kids;
                    echo '<h5 id="text" style="color:white">Assistidos Recentemente:</h5>';
                } else if ($cod == '3') {
                    echo '<h5 id="text" style="color:white">Nacionais:</h5>';
                    $oficial = $yang;
                }
            } else {
                header("location:index.php");
            }
            foreach ($oficial as $imgs1) {
                echo '
                            <div class="col-md-2" style="margin: 20px;">
                                <img class="filmes" src="' . $imgs1 . '"/>
                            </div>';
            }
            ?>
        </div>
        <div class="row">
            <?php
            $falcao2 = array("img/filmes/falcao/VeF.6.jpeg", "img/filmes/falcao/VeF.7.jpeg", "img/filmes/falcao/VeF.8.jpeg", "img/filmes/falcao/VeF.9.jpeg", "img/filmes/falcao/VeF.10.jpeg");
            $kids2 = array("img/filmes/infantil/malévola.jpeg", "img/filmes/infantil/minions.jpeg", "img/filmes/infantil/pequenos gandes heróis.jpeg", "img/filmes/infantil/shrek.jpeg", "img/filmes/infantil/toystory.jpeg");
            $yang2 = array("img/filmes/yang/oppenheimer.jpeg", "img/filmes/yang/carandiru.jpeg", "img/filmes/yang/megatubarão.jpeg", "img/filmes/yang/top gun maverick.jpeg", "img/filmes/yang/tropa de elite.jpeg");
            $oficial2 = array();
            @$cod = $_REQUEST['cod'];
            if (isset($cod)) {
                if ($cod == '1') {
                    echo '<h5 id="text" style="color:white">Sugeridos Para Você:</h5>';
                    $oficial2 = $falcao2;
                } else if ($cod == '2') {
                    echo '<h5 id="text" style="color:white">Adicionados recentemente:</h5>';
                    $oficial2 = $kids2;
                } else if ($cod == '3') {
                    echo '<h5 id="text" style="color:white">Seus Preferidos:</h5>';
                    $oficial2 = $yang2;
                }
            } else {
                header("location:index.php");
            }
            foreach ($oficial2 as $imgs) {
                echo '<div class="col-md-2" style="margin: 20px;">
                        <img class="filmes" src="' . $imgs . '"/>
                      </div>';
            }
            ?>
        </div>
    </header>
</body>
</html>