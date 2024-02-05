{block name='content-title'}

    <h1 class="title"> Trouvez la ressource qui vous corresponds </h1>

{/block}

{block name=content}
 
 <h2 class="subtitle">Tous les posts</h2> 
    <ul>
        {foreach $posts as $post}
            <li>
                <p>{$post['text']}</p>
            </li>  
         {foreachelse}
            <p>Aucun post actuellement. </p>
        {/foreach}
    </ul>

  <h2 class="subtitle"> Derniers commentaires </h2>
  <ul>
    {foreach $comments as $comment}
      <li> 
          <p>{$comment}</p>
      </li>
    {foreachelse}
        <p>Aucun commentaire actuellement. </p>  
    {/foreach}
</ul>
{/block}
