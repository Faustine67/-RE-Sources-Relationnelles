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
}
