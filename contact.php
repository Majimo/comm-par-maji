<!doctype html>
<html lang="fr">
<head>
	<link rel="alternate" href="http://www.comm-par-maji.com" hreflang="fr-fr" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Envie de partager votre projet web, de lancer une campagne de Community Management, de conseils sur votre stratégie web ? Remplissez ce formulaire de contact.">
    <meta name="author" content="Pierre FERVEL">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title>Pierre FERVEL | Contactez moi</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
      [class*="col"] { margin-bottom: 20px; }
      img { width: 100%; }
	  h3 {font-size: 1.4em;}
    </style>
	<link rel="stylesheet" href="styles.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?php
	include_once "title.php";
	include_once "menu-top.php";
	include_once "menu.php";
?>
<div style="padding-bottom:5%;margin-top:-2%;">
	<h1 style="text-align:center;padding-top:4%;margin-bottom:2%;"><strong>Contact</strong></h1>
	<div class="row contact-form">
		<form id="contact" class="col-xs-offset-1 col-xs-11 col-sm-offset-1 col-sm-6 col-lg-offset-1 col-lg-6" method="post" action="envoi.php">
			<fieldset><legend>Vos coordonnées</legend>
				<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" tabindex="1" /></p>
				<p><label for="email">Email :</label><input type="text" id="email" name="email" tabindex="2" /></p>
			</fieldset>
		 
			<fieldset><legend>Votre message :</legend>
				<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" tabindex="3" /></p>
				<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
			</fieldset>
			<div class="g-recaptcha" data-sitekey="6LcONAoUAAAAAOtwFCzwVUcOBWAPe4-VA7fTow6F"></div>
		 
			<div style="text-align:center;"><input class="envoi" type="submit" name="envoi" value="Envoyer !" /></div>
		</form>
		<img src='img/contact.jpg' alt="Clé Contact Pierre FERVEL" class='col-sm-offset-1 col-sm-6 col-lg-offset-1 col-lg-3 hidden-xs' />
	</div>
</div>
<?php	
	include_once "footer.php";
?>
</body>
<?php include_once("googanaly.php") ?>
</html>