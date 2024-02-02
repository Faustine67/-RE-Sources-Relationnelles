{block name='content-title'}

<h1>{$title}</h1>

{/block}

{block name=content}

<section class="content-container">

<form action="results_youtube" method="post">
    <input type="text" name="search_query" placeholder="Rechercher">
    Trier par :
    <select name="sortby" placeholder="Trier par">
            <option value="relevance" name="pertinence"> Pertinence </option>
            <option value="date" name="date de mise en ligne"> Date de mise en ligne </option>
            <option value="viewCount" name="nombre de vues"> Nombre de vues </option>
            <option value="rating" name="avis"> Avis </option>
    </select>
    Langue :
    <select name="langue" placeholder="Langue">
            <option value="" name="toutes"> Toutes </option>
            <option value="fr" name="français"> Français </option>
            <option value="en" name="anglais"> Anglais </option>
            <option value="de" name="allemande"> Allemand </option>
    </select>
    <input type="submit" name= "valider " value="Valider" />
</form>

</section>

{/block}