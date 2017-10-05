<?php
require_once  'app/layouts/_classes.php';
$main->title = 'Колледж';
$main->description = 'Описание колледжа';
$main->header();
?>

    <div class="jumbotron">
        <h1><?php echo $main->title; ?></h1>
        <p class="lead"><?php echo $main->description; ?></p>
        <small>данные берутся из <span class="badge">xml</span> файла</small>
    </div>
    <div class="row marketing">
        <h1><?php echo $main->title; ?></h1>
        <p class="lead"><?php echo $main->description; ?></p>
        <?php
        $xml = simplexml_load_file('app/data/college.xml');
        ?>
        <?php foreach ($xml as $val):?>
            <div class="panel panel-default">
                <div class="panel-heading"><?= (string)$val->title;?></div>
                <div class="panel-body"><?= (string)$val->content; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php $main->footer(); ?>