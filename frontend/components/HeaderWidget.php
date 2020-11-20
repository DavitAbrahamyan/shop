<?php


namespace frontend\components;
use yii\base\Widget;

class HeaderWidget extends Widget
{
    public function run(){

        return $this->render('header');

    }
}