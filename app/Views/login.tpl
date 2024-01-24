{* {block name='login'}
    <div class="login">
    {$title} 
    </div>
{/block}

{block name=content}

    <div class=content>

    <?php if (session()->get('success')): ?>
        <p><?= session()->get('success') ?></p>
    <?php endif; ?> *}
{* 
    <form method="post" accept-charset="utf-8" action="/login">
        <div>
            <label for="email">Email address</label>
            <input type="text" name="email" id="email" placeholder="Email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="">
        </div>

        <?php if (isset($validation)): ?>
            <p><?= $validation->listErrors() ?></p>
        <?php endif; ?>

        <div>
            <button type="submit">Login</button>
            <a href="/register">Don't have an account yet?</a>
        </div>
    </form>

{/endblock} *}

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

        <form method="post" accept-charset="utf-8" action="/login">
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
                <a href="/register">Don't have an account yet?</a>
            </div>
        </form>
    </div>
{/block}

