 <h1>Tous les posts</h1> 
    <ul>
        {foreach $posts as $post}
            <li>
                <p>{$post}</p>
            </li>  
        {/foreach}
    </ul>

  <h2> Derniers commentaires </h2>
  <ul>
  {foreach $comments as $comment}
      <li> 
          <p>{$comment}</p>
      </li>  
  {/foreach}
</ul>
