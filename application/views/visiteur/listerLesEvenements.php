<h2><?php echo $TitreDeLaPage ?></h2>
<!--
$TitreDeLaPage : variable récupérée depuis le contrôleur
$lesEvenements : variable récupérée depuis le contrôleur (en 'mode tableau associatif')
 -->
<?php foreach ($lesEvenements as $unEvenement):
     echo '<h4>'.anchor('visiteur/voirUnEvenement/'.$unEvenement['NoEvenement']).'</h4>';
endforeach ?>

<p>Afin d'afficher plus de détails sur un évènement, cliquer sur son titre</p>