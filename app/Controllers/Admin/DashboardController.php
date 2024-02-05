<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entity\User;
use App\Entity\Commmment;
use App\Entity\Post;
use App\Entity\Video;
use App\Entity\VideoIdPostid;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function index()
    {
        return view ('/dashboard');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard:: new()
        ->setTitle('Administration')
        ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard');
        yield MenuItem::linkToCrud('Post', Post::class);
        yield MenuItem::linkToCrud('User', User::class);
        yield MenuItem::linkToCrud('Commment',Commment::class);
        yield MenuItem::linkToCrud('Video',Video::class);
        yield MenuItem::linkToCrud('VideoIdPostId',VideoIdPostId::class);
    }
}