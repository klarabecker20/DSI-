<?php
require_once './shared/header.php';
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="row" style="border: 2px solid green">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Insira Seu email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Insira Sua senha" name="senha">
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?php
require_once './shared/footer.php';
?>