<?php

return [
    'id' => 'basic',
    'bootstrap' => [
        'log',
        function($app){
            /** @var $app \pubhub\components\Application */
            Yii::setAlias('@testerModulesPath','@pubhub/modules');
            $scanned = \pubhub\helpers\ModuleHelper::scanConfigFile('@testerModulesPath');
            foreach ($scanned as $basePath => $config){
                $moduleManger = new \pubhub\components\ModuleManager();
                $moduleManger->register($basePath,$config);
            }
        }
    ],
    'layoutPath' => '@pubhub/layouts',
    'components' => [
        'request' => [
            'class' => 'yii\web\Request',
        ],
        'response' => [
            'class' => 'yii\web\Response',
        ],
        'user' => [
            'identityClass' => 'powered\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site\error',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'class' => 'yii\base\Theme',
                'basePath' => '@pubhub',
                'baseUrl' => '@pubhub',
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

