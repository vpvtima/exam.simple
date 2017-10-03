<?php
require_once  'app/layouts/_classes.php';
$main->title = 'Колледж';
$main->description = 'Описание колледжа';
$main->header();
?>
    <h1><?php echo $main->title; ?></h1>
    <p class="lead"><?php echo $main->description; ?></p>
    <?php
    $xml = simplexml_load_file('app/data/college.xml');
    ?>
    <?php foreach ($xml as $val):?>
        <?= (string)$val->title;?>
        <?= (string)$val->content; ?>
    <?php endforeach; ?>
<?php $main->footer(); ?>