<h2><?php echo $TitreDeLaPage ?></h2>
<?php echo validation_errors();
echo form_open('administrateur/ajouterUnUtilisateur') ?>
<label for="txtNom">Nom de l'utilisateur  </label>
<input type="input" name="txtNom" value="<?php echo set_value('txtNom'); ?>" /><br/>
<label for="txtMdp">Mot de passe de l'Utilisateur </label>
<input type="input" name="txtMdp" value="<?php echo set_value('txtMdp'); ?>" /><br/>
<input type="submit" name="submit" value="Ajouter l'utilisateur" />
</form>