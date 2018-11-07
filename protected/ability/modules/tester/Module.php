<?php

namespace ability\modules\tester;

use application\components\helpers\UtilityHelper;
use Yii;
use application\components\ModuleManager;
use yii\base\BootstrapInterface;

/**
 * tester module definition class
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'ability\modules\tester\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->setModule('virtual',['class' => 'ability\modules\tester\modules\virtual\Module']);
        // custom initialization code goes here
    }

    public function bootstrap($app)
    {

    }
}
