<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
 
namespace app\assets;
 
use yii\web\AssetBundle;
 
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HighchartAsset extends AssetBundle
{
 
   // public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/highchart/';
 
    public $css = [
 
    ];
    public $js = [
            'highcharts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}