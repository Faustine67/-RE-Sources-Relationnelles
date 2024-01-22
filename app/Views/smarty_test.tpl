{* 
Template de test smarty 
Pas besoin d'inclure layout/default.tpl car la méthode smartyDisplay l'inclus déja par défaut
*}

{block name='content-title'}
{$title} 
{/block}

{block name=content}

<h2> Liste de course </h2>
<ul>
 {foreach $elements as $element}
<li>{$element}</li>
 {foreachelse}
<li> Pas d'éléments dans la liste </li>
 {/foreach}
</ul>

{if $logged_in}
    Bienvenue, {$name}!
{else}
    Vous devez être connecté pour acceder à cette page
{/if}

{/block}


