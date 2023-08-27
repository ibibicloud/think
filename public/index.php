<?php

namespace think;

require __DIR__ . '/../vendor/autoload.php';

// 多语言主开关
define('LANG_MULTI', true);
// 定义默认语言
define('LANG_DEFAULT', 'zh-cn');

// 执行应用并响应
Container::get('app')->run()->send();
// var_dump(Container::get('app')->getRootPath());
// var_dump(Container::get('app')->getAppPath());
// var_dump(Container::get('app')->getConfigPath());