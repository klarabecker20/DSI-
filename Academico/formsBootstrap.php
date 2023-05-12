<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <title> forms bootstrap</title>
        <style>
            .col-sm-12{
                border: 10px solid maroon
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="formsBootstrap.php">
                <div class="row page-header">
                    <div class="col-sm-12">
                        <h1> MENU</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                            <div class="form-group">
                                <label for="matricula">Matricula:</label>
                                <input type="number" class="form-control" id="matricula" name="matricula">
                            </div>
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>  
                            <div class="form-group">
                                <label>Turmas:</label>
                                <div class="radio">
                                    <label><input type="radio" name="turma" value="413" name="413">413</label>
                                    <label><input type="radio" name="turma" value="423" name="423">423</label>
                                    <label><input type="radio" name="turma" value="433" name="433">433</label>
                                </div>  
                            </div>
                        <div class="form-group">
                                <label for="disciplina">Selecione um estado:</label>
                                <select class="form-control" id="estado" name="estado">
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>SP</option>
                                  <option>RJ</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="estado">Selecione uma disciplina:</label>
                                <div class="checkbox">
                                    <label> <input type="checkbox"  name="disciplina[]" value="PDI">PDI</label>
                                </div>
                                <div class="checkbox">
                                    <label> <input type="checkbox"  name="disciplina[]" value="DSI">DSI</label>
                                </div>
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="disciplina[]" value="DSIII">DSI II</label>
                                </div>
                        </div>
                         <div class="form-group">
                                <input type="submit" value="enviar" class="btn btn-primary">
                                <input type="reset" value="limpar campos" class="btn btn-danger">
                        </div>
                    <?php
                    if ($_POST) {
                                    @$matricula = $_POST['matricula'];
                                    @$nome = $_POST['matricula'];
                                    @$turma = $_POST['matricula'];
                                    @$estado = $_POST['matricula'];
                                    @$disciplinaList = $_POST['disciplina'];
                                    echo('<div class="panel panel-success">
                                            <div class= "panel-heading"> Dados Informados </div>
                                            <div class="panel-body"
                                            <p>Matrícula: '.$matricula.'</p>
                                            </div>
                                            </div>');
                                    
                                    
                            }
                    ?>
                </div> 
                <div class="row">
                    <div class="col-sm-4">
                    <img src="images.jpg" alt=""/>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
