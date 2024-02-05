        <h2>Changer le mot de passe</h2>
        <div>
            <?php echo form_open($action); ?>
                <fieldset>
                    <p>
                        <label for="new_password">Nouveau mot de passe</label>
                        <?php
                            $data = array(
                                'name'        => 'new_password',
                                'id'          => 'new_password',
                                'maxlength'   => '20',
                                'size'        => '20',
                                'class'       => 'text-input small-input',
                                'required'    => 'required' // Ajout de l'attribut required
                            );

                            echo form_password($data);
                        ?>
                        <br /><small>Entrez le nouveau mot de passe</small>
                    </p>

                    <p>
                        <label for="password_confirmation">Confirmer votre mot de passe</label>
                        <?php
                            $data = array(
                                'name'        => 'password_confirmation',
                                'id'          => 'password_confirmation',
                                'maxlength'   => '20',
                                'size'        => '20',
                                'class'       => 'text-input small-input',
                                'required'    => 'required' // Ajout de l'attribut required
                            );

                            echo form_password($data);
                        ?>
                        {* <br /><small>Confirmation de votre .</small> *}
                    </p>

                    <p>
                        <input class="button" type="submit" id="validate_mdp" name="validate_mdp" />
                    </p>
                </fieldset>
                <div class="clear"></div><!-- End .clear -->
            <?php echo form_close(); ?>
        </div> 
    </div>
</div>
