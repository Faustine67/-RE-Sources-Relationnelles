<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <form action="<?php echo site_url('results_youtube'); ?>" method="post">
            <input type="text" name="search_query" placeholder="Rechercher">
            Trier par :
            <select name="sortby" placeholder="Trier par">
                <optgroup>
                    <option value="relevance" name="pertinence"> Pertinence </option>
                    <option value="date" name="date de mise en ligne"> Date de mise en ligne </option>
                    <option value="viewCount" name="nombre de vues"> Nombre de vues </option>
                    <option value="rating" name="avis"> Avis </option>
                </optgroup>     
            </select>
            Langue :
            <select name="langue" placeholder="Langue">
                <optgroup>
                    <option value="" name="toutes"> Toutes </option>
                    <option value="fr" name="français"> Français </option>
                    <option value="en" name="anglais"> Anglais </option>
                    <option value="de" name="allemande"> Allemand </option>
                </optgroup>     
            </select>
            <input type="submit" name= "valider " value="Valider" />
        </form>
    </body>
</html>