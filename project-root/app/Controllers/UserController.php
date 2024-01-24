<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        echo view ('templates/header.tpl', $data);
        echo view ('login.tpl');
        echo view ('templates/footer.tpl', $data);

    }

    public function register()
    {
        $data = [];
        helper(['form']);

        echo view ('templates/header.tpl', $data);
        echo view ('register.tpl');
        echo view ('templates/footer.tpl', $data);

    }
}
