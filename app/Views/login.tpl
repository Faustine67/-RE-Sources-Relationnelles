<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
    </head>      
    
    <body>        
        <h1>Login</h1>
        <hr>
{* 
        <?php if (session()->get('success')): ?>
            <?= session()->get('success') ?>
        <?php endif; ?> *}

        <form method="post" accept-charset="utf-8" action="/">
          <div class="">
            <label for="email">Email address</label>
            <input type="text"  name="email" id="email" placeholder="Email">
          </div>

          {* <div class="">
            <label for="password">Password</label>
            <input type="password"  name="password" id="password" value="">
          </div>

          <?php if (isset($validation)): ?>
            <?= $validation->listErrors() ?>
          <?php endif; ?>

            <div class="">
              <button type="submit" class="btn btn-primary">Login</button>
              <a href="/register">Don't have an account yet?</a>
            </div> *}

        </form>
    </body>
</html>