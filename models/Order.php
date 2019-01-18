<?php

namespace app\models;

use Yii;


class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address', 'sum'], 'required'],
            [['email'], 'email'],
            [['name', 'email'], 'string', 'max' => 150],
            [['phone', 'status'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 250],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }
}
