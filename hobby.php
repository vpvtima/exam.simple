<?php
require_once 'app/layouts/_classes.php';
$main->title = 'Хобби';
$main->description = 'Мои увлечения';
$main->header();
$json = file_get_contents('app/data/hobby.json');
$arr = json_decode($json);
?>

<?php foreach($arr as $val): ?>

    <?= ?>

<?php endforeach;?>
