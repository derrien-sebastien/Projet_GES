<?php

class ModeleEvenement extends CI_Model {
public function __construct()
{
$this->load->database();
/* chargement database.php (dans config), obligatoirement dans le constructeur */
}

/* public function nombreDEvenements() { // méthode utilisée pour la pagination
return $this->db->count_all("ge_evenement");
} // nombreDEvenements
public function retournerEvenementsLimite($nombreDeLignesARetourner, $noPremiereLigneARetourner)
{// Nota Bene : surcharge non supportée par PHP
$this->db->limit($nombreDeLignesARetourner, $noPremiereLigneARetourner);
$requete = $this->db->get("ge_evenement");
if ($requete->num_rows() > 0) { // si nombre de lignes > 0
foreach ($requete->result() as $ligne) {
$jeuDEnregsitrements[] = $ligne;
}
return $jeuDEnregsitrements;
} // fin if
return false;
} // retournerEvenementsLimite */
     public function retournerEvenements($pNoEvenement = FALSE)
     {
        if ($pNoEvenement === FALSE) // pas de n° d'evenement en paramètre
        {  // on retourne tous les evenements
             $requete = $this->db->get('ge_evenement');
             return $requete->result_array(); // retour d'un tableau associatif
        }
        // ici on va chercher l'evenement dont l'id est $pNoEvenement
        $requete = $this->db->get_where('ge_evenement', array('NoEvenement' => $pNoEvenement));
        return $requete->row_array(); // retour d'un tableau associatif
     } // fin retournerEvenements
	 
} // Fin Classe