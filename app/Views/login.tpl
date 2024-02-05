{block name='login'}
    <div class="login">
        {$title}
    </div>
{/block}

{block name='content'}
    <div class="content">
        {if isset($success)}
            <p>{$success}</p>
        {/if}

        <form method="post" action="/login">
            <div>
                <label for="email">Email address</label>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="">
            </div>

            {if isset($validation)}
                <p>{$validation->listErrors()}</p>
            {/if}

            <div>
                <button type="submit">Login</button>
                <a href="register">Vous n'avez pas encore de compte?</a>
            </div>
        </form>
    </div>
{/block}

