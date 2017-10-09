<?php
require_once 'app/layouts/_classes.php';
$main->title = 'Обо мне';
$main->description = 'Описание меня';
$main->header();
$handle = fopen("app/data/about.csv", "r");
?>

    <div class="jumbotron">
        <h1><?php echo $main->title; ?></h1>
        <p class="lead"><?php echo $main->description; ?></p>
        <small>данные берутся из <span class="badge">csv</span> файла</small>
    </div>

    <div class="row marketing">
        <?php if($handle !== FALSE):?>
            <?php while(($data = fgetcsv($handle, 1000, ",")) !== FALSE):?>
                <div class="panel panel-default">
                    <div class="panel-heading"><?= $data[0]; ?></div>
                    <div class="panel-body"><?= $data[1]; ?></div>
    </div>
            <?php endwhile;?>
            <?php fclose($handle); ?>
        <?php endif;?>
    </div>

<?php $main->footer(); ?>