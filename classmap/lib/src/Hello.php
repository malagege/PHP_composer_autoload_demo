<?php

//沒有使用namespace，demo.php不需要做use Hello

class Hello
{
    public static function index()
    {
        echo __CLASS__ . "@" . __FILE__ . PHP_EOL;
    }
}
