<?php

use humhub\modules\elearning\Events;
use humhub\widgets\TopMenu;

return [
    'id' => 'elearning',
    'class' => 'humhub\modules\elearning\Module',
    'namespace' => 'humhub\modules\elearning',
    'events' => [
        ['class' => TopMenu::class, 'event' => TopMenu::EVENT_INIT, 'callback' => [Events::class, 'onTopMenuInit']],
    ],
    
    
    
        
        
];
