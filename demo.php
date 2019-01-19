<?php
//为了方便 不标准 标准的引入文件和执行应该分开
require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers\IndexController;
use App\Models\User;
use ClassMap\Lib\ClassMapLibClass;
use Psr0\Lib\Psr0LibClass;
use Psr4\Lib\Psr4LibClass;
//不能做use Hello

//psr-0
Psr0LibClass::index();
//psr-4
Psr4LibClass::index();
//classmap
ClassMapLibClass::index();
Hello::index();

// psr-4 规范的自动载入
// 你应该知道去哪写代码
IndexController::index();
User::index();

//files 自动加载
hello_common();
hello_system();
