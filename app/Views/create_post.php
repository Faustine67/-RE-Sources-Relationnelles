<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Création d'un post</title>
    </head>
    <body>
        <h1>Création d'un post</h1>
        <!-- Afficher les détails de la vidéo -->
        <h2><?= $videoDetails['title']; ?></h2>
        
        <!-- Formulaire de création de post -->
        <form action="<?= site_url('post/save'); ?>" method="post">
            <!-- Champs cachés avec les détails de la vidéo -->
            <input type="hidden" name="youtube_id" value="<?= $videoDetails['youtube_id']; ?>">
            <input type="hidden" name="title" value="<?= $videoDetails['title']; ?>">
            <input type="hidden" name="thumbnails_url" value="<?= $videoDetails['thumbnails_url']; ?>">

            <iframe width="320" height="180" src="https://www.youtube.com/embed/<?= $videoDetails['youtube_id']; ?>" frameborder="0" allowfullscreen></iframe>
            <br>
            <!-- Champ pour le texte du post -->
            <label for="post_text">Texte du post :</label>
            <textarea name="text" id="post_text" rows="4" cols="50" required></textarea>

            <button type="submit">Enregistrer le post</button>
        </form>
    </body>
</html>
