{block name='register'}
  <div class="register">
      {$title}
  </div>
{/block}

{block name='content'}
  <div class="content">

    <form action="register" method="post" >

    <div>
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}">
</div>

<div>
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}">
</div>

<div>
    <label for="email">Email address</label>
    <input type="text"  name="email" id="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}">
</div>

<div>
    <label for="password">Password</label>
    <input type="password"  name="password" id="password" value="">
</div>

<div>
    <label for="password_confirm">Confirm Password</label>
    <input type="password"  name="password_confirm" id="password_confirm" value="">
</div>

        {if isset($validation)}

        
            <p>{$validation->listErrors()}</p>
        {/if}

            <button type="submit">S'inscrire</button>

            
            <a href="login">Vous avez déjà un compte?</a>
    </form>
{/block}
