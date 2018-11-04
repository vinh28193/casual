<?php
/**
 * Created by PhpStorm.
 * User: vinhs
 * Date: 2018-11-03
 * Time: 23:26
 */

namespace application\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

class ModuleManager extends Component
{

    /**
     * @var array
     */
    private $_modules = [];

    /**
     * @param $basePath
     * @param array $config
     * @throws InvalidConfigException
     */
    public function register($basePath, $config = [])
    {
        if (!isset($config['class']) || !isset($config['id'])) {
            throw new InvalidConfigException('Module configuration requires an id and class attribute!');
        }

        $this->_modules[$config['id']] = $config['class'];
        Yii::setAlias('@' . $config['id'], $basePath);
        $moduleConfig = ['class' => $config['class']];
        // Add config file values to module
        if (isset(Yii::$app->modules[$config['id']]) && is_array(Yii::$app->modules[$config['id']])) {
            $moduleConfig = ArrayHelper::merge($moduleConfig, Yii::$app->modules[$config['id']]);
        }
        // Register Yii Module
        Yii::$app->setModule($config['id'], $moduleConfig);
    }

    /**
     * @param $id
     * @return null|object|\yii\base\Module
     * @throws \yii\base\InvalidConfigException
     */
    public function getModule($id)
    {
        // Enabled Module
        if (Yii::$app->hasModule($id)) {
            return Yii::$app->getModule($id, true);
        }
        if (isset($this->modules[$id])) {
            $class = $this->_modules[$id];
            return Yii::createObject($class, [$id, Yii::$app]);
        }
        return null;
    }
}