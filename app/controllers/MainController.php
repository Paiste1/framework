<?php

namespace app\controllers;

use \RedBeanPHP\R as R; // тут

class MainController extends AppController
{
    public function indexAction() {
        $posts = R::findAll('test');
        $post = R::findOne('test', 'WHERE id = ?', [2]);
        $this->setMeta( 'Главная страница', 'описание...', 'Ключевые фразы...');
        $name = 'John';
        $age = 30;
        $names = ['Alex', 'Johny', 'Anton'];
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}