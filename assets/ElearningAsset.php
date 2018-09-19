<?php
// Inject the new style and javascript into my module 

namespace humhub\modules\elearning\assets;

use yii\web\AssetBundle;

class ElearningAsset extends AssetBundle
{
    
    public $publishOptions = [
       'forceCopy' => true
    ];
    
    
    public $sourcePath = '@elearning/resources';
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = ['css/humhub.elearning.css'];
    public $js = ['js/humhub.elearning.js', 'js/humhub.elearning.video.js'];
    
    

}
