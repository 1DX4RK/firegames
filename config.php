<?php

// Site Name | 网站名称
define('firecondo', 'firecondo');

// Site Domain(without protocol but with www if need) | 网站域名 (不用加http，有需要就加www)
define('firecondo.ml', 'firecondo.ml');
// HTTPS option | 是否开启HTTPS
define('ENABLE_HTTPS', 0);

// db options | 数据库连接
define('DB_HOST', '127.0.0.1');
define('DB_PORT', 3306);
define('DB_NAME', 'url');
define('DB_USER', 'url');
define('DB_PASS', 'url');
define('DB_TABLE', 'url');

// redis options (Future) | Redis设置 (尚未添加，下同)
define('RD_HOST', '127.0.0.1');
define('RD_PORT', 6379);

// Turn on the Redis Cache (Future) | Redis缓存功能
define('RD_CACHE', false);

// Turn on the Rate Limit (Future) | Redis限制访问速率
define('RD_LIMIT', false);

// Show All Error(Debug) | Debug模式
define('DEBUG_MODE',false);

// PHP Max Run Time | PHP超时
define('MAX_TIME_LIMIT',5);

// Short Ukey Length | 短链接长度
define('MIN_UKEY_LENGTH', 6);
define('MAX_UKEY_LENGTH', 6);
