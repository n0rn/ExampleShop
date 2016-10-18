<?php


namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ltAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $js = [
	'js/js/html5shiv.js',
	'js/js/respond.min.js',
        
    ];
    
    public $jsOptions = [
        'condition' => 'lte IE9',
        'position'=> \yii\web\View::POS_HEAD
        
    ];
    
}
