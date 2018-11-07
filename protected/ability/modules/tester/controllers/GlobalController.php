<?php


namespace ability\modules\tester\controllers;

use Yii;
use yii\web\Controller;

class GlobalController extends Controller
{

    public function actionIndex(){
        var_dump(Yii::$aliases);die();
        return $this->render('index');
    }

}