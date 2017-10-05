<?php
require_once  'app/layouts/_classes.php';
$main->title = 'Главная страница';
$main->description = 'Главная страница';
$main->header();
?>

    <div class="jumbotron">
        <h1>Hello, bro!</h1>
        <p class="lead">Обкатка простейших web-технологий</p>
        <p><small>С использованием PHP, PhpStorm, Github, Git, JSON, XML, CSV, Html, Bootstrap 3, Data, Apache</small></p>
        <p><a target="_blank" class="btn btn-lg btn-success" href="https://github.com/vsptima/simple" role="button">Go to Github!</a></p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>PHP</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>PhpStorm</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Github</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>JSON</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>XML</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>CSV</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Bootstrap 3</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Data</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Apache</h3>
                </div>
            </div>
        </div>
    </div>

<?php
$main->footer();
?>