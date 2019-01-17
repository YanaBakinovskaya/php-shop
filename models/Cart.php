<?php
/**
 * Created by PhpStorm.
 * User: Yana_nout
 * Date: 16.01.2019
 * Time: 21:41
 */

namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
  public function addToCart($good) {

    if (isset($_SESSION['cart'][$good->id])) {
      $_SESSION['cart'][$good->id]['goodQuantity'] +=1;
    } else {
      $_SESSION['cart'][$good->id] = [
        'goodQuantity' => 1,
        'name' => $good['name'],
        'price' => $good['price'],
        'img' => $good['img'],
      ];
    }

    $_SESSION['cart.totalQuantity'] = isset($_SESSION['cart.totalQuantity']) ? $_SESSION['cart.totalQuantity'] + 1 : 1;
    $_SESSION['cart.totalSum'] = isset($_SESSION['cart.totalSum']) ? $_SESSION['cart.totalSum'] + $good->price : $good->price;
  }
}