<?php


namespace ability\modules\tester\controllers;

use Yii;
use yii\web\Controller;
use ability\components\helpers\UtilityHelper;

class GlobalController extends Controller
{

    public function actionIndex(){
        echo UtilityHelper::getNamespace($this);
        die();
        return $this->render('index');
    }

}