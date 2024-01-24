<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $posts = ['1' , '2', '3'];
        $title = 'Bienvenue sur ressources relationnelles !';

        return $this->smartyDisplay(
            view: 'home',
            params: compact('posts', 'title')
        );
    }

    public function smartyTest(){

        $elements = ['Pomme', 'Poire', 'Kiwi', 'Tomates', 'Choux'];
        $title = 'Test de Smarty';
        $name = 'Smarties';
        $logged_in = true;

        return $this->smartyDisplay(
            view: 'smarty_test',
            params: compact('elements', 'title', 'name', 'logged_in') 
        );
    }
}
