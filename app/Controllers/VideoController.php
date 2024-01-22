<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Google\Client;
use Google\Service\YouTube;
use App\Models\VideoModel;

class VideoController extends BaseController {
    public function index() {
        $data['title'] = "Recherche Youtube"; // Titre de la page
        return view('search_youtube', $data);
    }

    public function search() {
        // Charger la bibliothèque Google API PHP Client
        require_once ('../vendor/autoload.php');

        // Clé API YouTube Data v3
        $apiKey = 'AIzaSyAA7wE2oZvMQsWgPpX_QgouAffqSBTDzY8';

        // Initialiser le client Google API PHP
        $client = new Client();
        $client->setApplicationName('nom_projet');
        $client->setDeveloperKey($apiKey);

        // Créer un objet Google_Service_YouTube
        $youtube = new YouTube($client);

        // Désactiver la vérification du certificat
        $client->setHttpClient(new \GuzzleHttp\Client(['verify' => false]));
        // Récupération des valeurs du formulaire
        $search_query = $this->request->getPost('search_query');
        $sortby = $this->request->getPost('sortby');
        $langue = $this->request->getPost('langue');
        // Récupérer les vidéos d'une chaîne spécifique
        $videos = $youtube->search->listSearch('id,snippet', array(
            'q' => $search_query,
            'order' => $sortby,
            'maxResults' => 10,
            'relevanceLanguage' => $langue,
            'type' => 'video'
        ));
        // Retourner la vue
        return view('results_youtube', ['videos' => $videos]);
    }

    // Dans votre contrôleur, par exemple VideoController.php
    public function save() {
        $data = [
            'youtube_id' => $this->request->getPost('youtube_id'),
            'title' => $this->request->getPost('title'),
            'thumbnails_url' => $this->request->getPost('thumbnails_url'),
            'publicationDate' => $this->request->getPost('publicationDate')
        ];
        
        // Formater la date au format 'YYYY-MM-DD'
        $data['publicationDate'] = date('Y-m-d', strtotime($data['publicationDate']));

        // Enregistrez ces données dans votre modèle VideoModel
        $videoModel = new VideoModel();
        $videoModel->insert($data);

        // Redirigez l'utilisateur vers la page des résultats ou une autre page selon vos besoins
        return redirect()->to('youtube');
    }
}