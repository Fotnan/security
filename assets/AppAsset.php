<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        '//fonts.googleapis.com/css?family=Roboto:300,400,700,800,900&amp;subset=cyrillic',
        'css/fonts/fontawesome-all.min.css',
        'css/fonts/ionicons.min.css',
        'css/Navigation-Clean.css',
        'css/styles.css',
    ];
    public $js = [
        //'js/jquery.min.js',
        '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        //'js/bootstrap.min.js',
        'js/bs-init.js',
        'js/accordeon.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
