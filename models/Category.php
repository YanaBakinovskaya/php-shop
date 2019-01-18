<?php
/**
 * Created by PhpStorm.
 * User: Yana_nout
 * Date: 16.01.2019
 * Time: 0:18
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
  //private $category = [
    //'sets' => 'Сет',
    //'sushi' => 'Суши',
    //'rolls' => 'Ролл',
  //];
 // public function getCategoryNameByCode(string $code){
   // return $this->category[$code];
  //}
  public static function tableName()
  {
    return 'category';
  }

  public function getCategories() {
    return Category::find()->asArray()->all();
  }
}