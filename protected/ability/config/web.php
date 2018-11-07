<?php

return [
    'id' => 'basic',
    'bootstrap' => [
        'log',
        function($app){
            /** @var $app \ability\components\Application */
            Yii::setAlias('@testerModulesPath','@ability/modules');
            $scanned = \ability\helpers\ModuleHelper::scanConfigFile('@testerModulesPath');
            foreach ($scanned as $basePath => $config){
                $moduleManger = new \ability\components\ModuleManager();
                $moduleManger->register($basePath,$config);
            }
        }
    ],
    'layoutPath' => '@ability/layouts',
    'components' => [
        'request' => [
            'class' => 'yii\web\Request',
        ],
        'response' => [
            'class' => 'yii\web\Response',
        ],
        'user' => [
            'identityClass' => 'ability\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site\error',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'class' => 'yii\base\Theme',
                'basePath' => '@ability',
                'baseUrl' => '@ability',
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ]
];

