<?php
/**
 *
 */
namespace application\components\helpers;

use Yii;

/**
 * Class ModuleHelper
 * @package application\components\helpers
 */
class ModuleHelper
{

    /**
     * @param $directory
     * @param string $name config file name
     * @return array
     */
    public static function scanConfigFile($directory, $name = 'config.php')
    {
        $directory = Yii::getAlias($directory);
        $config = [];
        foreach (scandir($directory) as $path) {
            if ($path === '.' || $path === '..') {
                continue;
            }
            $fullPath = $directory . DIRECTORY_SEPARATOR . $path;
            if ($name !== null && is_dir($fullPath) && is_file(($file = $fullPath . DIRECTORY_SEPARATOR . $name))) {
                $config[$path] = require $file;
            }
        }
        return $config;
    }

}