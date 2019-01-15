<?php
/**
 * Created by PhpStorm.
 * User: Yana_nout
 * Date: 15.01.2019
 * Time: 23:44
 */

namespace app\controllers;
use app\models\Good;

use yii\web\Controller;

class CategoryController extends Controller
{
  public function actionIndex () {
    $goods = new Good();
    $goods = $goods->getAllGoods();
    return $this->render('index', compact('goods'));
  }

  public function actionView($id) {
    $catGoods = new Good();
    $catGoods = $catGoods->getGoodsCategories($id);
    return $this->render('view', compact('catGoods'));
}
}