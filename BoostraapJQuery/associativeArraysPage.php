<?php
require_once './shared/header.php';
?>

<?php
//Pode ser criado desta forma
$age = array('Peter'=>'35', 
    'Ben'=>'37', 'Joe'=>'43');
//Ou desta forma
$age['Maria'] = '20';

//Para percorrer um array associativo
foreach ($age as $key => $value) {
    echo('<p> A idade de '.$key.
            ' é : '.$value.'</p>');
}
$dados = array('email'=>'a@a',
    'senha'=>'asasas');

?>
<?php
require_once './shared/footer.php';
?>