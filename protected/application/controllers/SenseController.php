<?php

namespace application\controllers;

use Yii;
use yii\web\Controller;

class SenseController extends Controller
{

    public function actionTestApplication($message){
        return $message;
    }
}