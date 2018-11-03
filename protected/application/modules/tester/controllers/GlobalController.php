<?php


namespace application\modules\tester\controllers;


use yii\web\Controller;

class GlobalController extends Controller
{

    public function actionIndex(){
       return $this->render('index');
    }
}