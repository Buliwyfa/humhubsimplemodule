<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\elearning;

use Yii;
use yii\helpers\Url;



class Events
{
    public static function onTopMenuInit($event)
    {
        
        $userIsAdmin = \humhub\modules\admin\widgets\AdminMenu::canAccess();
                
        if($userIsAdmin == true) {
        $event->sender->addItem([
            'label' => Yii::t('DevtoolsModule.base', 'Elearning'),
            'id' => 'elearning',            
            'icon' => '<i class="fa fa-files-o"></i>',
            'url' => Url::toRoute('/elearning/index'),
            'sortOrder' => 100,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'elearning' && Yii::$app->controller->id == 'admin'),
        ]);
        
        }
    }
    
    
    
    
    
   
    
    
    
    
    
    
}
