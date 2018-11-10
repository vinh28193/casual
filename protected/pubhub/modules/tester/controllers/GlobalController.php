<?php


namespace pubhub\modules\tester\controllers;

use Yii;
use yii\web\Controller;
use pubhub\helpers\UtilityHelper;

class GlobalController extends Controller
{

    public function actionIndex(){
        echo UtilityHelper::getNamespace($this);
        die();
        return $this->render('index');
    }

}