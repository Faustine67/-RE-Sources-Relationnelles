<h3>Créer un compte</h3>
<div class="register">

 <form class="/" action="/register" method='post'>
     <div class="input-container firstname">
     <label for="firstname">Prénom</label>
     <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
     </div>    

     <div class="input-container lastname">
         <label for="lastname">Nom</label>
         <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
    </div>

     <div class="input-container email">
         <label for="firstname">Email </label>
         <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
     </div>

    <div class="input-container password">
         <label for="password">Mot de de passe</label>
         <input type="text" class="form-control" name="password" id="password" value="">
    </div>

    <div class="signup-btn">
     <button type="submit"> Créer un compte</button> 
    </div>

    <div class="">
    <a href="/register">Vous avez déjà un compte?</a>
    </div>
 </form> 
</div>
</div>
</div>
</div> 