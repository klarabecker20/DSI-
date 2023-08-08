<?php
require_once './shared/header.php';
?>
<div>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo($cars[0] . '<br>');
    echo($cars[1] . '<br>');
    echo($cars[2] . '<br>');
    //echo($cars[3].'<br>');
    echo('<hr>');
    echo('<p>Tamanho do array: ' . count($cars) . '</p>');
    echo('<hr>');
    echo('<p>Percorrer o array com for</p>');
    for ($i = 0; $i < count($cars); $i++) {
        //printf("\n%s", cars[i]);
        echo('<br>' . $cars[$i]);
    }
    echo('<hr>');
    echo('<p>Percorrer o array com while</p>');
    $indice = 0;
    while ($indice < count($cars)) {
        echo('<br>' . $cars[$indice]);
        $indice++;
    }
    echo('<hr>');
    echo('<p>Percorrer o array com foreach</p>');
    //foreach ($cars as $key => $value) {
    foreach ($cars as $value) {
        echo('<br>' . $value);
    }
    
    ?>
</div>
<?php
require_once './shared/footer.php';
?>