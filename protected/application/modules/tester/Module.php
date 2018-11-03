<?php

namespace application\modules\tester;

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
    public $controllerNamespace = 'application\modules\tester\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->setModule('virtual',['class' => 'application\modules\tester\modules\virtual\Module']);
        // custom initialization code goes here
    }

    public function bootstrap($app)
    {

    }
}
