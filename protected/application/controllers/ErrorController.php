<?php
/**
 *
 */
namespace application\controllers;

/**
 * Class ErrorController
 * @package application\controllers
 */
class ErrorController extends \yii\web\Controller
{

    public function actionIndex(){
        echo 1; die;
    }
}