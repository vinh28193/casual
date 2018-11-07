<?php
/**
 *
 */
namespace ability\components\helpers;

use Yii;

/**
 * Class ModuleHelper
 * @package ability\components\helpers
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
            $path = $directory . DIRECTORY_SEPARATOR . $path;
            if ($name !== null && is_dir($path) && is_file(($file = $path . DIRECTORY_SEPARATOR . $name))) {
                $config[$path] = require $file;
            }
        }
        return $config;
    }

}