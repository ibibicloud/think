<?php

// 路由配置
use think\facade\Route;

// 全局变量规则
// 系统默认的变量规则设置是\w+,只会匹配字母、数字和下划线字符,并不会匹配特殊符号和中文
Route::pattern([
    'id'		=>	'\d+',
    'seo'		=>	'[a-zA-Z0-9_-]+',
    'alphaNum'	=>	'\w+',
    'q'			=>	'[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*',
]);

