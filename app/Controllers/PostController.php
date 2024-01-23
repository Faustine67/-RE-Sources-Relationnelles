<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\UserModel;
use App\Models\VideoModel;



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

    public function create()
    {
        // Récupérer les informations de la vidéo depuis le formulaire de la vue de recherche grâce à la méthode post
        $videoDetails['youtube_id'] = $this->request->getPost('youtube_id');
        $videoDetails['title'] = $this->request->getPost('title');
        $videoDetails['publicationDate'] = $this->request->getPost('publicationDate');
        $videoDetails['thumbnails_url'] = $this->request->getPost('thumbnails_url');

        // Charger la vue du formulaire de création de post avec les détails de la vidéo
        return view('create_post', ['videoDetails' => $videoDetails]);
    }

    
    // Toute la fonction est à revoir (ne marche pas)
    public function save()
    {
        $data_post = [
            'id_user' => 1,
            'text' => $this->request->getPost('text'),
            // Ajoutez d'autres champs nécessaires
        ];

        $postModel = new PostModel();
        $postModel->insert($data_post);
        $data_post_id = [
            'id_post' => $postModel->find($post_id),
            'youtube_id' => $this->request->getPost('youtube_id'),
            'title' => $this->request->getPost('title'),
            'thumbnails_url' => $this->request->getPost('thumbnails_url'),
            'text' => $this->request->getPost('text'),
            // Ajoutez d'autres champs nécessaires
        ];

        // Enregistrez ces données dans votre modèle PostModel


        // Redirigez l'utilisateur vers la page des résultats ou une autre page selon vos besoins
        return redirect()->to('post');
    }



}
