<?php
// psr-0: "Psr0\\Lib\\": "psr0/lib/src/"
namespace Psr0\Lib;

class Psr0LibClass
{
    public static function index()
    {
        echo __CLASS__ . "@" . __FILE__ . PHP_EOL;
    }
}
