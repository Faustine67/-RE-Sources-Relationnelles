<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Résultats de recherche YouTube</title>
    </head>
    <body>
        <h1>Résultats de recherche YouTube</h1>
        <ul>
            <?php foreach ($videos as $video): ?>
                <li>
                    <?php echo $video->snippet->title; ?></br>
                    <iframe width="320" height="180" src="https://www.youtube.com/embed/<?= $video['id']['videoId']; ?>" frameborder="0" allowfullscreen></iframe>
                    <img src="<?= $video->snippet->thumbnails->high->url; ?>" width="15%"/></br>
                    <p><?= nl2br($video['snippet']['description']); ?></p>
                    <p>                   
                        <a href="https://www.youtube.com/watch?v=<?= $video['id']['videoId']; ?>">
                        Voir cette vidéo
                        </a>
                        <!-- Formulaire de récupération des informations de la vidéo
                        En méthode 'post', cliquer sur le bouton submit enverra les informations
                        à l'url post/creat qui correpond à PostController::create dans ma route-->
                        <form action="<?= site_url('post/create'); ?>" method="post" name='videoform'>
                            <input type="hidden" name="youtube_id" value="<?= $video['id']['videoId']; ?>">
                            <input type="hidden" name="title" value="<?= $video->snippet->title; ?>">
                            <input type="hidden" name="publicationDate" value="<?= $video->snippet->publishedAt; ?>">
                            <input type="hidden" name="thumbnails_url" value="<?= $video->snippet->thumbnails->high->url; ?>">
                            <button type="submit">Poster la vidéo</button>
                        </form>
                    </p>    
                </li> 
            <?php endforeach; ?>
        </ul>
    </body>
</html>