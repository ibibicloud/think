<?php

// Session配置
return [
    'id'             => '',
    // SESSION_ID的提交变量,解决flash上传跨域
    'var_session_id' => '',
    // SESSION 前缀
    'prefix'         => 'xyg',
    // 是否自动开启 SESSION
    'auto_start'     => true,
    // 过期时间
    'expire'         => 3600 * 24 * 3,
];