<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Category
 *
 * @author Admin
 */
class Category extends ActiveRecord {
    
    
    public static function tableName() {
        return 'category';
    }
    
    public function getProducts(){
        
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
    
}
