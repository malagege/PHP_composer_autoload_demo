<?php
// psr-4: "Psr4\\Lib\\": "psr4/lib/src/"
namespace Psr4\Lib;

class Psr4LibClass
{
    public static function index()
    {
        echo __CLASS__ . "@" . __FILE__ . PHP_EOL;
    }
}
