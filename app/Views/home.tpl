{* 
    no need {extends file='layout/default.tpl'} 
    because smartyDisplay method alread attach it by default
    3rd param of smartyDisplay method, allow to choose another template or you can just set as ''
 *}
    
 {block name='content-title'}
    <div class="content-title">
    {$title} 
    </div>
{/block}
    
{block name=content}
<section class="content-container">
<div class="intro-container">
    <div>
    <img src="../public/logo.jpeg">
    </div>
    <div>
    <p> Ressource relationnelles est une plateforme de mise en relation  humaine et sociale et permet a tous ses utilisateurs de consulter des ressrouces sur divers sujets. </p>
    </div>
</div>
<h2 class="title"> Les derniers posts </h2>
<div class="container">
    {foreach $posts as $post}
    <div class="card">
        <div class="card-header">
            <img src="https://images6.alphacoders.com/312/thumb-1920-312773.jpg" alt="city" />
        </div>
        <div class="card-body">
            <span class="tag tag-pink">Design</span>
            <h4>
                10 Rules of Dashboard Design
            </h4>
            <p>
            </p>
            <button class="discover-button">Découvrir</button>
            <div class="user">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user" />
                <div class="user-info">
                    <h5>Carrie Brewer</h5>
                    <small>1w ago</small>
                </div>
            </div>
        </div>
        </div>
    {/foreach}
</div>
<div id="home-features">
    <div class="features-container">
        <div class="features">
            <i class="fa-solid fa-magnifying-glass"></i>
            <p class="sub-title"> Une plateforme pour <strong> communiquer </strong> </p>
            <p>La communication avec autrui est la clé de relations harmonieuses. L'écoute attentive, l'expression claire des idées et le respect mutuel sont des fondements essentiels. </p>
        </div>

        <div class="line"></div>

        <div class="features">
            <i class="fa-regular fa-calendar-check"></i>
            <p class="sub-title"> Créez du <strong> lien </strong> </p>
            <p>La communication envers les autres transcende les mots. Elle se manifeste à travers les gestes, le langage corporel et l'empathie. </p> 
        </div>

        <div class="line"></div>

        <div class="features">
            <i class="fa-solid fa-basket-shopping"></i>
            <p class="sub-title"> Parcourez des <strong> posts intéréssants </strong> </p>
            <p>Naviguer à travers les méandres de la vie révèle souvent des défis inattendus. Les épreuves, qu'elles soient personnelles ou professionnelles, forgent la résilience. </p>
        </div>
    </div>
</div>
</section>


{/block}

