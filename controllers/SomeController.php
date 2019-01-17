<?php
/**
 * Created by PhpStorm.
 * User: Yana_nout
 * Date: 17.01.2019
 * Time: 0:22
 */

namespace app\controllers;


use yii\web\Controller;

class SomeController extends Controller
{
  public $title = '';

  public $layout = 'main';

  public function actionSomeAction() {
    $this->title = 'Ресторан Суши';
    $this->layout = 'someLayout';
     $this->render('someView');
  }
}