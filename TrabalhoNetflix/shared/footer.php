<div class="col-md"> 
    <?php
    if (isset($_COOKIE['email'])) {
        echo('<input type="checkbox" checked="" class="form-check-input" id="lembrar" name="lembrar" value="1">');
    } else {
        echo('<input type="checkbox" checked="" class="form-check-input" id="lembrar" name="lembrar" value="1">');
    }
    ?>
    <label style="color:white" for="lembrar">Lembre-se de mim</label>
</div>
<br>
<br>
<br>
<p style="color:white">Novo por aqui? <b>Assine agora.</b></p>
<p style="color:white">Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a href="">Saiba mais.</a></p>
</div>
</form>
</div>
<div class="col-sm-4"></div>
</div>
<?php ?>
</body>
</html>