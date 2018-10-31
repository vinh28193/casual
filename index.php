<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/protected/vendor/autoload.php');
require(__DIR__ . '/protected/vendor/yiisoft/yii2/Yii.php');

require(__DIR__ . '/protected/application/config/bootstrap.php');
require(__DIR__ . '/protected/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/protected/application/config/main.php'),
    require(__DIR__ . '/protected/application/config/web.php'),
    require(__DIR__ . '/protected/config/main.php'),
    require(__DIR__ . '/protected/config/web.php')
);

(new yii\web\Application($config))->run();
