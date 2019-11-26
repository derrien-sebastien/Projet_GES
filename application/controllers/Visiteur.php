<?php

class Visiteur extends CI_Controller {
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('assets'); 				// helper 'assets' ajouté a Application
      $this->load->library("pagination");			
      $this->load->model('ModeleEvenement');		// chargement modèle
	  //$this->load->model('ModeleUtilisateur');	  	// chargement modèle
      
   }
 
   public function listerLesEvenements() // lister tous les evenements
   {
      $DonneesInjectees['lesEvenements'] = $this->ModeleEvenement->retournerEvenements();
      $DonneesInjectees['TitreDeLaPage'] = 'Tous les evenements';
      $this->load->view('templates/EntetePrincipal');
      $this->load->view('visiteur/listerLesEvenements', $DonneesInjectees);
      $this->load->view('templates/PiedDePagePrincipal');
   } // listerLesEvenements
  // Visiteur
  
public function voirUnEvenement($NoEvenement = NULL) // valeur par défaut de NoEvenement = NULL
{
  $DonneesInjectees['unEvenement'] = $this->ModeleEvenement->retournerEvenements($NoEvenement);
  if (empty($DonneesInjectees['unEvenement']))
  {   // pas d'article correspondant au n°
     show_404();
  }
 $DonneesInjectees['TitreDeLaPage'] = $DonneesInjectees['unEvenement']['NoEvenement'];
  // ci-dessus, entrée ['cTitre'] de l'entrée ['unEvenement'] de $DonneesInjectees
  $this->load->view('templates/EntetePrincipal');
  $this->load->view('visiteur/VoirUnEvenement', $DonneesInjectees);
  $this->load->view('templates/PiedDePagePrincipal');
} // voirUnEvenement
/* public function seConnecter()
{
   $this->load->helper('form');
   $this->load->library('form_validation');
   $DonneesInjectees['TitreDeLaPage'] = 'Se connecter';
   $this->form_validation->set_rules('txtIdentifiant', 'Identifiant', 'required');
   $this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');
   // Les champs txtIdentifiant et txtMotDePasse sont requis
   // Si txtMotDePasse non renseigné envoi de la chaine 'Mot de passe' requis
   if ($this->form_validation->run() === FALSE)
   {  // échec de la validation
// cas pour le premier appel de la méthode : formulaire non encore appelé
$this->load->view('templates/Entete');
$this->load->view('visiteur/seConnecter', $DonneesInjectees); // on renvoie le formulaire
$this->load->view('templates/PiedDePage');
   }
   else
   {  // formulaire validé
$Utilisateur = array( // cIdentifiant, cMotDePasse : champs de la table tabutilisateur
   'cIdentifiant' => $this->input->post('txtIdentifiant'),
   'cMotDePasse' => $this->input->post('txtMotDePasse'),
); // on récupère les données du formulaire de connexion
// on va chercher l'utilisateur correspondant aux Id et MdPasse saisis
$UtilisateurRetourne = $this->ModeleUtilisateur->retournerUtilisateur($Utilisateur);
if (!($UtilisateurRetourne == null))
{    // on a trouvé, identifiant et statut (droit) sont stockés en session
     $this->load->library('session');
     $this->session->identifiant = $UtilisateurRetourne->cIdentifiant;
     $this->session->statut = $UtilisateurRetourne->cStatut;
     $DonneesInjectees['Identifiant'] = $Utilisateur['cIdentifiant'];
     $this->load->view('templates/Entete');
     $this->load->view('visiteur/connexionReussie', $DonneesInjectees);
     $this->load->view('templates/PiedDePage');
}
else
{    // utilisateur non trouvé on renvoie le formulaire de connexion
     $this->load->view('templates/Entete');
     $this->load->view('visiteur/seConnecter', $DonneesInjectees);
     $this->load->view('templates/PiedDePage');
}  
}
} // fin seConnecter
public function seDeConnecter() { // destruction de la session = déconnexion
    $this->session->sess_destroy();
	
} */
// affichage avec pagination
public function listerLesEvenementsAvecPagination() {
   // les noms des entrées dans $config doivent être respectés
   $config = array();
   $config["base_url"] = site_url('visiteur/listerLesEvenementsAvecPagination');
   $config["total_rows"] = $this->ModeleEvenement->nombreDEvenements();
   $config["per_page"] = 3; // nombre d'evenements par page
   $config["uri_segment"] = 3; /* le n° de la page sera placé sur le segment n°3 de URI,
   pour la page 4 on aura : visiteur/listerLesEvenementsAvecPagination/4   */
   $config['first_link'] = 'Premier';
   $config['last_link'] = 'Dernier';
   $config['next_link'] = 'Suivant';
   $config['prev_link'] = 'Précédent';
   $this->pagination->initialize($config);
   $noPage = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
   /* on récupère le n° de la page - segment 3 - si ce segment est vide, cas du premier appel
   de la méthode, on affecte 0 à $noPage */
   $DonneesInjectees['TitreDeLaPage'] = 'Les evenements, avec pagination';
   $DonneesInjectees["lesEvenements"] = $this->ModeleEvenement->retournerEvenementsLimite($config["per_page"], $noPage);
   $DonneesInjectees["liensPagination"] = $this->pagination->create_links();
   $this->load->view('templates/EntetePrincipal');
   $this->load->view("visiteur/listerLesEvenementsAvecPagination", $DonneesInjectees);
   $this->load->view('templates/PiedDePagePrincipal');
} // fin listerLesEvenementsAvecPagination

}
