<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <style>
            .col-md-12{
                border: 1px solid black;
            }

            p{<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                text-align: justify;
            }
        </style>

    </head>
    <body class="container">
        <!-- Menu -->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tablePage.php">Table Bootstrap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modalPage.php">Modal Bootstrap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carroucelPage.php">Modal Carousel </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="filmesPage.php">Filmes</a>
                    </li>
                    <?php
                    @session_start();
                    if ($_SESSION) {
                        echo('<li class="nav-item">
                        <a class="nav-link link-danger" 
                        style="text-decoration: none;"
                        href="controller/logoutController.php?cod=logout">Logout</a>
                        </li>');
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- FIM Menu -->
        <!-- Corpo da página -->
        <div class="row">
            <div class="col-md-12">