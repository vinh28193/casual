<?php

return [
    'id' => 'basic',
    'bootstrap' => ['log'],
    'layoutPath' => '@application/layouts',
    'components' => [
        'request' => [
            'class' => 'yii\web\Request',
        ],
        'response' => [
            'class' => 'yii\web\Response',
        ],
        'user' => [
            'identityClass' => 'application\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site\error',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'class' => 'yii\base\Theme',
                'basePath' => '@application',
                'baseUrl' => '@application',
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

