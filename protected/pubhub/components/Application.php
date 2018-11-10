<?php

namespace pubhub\components;

class Application extends \yii\web\Application
{

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'pubhub\\controllers';

    /**
     * @inheritdoc
     */
    public $sourceLanguage = 'en-US';

    /**
     * @inheritdoc
     */
    protected function registerErrorHandler(&$config)
    {
        if (YII_ENABLE_ERROR_HANDLER) {
            if (!isset($config['components']['errorHandler']['class'])) {
                echo "Error: no errorHandler component is configured.\n";
                exit(1);
            }
            $this->set('errorHandler', $config['components']['errorHandler']);
            unset($config['components']['errorHandler']);
            $this->getErrorHandler()->register();
        }
    }
}