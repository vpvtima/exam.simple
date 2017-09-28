<?php
// аналог класса Html
class Help
{
    public static function menuLink($href, $text)
    {
        $path = $_SERVER['REQUEST_URI'];
        $active = '';
        if($href==$path)
        {
            $active = 'class="active"';
        }
        $str = "<li {$active} role=\"presentation\"><a href=\"{$href}\">{$text}</a></li>";
        return $str;
    }
    public static function printArray($arr)
    {
        echo "<pre>";
        print_r($arr);
        echo "<pre>";
    }
}
