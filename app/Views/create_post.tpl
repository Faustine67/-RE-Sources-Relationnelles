{block name='content-title'}

<h1>Création d'un post</h1>

{/block}

{block name=content}

<!-- Afficher les détails de la vidéo -->
<h2>{$videoDetails['title']}</h2>

<!-- Formulaire de création de post -->
<form action="save" method="post">
    <iframe width="320" height="180" src="https://www.youtube.com/embed/{$videoDetails['youtube_id']}" frameborder="0" allowfullscreen></iframe>
    <br>
    <!-- Champ pour le texte du post -->
    <label for="post_text">Texte du post :</label>
    <textarea name="text" id="post_text" rows="4" cols="50" required></textarea>

    <button type="submit">Enregistrer le post</button>
</form>

{/block}


