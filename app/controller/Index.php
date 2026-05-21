<?php

namespace app\controller;

use think\facade\Request;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #f5f5f5; font-family: "Microsoft YaHei", sans-serif; } h1{ font-size: 100px; font-weight: normal; margin-bottom: 40px; } p{ line-height: 1.6em; margin-bottom: 20px; } .logo{ text-align: center; margin-top: 100px; }</style><div style="padding: 24px 48px;"><h1>ThinkPHP 8</h1><p>恭喜你！成功创建了 ThinkPHP 8 项目。</p><p><a href="https://www.thinkphp.cn/" target="_blank">官方网站</a> | <a href="https://doc.thinkphp.cn/" target="_blank">开发文档</a></p></div>';    }
}