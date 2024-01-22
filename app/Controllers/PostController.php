<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\UserModel;



class PostController extends BaseController
{
    public function index()
    {
    //     $post = new Post();
    //     $comment = new Comment();
    //     $user = new User();

    //      return view('liste_post', ['posts' => $post,'comments' => $comment,'user' => $user]);
    // }


        $postModel = new PostModel();
        $commentModel = new CommentModel();
        $userModel = new UserModel();

        // Récupérer les données depuis le modèle
        $posts = $postModel->findAll();
        $comments = $commentModel->findAll();
        $users = new UserModel();
        
        // Charger la vue et passer les données des posts
        return view('liste_post', ['posts' => $posts, 'comments' => $comments, 'users' => $users]);
    }


}
