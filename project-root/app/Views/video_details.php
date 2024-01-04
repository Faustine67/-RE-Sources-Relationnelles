<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>YouTube Videos</title>
</head>
<body>
    <h1>YouTube Videos</h1> 
    <ul>
        <?php foreach ($videos as $video) { ?>
            <li>
                <?php echo $video->snippet->title; ?></br>
                <img src="<?= $video->snippet->thumbnails->high->url; ?>" width="15%"/></br>
                <p><?= nl2br($video['snippet']['description']); ?></p>
                <p>
                    <a href="https://www.youtube.com/watch?v=<?= $video['id']['videoId']; ?>">
                        Voir cette vidéo
                    </a>
                </p>    
            </li>  
        <?php } ?>
    </ul>
</body>
</html>
