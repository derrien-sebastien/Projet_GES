<html>

<head>

<title>NomDuSite</title>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GES</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><img src="<?php echo base_url(); ?>assets/images/accueil.png" height="25" width="25"></a></li>
      <li><a href="<?php echo site_url('visiteur/listerLesEvenements') ?>">Lister tous les Evènements</a></li>
	  
    
      <li><a href="#">Gérer votre compte</a></li>
	  <?php if (!is_null($this->session->identifiant)) : ?>
       <?php echo 'Utilisateur connecté : <B>'.$this->session->identifiant.'</B>&nbsp;&nbsp;';?>
       <li><a href="<?php echo site_url('visiteur/seDeconnecter') ?>">Se déconnecter</a></li>&nbsp;&nbsp;
       <?php if ($this->session->statut==1) : ?>
          <li><a href="<?php echo site_url('administrateur/ajouterUnArticle') ?>">Ajouter un article</a></li>&nbsp;&nbsp;
		  <li><a href="<?php echo site_url('administrateur/ajouterUnUtilisateur') ?>">Ajouter un utilisateur</a></li>&nbsp;&nbsp;
       <?php endif; ?>
    <?php else : ?>
       <li><a href="<?php echo site_url('visiteur/seConnecter') ?>">Se Connecter</a></li>&nbsp;&nbsp;
    <?php endif; ?>
	<li><a href="#"><img src="<?php echo base_url(); ?>assets/images/panier.png" height="25" width="25"></a></li>
	<!--<form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Rechercher" name="Rechercher">
      </div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>-->
	
    </ul>
  </div>
</nav>

