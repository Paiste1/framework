<?php

namespace app\controllers;

class MainController extends AppController
{

        // public $template = 'test';

    public function indexAction() {
        // $this->template = 'test';
        // echo __METHOD__;
        // $this->setMeta( App::$app->getProperty('shop_name'), 'описание...', 'Ключевые фразы...');
        $this->setMeta( 'Главная страница', 'описание...', 'Ключевые фразы...');
        $name = 'John';
        $age = 30;
        $names = ['Alex', 'Johny', 'Anton'];
        $this->set(compact('name', 'age', 'names'));
    }
}