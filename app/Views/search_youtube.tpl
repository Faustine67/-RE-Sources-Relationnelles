{block name='content-title'}

<h1 class="title">{$title}</h1>

{/block}

{block name=content}

<section class="content-container">

<div id="youtube-search">
<form action="results_youtube" method="post" id="search-form">
    <div>
        <input type="text" name="search_query" placeholder="Rechercher une vidéo...">
    </div>
    <div class="search-filters">
        <div>
            Trier par :
            <select name="sortby" placeholder="Trier par">
                    <option value="relevance" name="pertinence"> Pertinence </option>
                    <option value="date" name="date de mise en ligne"> Date de mise en ligne </option>
                    <option value="viewCount" name="nombre de vues"> Nombre de vues </option>
                    <option value="rating" name="avis"> Avis </option>
            </select>
        </div>
        <div>
            Langue :
            <select name="langue" placeholder="Langue">
                    <option value="" name="toutes"> Toutes </option>
                    <option value="fr" name="français"> Français </option>
                    <option value="en" name="anglais"> Anglais </option>
                    <option value="de" name="allemande"> Allemand </option>
            </select>
        </div>
        <input type="submit" name= "valider " value="Rechercher" />
    </div>
</form>
</div>
</section>

{/block}