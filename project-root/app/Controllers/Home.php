<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $title = 'Test de smarty';

        return $this->smartyDisplay(
            view: 'welcome_message',
            params: compact('title')
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
