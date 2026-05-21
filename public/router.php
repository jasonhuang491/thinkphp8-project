<?php
// public/router.php
// ThinkPHP 开发服务器路由文件

if (is_file($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'])) {
    return false;
}

$_SERVER['SCRIPT_FILENAME'] = __DIR__ . DIRECTORY_SEPARATOR . 'index.php';
$_SERVER['SCRIPT_NAME']     = '/index.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . 'index.php';