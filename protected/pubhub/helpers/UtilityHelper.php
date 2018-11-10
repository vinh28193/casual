<?php

namespace pubhub\helpers;

use Yii;
use yii\helpers\Html;
use yii\helpers\VarDumper;

/**
 * Class UtilityHelper
 * @package pubhub\helpers
 */
class UtilityHelper
{

    public static function dump($data)
    {
        VarDumper::dump($data, 10, true);
    }

    public static function printReadable($data, $preserveTag = 'pre')
    {
        return Html::tag($preserveTag, print_r($data), []);
    }

    public static function getNamespace($class){
        if($class instanceof \yii\base\BaseObject){
            $class = $class::className();
        }elseif (is_object($class)){
            $class = get_class($class);
        }
        return substr($class, 0, strrpos($class, '\\'));
    }

    /**
     * @param $object
     * @param $parent
     * @return bool
     * @throws \yii\base\InvalidConfigException
     */
    public static function isSubclassOf($object,$parent){
        if(is_array($object)){
            $object = Yii::createObject($object);
        }elseif (is_string($object)){
            $object = new $object;
        }
        if(is_object($parent)){
            $parent = get_class($parent);
        }
        return is_subclass_of($object,$parent);
    }
}