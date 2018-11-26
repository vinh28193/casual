<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace pubhub\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@pubhub/static';

    public $css = [
        'css/site.css'
    ];
    public $js = [
        'js/pubhub.core.js',
        'js/pubhub.util.js',
        'js/pubhub.log.js',
        'js/pubhub.simple.js',
        'js/test.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
