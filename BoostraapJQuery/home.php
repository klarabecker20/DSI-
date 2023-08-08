<!DOCTYPE html>
<html>
    <?php
    require_once './controller/autenticationController.php';
    require_once './shared/header.php';
    ?>
    <h2>
        <?php
        @session_start();
        echo ('Bem-vindo ' . $_SESSION['login']);
        ?>
    </h2>
    <h3>Sobre o site!!!</h3>
    <p class="text-bg-info">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et consequat orci. Nunc rutrum, turpis tincidunt maximus laoreet, libero ligula euismod ligula, vitae tincidunt nulla ipsum quis odio. Nullam mi leo, malesuada id ex vel, facilisis tristique sem. In laoreet mattis risus, quis vestibulum odio congue a. Nam pulvinar justo eget sollicitudin aliquet. Donec purus orci, gravida et congue in, elementum id augue. Integer viverra nisi id tellus pulvinar mollis. 
    </p>
    <?php
    require_once './shared/footer.php';
    ?>
</html>
