<?php
// [ ThinkPHP 入口文件 ]

namespace think;

require __DIR__ . '/../vendor/autoload.php';

// 执行HTTP应用并响应
$app = new \think\App();
$app->http->name('app')->run()->send();