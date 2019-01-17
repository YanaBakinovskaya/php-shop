<?php
/**
 * Created by PhpStorm.
 * User: Yana_nout
 * Date: 16.01.2019
 * Time: 16:49
 */

namespace app\controllers;
use app\models\Good;
use yii\web\Controller;

class GoodController extends Controller
{
  public function actionIndex($name) {
    $good = new Good();
    $good = $good->getOneGood($name);
    return $this->render('index', compact('good'));
  }
}