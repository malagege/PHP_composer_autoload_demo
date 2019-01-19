<?php
// classmap 放在 classmap/lib/src 下就好，autoload 会自动扫描记录它
namespace ClassMap\Lib;

class ClassMapLibClass
{
    public static function index()
    {
        echo __CLASS__ . "@" . __FILE__ . PHP_EOL;
    }
}
