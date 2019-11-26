<h2><?php echo $TitreDeLaPage ?></h2>
<!--
$TitreDeLaPage : variable récupérée depuis le contrôleur
$lesArticles : variable récupérée depuis le contrôleur (en 'mode tableau associatif')
 -->
<?php foreach ($lesUtilsateurs as $unUtilisateur):
     echo '<h3>'.anchor('administrateur/voirUnUtilisateur/'.$unUtilisateur['cNo'],$unUtilisateur['cIdentifiant']).'</h3>';
endforeach ?>

<p>Afin d'afficher le détail d'un article, cliquer sur son nom</p>