<?php

namespace app\modules\admin\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Description of AppAdminControllers
 *
 * @author Admin
 */
class AppAdminControllers extends Controller {
   
    
    
    public function behaviors(){
        
        return [
            'access' => [
            
            'class' => AccessControl::className(),
            'rules' => [
                
                [
                    'allow' => true,
                'roles' => ['@']
                    
                ]
            ]
        ]
            
        ];
        
        
        
    }
}
