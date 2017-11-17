<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/bootstrap.css',
        '/css/icomoon.css',
        '/css/animate.css',
        '/css/style.css',
        '/css/color.css',
        '/css/plugin.css',
        '/css/responsive.css',
        '/css/transition.css',
        'https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700',
        
    ];
    public $js = [
        '/js/modernizr.js',
        '/js/jquery.js',
        '/js/bootstrap.js',
        'http://maps.google.com/maps/api/js?sensor=false',
        '/js/gmap3.min.js',
        '/js/menu.js',
        '/js/slick.js',
        '/js/parallax.js',
        '/js/countTo.js',
        '/js/cubeportfolio.min.js',
        '/js/rating-star.js',
        '/js/range-slider.js',
        '/js/spinner.js',
        '/js/appear.js',
        '/js/prettyPhoto.js',
        '/js/sticky.js',
        '/js/functions.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
