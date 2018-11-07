<?php

namespace ability\components\helpers;

use yii\helpers\Html;
use yii\helpers\VarDumper;

/**
 * Class UtilityHelper
 * @package ability\components\helpers
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

}