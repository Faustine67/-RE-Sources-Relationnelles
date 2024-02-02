<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Google\Client;
use Google\Service\YouTube;
use App\Models\VideoModel;

class VideoController extends BaseController {

    public function index() {
        $title = "Recherche Youtube"; // Titre de la page

        return $this->smartyDisplay(
            view: 'search_youtube',
            params: compact('title')
        );
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
        $client->setHttpClient(new \GuzzleHttp\Client);
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
        return $this->smartyDisplay(
            view: 'results_youtube',
            params: compact('videos')
        );
    }

    // Save en base de données depuis la session
    public function save() {
        $data = [
            'youtube_id' => $_SESSION['videoDetails']['youtube_id'],
            'title' => $_SESSION['videoDetails']['title'],
            'thumbnails_url' => $_SESSION['videoDetails']['thumbnails_url'],
            'publicationDate' => $_SESSION['videoDetails']['publicationDate'],
        ];

        // Enregistrez ces données dans votre modèle VideoModel
        $videoModel = new VideoModel();
        $videoModel->save($data);

        // Redirigez l'utilisateur vers la page des résultats ou une autre page selon vos besoins
        // return redirect()->to('youtube');
    }
}