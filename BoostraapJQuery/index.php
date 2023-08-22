<?php
require_once './shared/header.php';
?>
<div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
        <form  method="post" action="controller/loginController.php">   
            <div class="row" style="border: 2px solid green;
                 margin: 30px 30px 30px 30px; padding: 20px">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <?php
                    if(isset($_COOKIE['email'])){
                            echo ('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email" value="'.$_COOKIE['email'].'" required="">');
                    }else {
                            echo ('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email" required="">');
                    }
                    ?>
                </div>
                <div class="mb-3 mt-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" 
                           placeholder="Insira sua senha" name="senha" required="">
                </div>
                <div class="mb-3 mt-3">
                    <?php
                    if(isset($_COOKIE['email'])){
                            echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                            name="lembrar" checked value="1">');
                    }else {
                            echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                            name="lembrar" value="1">');
                    }
                    ?>
                    <label for="lembrar" class="form-check-label">Lembre de mim</label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Logar"
                           class="btn btn-outline-success">
                </div>
                <div class="d-grid">
                    <?php
                    //capturavam a variável query string "cod"
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '171') {
                            echo ('<br><div class="alert alert-danger">');
                            echo ('Verifique usuário ou senha.');
                            echo ('</div>');
                        } else if ($cod == '172') {
                            echo ('<br><div class="alert alert-warning">');
                            echo ('Sua sessão expirou. Realize o login novamente.');
                            echo ('</div>');
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4"> </div>
</div>
<?php
require_once './shared/footer.php';
?>