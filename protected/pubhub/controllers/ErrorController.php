<?php
/**
 *
 */
namespace pubhub\controllers;

/**
 * Class ErrorController
 * @package pubhub\controllers
 */
class ErrorController extends \yii\web\Controller
{

    public function actionIndex(){
        echo 1; die;
    }
}