<?php

namespace pubhub\modules\tester\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\web\Request;

class JsonController extends Controller
{

    public function init()
    {
        parent::init();
        Yii::configure(Yii::$app, [
            'components' => [
                'request' => [
                    'class' => Request::className(),
                    'enableCookieValidation' => false,
                    'enableCsrfCookie' => false
                ],
                'response' => [
                    'class' => Response::className(),
                    'format' => Response::FORMAT_JSON,
                    'formatters' => [
                        Response::FORMAT_JSON => [
                            'class' => 'yii\web\JsonResponseFormatter',
                            'prettyPrint' => true, // use "pretty" output in debug mode
                        ],
                    ],
                    'on beforeSend' => function ($event) {
                        $response = $event->sender;
                        if ($response->data !== null && Yii::$app->request->get('suppress_response_code')) {
                            $response->data = [
                                'success' => $response->isSuccessful,
                                'data' => $response->data,
                            ];
                            $response->statusCode = 200;
                        }
                    },
                ]
            ]
        ]);
    }

    public function actionSelfTest()
    {
        return "Hello World, i'm json controller";
    }
}