<?php

// 应用设置
return [
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => true,
    // 入口自动绑定模块
    'auto_bind_module'       => false,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter'         => '',

    // 默认模块名
    'default_module'         => 'index',
    // 禁止访问模块
    'deny_module_list'       => ['common'],
    // 默认控制器名
    'default_controller'     => 'Index',
    // 默认操作名
    'default_action'         => 'index',
    // 默认验证器
    'default_validate'       => '',
    // 默认的空模块名指向
    'empty_module'           => 'index',
    // 默认的空控制器名
    'empty_controller'       => 'Error',

    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache'          => false,
    // 请求缓存有效期
    'request_cache_expire'   => null,
    // 全局请求缓存排除规则
    'request_cache_except'   => [],

    // 定义404错误的重定向页面地址
    'http_exception_template'  => [
        403 => app()->getRootPath() . 'assets/page/403.html',
        404 => app()->getRootPath() . 'assets/page/404.html',
    ],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => app()->getRootPath() . 'assets/page/jump.html',
    'dispatch_error_tmpl'    => app()->getRootPath() . 'assets/page/jump.html',
    // 异常页面的模板文件
    'exception_tmpl'         => app()->getThinkPath() . 'tpl/think_exception.tpl',
    // 错误显示信息，线上模式+定义了http_exception_template 404 下才有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',

];
