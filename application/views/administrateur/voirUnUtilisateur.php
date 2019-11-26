<?php
echo '<h2>'.$unUtilisateur['cIdentifiant'].'</h2>';
echo $unUtilisateur['cIdentifiant'];
echo '<p>'.img($unUtilisateur['cNomFichierImage']).'<p>'; // Affiche directement l'image
// Nota Bene : img_url($unArticle['cNomFichierImage']) aurait retourne l'url de l'image (cf. assets)
echo '<p>'.anchor('aministrateur/listerLesUtilisateurs','Retour à la liste des utilisateurs').'</p>';