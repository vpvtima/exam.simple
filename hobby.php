<?php
require_once 'app/layouts/_classes.php';
$main->title = 'Хобби';
$main->description = 'Мои увлечения';
$main->header();
$json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/app/data/hobby.json');
$arr = json_decode($json);
?>


    <div class="jumbotron">
        <h1><?php echo $main->title; ?></h1>
        <p class="lead"><?php echo $main->description; ?></p>
        <small>данные берутся из <span class="badge">json</span> файла</small>
    </div>

    <div class="row marketing">
        <?php foreach($arr as $key => $val): ?>
            <div class="panel panel-default">
                <div class="panel-heading"><?= $key; ?></div>
                <div class="panel-body">
                    <?php foreach ($val as $item):?>
                        <p><?= $item; ?></p>
                    <?php endforeach;?>
                </div>
            </div>

        <?php endforeach;?>
    </div>


<?php $main->footer(); ?>