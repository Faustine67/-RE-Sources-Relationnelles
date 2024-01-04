<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Google\Client;
use Google\Service\YouTube;

class APIYoutube extends BaseController {

    public function index() {
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

        // Exemple de requête : récupérer les vidéos d'une chaîne spécifique
        // $channelId = 'UC9gJxP0oZ3FwHt-l2gwpEGg';
        $videos = $youtube->search->listSearch('id,snippet', array(
            // 'channelId' => $channelId,
            'q' => 'Zelda',
            'order' => 'relevance',
            'maxResults' => 50,
            'type' => 'video'
        ));

        // Charger la vue et passer les données des vidéos
        return view('video_details', ['videos' => $videos]);
    }
}