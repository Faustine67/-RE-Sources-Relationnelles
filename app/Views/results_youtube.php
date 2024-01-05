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
                    </p>    
                </li> 
            <?php endforeach; ?>
        </ul>
    </body>
</html>