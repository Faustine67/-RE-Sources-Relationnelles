<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\VideoController;
use App\Models\VideoIdPostIdModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\UserModel;
use App\Models\VideoModel;



class PostController extends BaseController
{   

    // Vue de tous les posts
    public function index()
    {
        $postModel = new PostModel();
        $commentModel = new CommentModel();

        // Récupérer les données depuis le modèle
        $posts = $postModel->findAll();
        $comments = $commentModel->findAll();
        
        // Charger la vue et passer les données des posts
        return $this->smartyDisplay(
            view: 'liste_post',
            params: compact('posts', 'comments')
        );
    }

    public function create()
    {
        // Ouverture d'une session
        // $session = \Config\Services::session();
        // Récupérer les informations de la vidéo depuis le formulaire de la vue de recherche grâce à la méthode post
        $youtube_id = $this->request->getPost('youtube_id');
        $title = $this->request->getPost('title');
        $publicationDate = $this->request->getPost('publicationDate');
        $thumbnails_url = $this->request->getPost('thumbnails_url');

        // Création d'un tableau avec ces données
        $videoDetails = [
            'youtube_id' => $youtube_id,
            'title' => $title,
            'publicationDate' => date('Y-m-d', strtotime($publicationDate)),
            'thumbnails_url' => $thumbnails_url,
        ];

        // Insertion des données dans la session
        $this->session->set(['videoDetails' => $videoDetails]);
        // Charger la vue du formulaire de création de post avec les détails de la vidéo
        return $this->smartyDisplay(
            view: 'create_post',
            params: compact('videoDetails')
        );
    }

    // Toute la fonction est à revoir (ne marche pas)
    public function save()
    {
        $postDetails = [
            'text' => $this->request->getPost('text'),
            'id_user' => 1,
        ];
        $this->session->set(['postDetails' => $postDetails]);
        $videoController = new VideoController();
        $videoController->save();
        $postModel = new PostModel();
        $postDetails['id_post'] = $postModel->insertPost($postDetails);
        $videoIdPostIdModel = new VideoIdPostIdModel();
        $videoIdPostIdModel->insert(['id_post' => $postDetails['id_post'], 'youtube_id' => $_SESSION['videoDetails']['youtube_id']]);

        // Redirigez l'utilisateur vers la page des résultats ou une autre page selon vos besoins
        return redirect()->to('');
    }



}
