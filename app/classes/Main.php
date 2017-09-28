<?php
// аналог класса Page
require_once 'Seo.php';
class Main extends  Seo
{
    public function _construct()
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
    }
    public function header()
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'app/layouts/_top.php';
    }
    public function footer()
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'app/layouts/_bottom.php';
    }
    public function loadData()
    {
        //
    }
}
