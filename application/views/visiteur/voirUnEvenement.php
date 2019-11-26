<?php

echo '<p>'.img($unEvenement['ImgEntete']).'<p>';//image de notre entete
echo '<h1>'.$unEvenement['TxtHTMLEntete'].'</h1>';//affiche l'entete
echo '</br>';
echo '</br>';
echo $unEvenement['TxtHTMLCorps'];//affiche le corps
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo $unEvenement['TxtHTMLPiedDePage'];//affiche le pied de page 

echo '<p>'.img($unEvenement['ImgPiedDePage']).'<p>';//image de notre pied de page 
echo '</br>';
echo '</br>';echo $unEvenement['DateMiseHorsLigne'];
echo '<p>'.anchor('visiteur/listerLesEvenements','Retour à la liste des evenements').'</p>';