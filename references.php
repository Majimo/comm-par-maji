<!doctype html>
<html lang="fr">
<head>
	<link rel="alternate" href="http://www.comm-par-maji.com" hreflang="fr-fr" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Retrouvez à travers mes références des exemples du travail que je pourrais réaliser pour vous. Pour votre communication web, votre intégration de contenu au sein de votre site web, etc...">
    <meta name="author" content="Pierre FERVEL">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title>Pierre FERVEL | Mes références</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
      [class*="col"] {margin-bottom: 20px;}
    </style>
	<link rel="stylesheet" href="styles.css">
	<style type="text/css">
	  footer {margin-top: 10%;}
	</style>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<?php
	include_once "title.php";
	include_once "menu-top.php";
	include_once "menu.php";
?>
<h1 class="ref">Mes références</h1>
<script src="js/sdFilterMe.js"></script>	
<script>jQuery(function($) {

  $('#sort-me').sdFilterMe({
      filterSelector: '.sorter',
      orderSelector: '.orderer',
      duration: 1000,
      animation: 'ease',
      hoverEffect: true,
      sortedOut: 'disappear',
      css: {
          overlay: {
              background: {
                  r: 255,
                  v: 255,
                  b: 255
              },
              duration: 250,
              border: 'none',
              color: '#325565',
              opacity: 0.66
          },
          border: {
              width: 0,
              color: '#1d78a2'
          },
          margin: 0,
          pointer: true
      },
      nothingToShow: {
          text: 'Rien à afficher pour le moment',
          color: '#ccc'
    }
  }).on('fm.boxClicked', function(e, position, order) {
        console.log('Box position is ' + position);
        console.log('Box sort order is ' + order);
    });

});</script>
<?php
if ($db_connexion = new PDO('mysql:host=commparmevpro.mysql.db; dbname=commparmevpro;charset=utf8', 'commparmevpro', '2016bd10CPM'))
	{
		echo "	<section class='color-1'><center class='buttons'><button class='sorter btn btn-1 btn-1f' data-filter='conseil'>Conseil Web</button>
				<button class='sorter btn btn-1 btn-1f' data-filter='creation'>Créations de Site Web</button>
				<button class='sorter btn btn-1 btn-1f' data-filter='comm'>Communication</button>
				<button class='sorter btn btn-1 btn-1f' data-filter='*'>Pas de filtre</button></center></section>";
		echo "	<ul id='sort-me'>";
		$nombre = 1;
		foreach($db_connexion->query('SELECT * FROM `commparmevpro` WHERE 1') as $row){
			echo "	<li class='".$row['typemime']."' data-title='".$row['nom']."' data-link='".$row['image']."'>
						<img src='img/references/ref".$nombre.".jpg' alt='Références Pierre FERVEL Comm Par Maji ".$row['nom']."' />
					</li>";
			$nombre++;
		}
		echo "</ul>";
	}
	include_once "footer.php";
?>
</body>
<?php include_once("googanaly.php") ?>
</html>