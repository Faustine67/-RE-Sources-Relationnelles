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
}
