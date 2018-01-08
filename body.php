<div class="row">
	<div id="site" class="col-lg-12 content-1">
		<div class="row">
			<div class="col-xs-offset-1 col-lg-4 col-xs-11 col-sm-10 content-desc">
				<h2>
					Une <strong>création de site</strong> à <strong>votre</strong> image<br>
					<span class="subtitle-titre2">Une <strong>communication</strong> qui <strong>vous</strong> ressemble</span>
				</h2>
				<h3>Pour vous, j'affronterai la jungle du net !</h3>
				<div class="description">
					<p class="location"><em>Comm' Par Maji</em>, c'est une jeune auto-entreprise <strong>bretonne spécialisée web</strong>, basée à tout juste 10mn de Rennes.</p>
					<p>Je suis spécialisé dans l'<strong>intégration web</strong> et le <strong>community management</strong>. Je peux également vous aider en vous conseillant dans votre web-stratégie pour votre entreprise.</p> <p>Ensemble et en parfaite convivialité, nous ferons de votre projet <span class="notre-projet"><em>notre</em> projet</span>.</p>
					<p><em>Comm' Par Maji</em>, c'est donc l'occasion de travailler avec un interlocuteur local, sympathique, dédié, à l'écoute de vos demandes et avec des conseils avisés.</p>
					<p style="text-align:center;margin-top: 70px;"><a href="tarifs.php" title="Tarifs prestations web Pierre Fervel">Découvrir mes offres</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-2 row">
	<div class="col-lg-offset-1 col-lg-10 chooseme">
		<div class="row">
			<ul class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-5">
				<a href="creation.php" style="text-decoration:none;color:white;" title="Programmation Web Pierre Fervel"><li class="prog-web"><h3>Programmation Web</h3></li></a>
				<a href="conseil-web.php" style="text-decoration:none;color:white;" title="Référencement Rennes"><li class="referencemt"><h3>Référencement</h3></li></a>
				<a href="creation.php" style="text-decoration:none;color:white;" title="Graphisme Web Identité Graphique"><li class="graphisme"><h3>Graphisme Web</h3></li></a>
				<a href="communication.php" style="text-decoration:none;color:white;" title="Communication Community Management Ille et Vilaine"><li class="comm-web"><h3>Communication Web</h3></li></a>
			</ul>
			<h2 class="hidden-xs col-lg-offset-5 col-lg-2 col-sm-offset-2 col-sm-4"><span class="pourquoi">Pourquoi</span><br> me choisir ?</h2>
		</div>
	</div>
</div>

<div class="content-3">
	<div class="row">
		<h2 class="col-xs-12 col-lg-offset-1 col-lg-2 col-sm-3 fontconfiance">Ils me font<br><span class="confiance">confiance</span></h2>
			<ul class='col-xs-offset-3 col-lg-offset-0 col-xs-8 col-sm-offset-0 col-sm-3 col-lg-2 list-logo'>
				<?php
				if ($db_connexion = new PDO('mysql:host=commparmevpro.mysql.db; dbname=commparmevpro;charset=utf8', 'commparmevpro', '2016bd10CPM'))
					{
						$nombre = 1;
						foreach($db_connexion->query('SELECT * FROM `commparmevpro` WHERE 1') as $row){
							echo "
								<li><a href='".$row['image']."' target='new' title='Partenaire Pierre Fervel ".$row['nom']."'><img src='img/references/references".$nombre.".png' alt='".$row['nom']."' /></a></li>";
							$nombre++;
						}
					}
				?>
			</ul>
		<span class="col-xs-12 col-lg-7 col-sm-6 fondmobile"><div class="col-xs-12 col-lg-offset-3 col-lg-4 col-sm-6 contact" style="text-align: center;">
			<p><a href="contact.php" title="Contact Pierre Fervel Comm' Par Maji"><img src="img/mailto.png" alt="send envoyer mail" /></a></p>
			<p><a href="contact.php" title="Formulaire Contact Prestation Web Rennes">Contactez-moi</a></p>
			<div class="partie-2"><p><img src="img/phone.png" alt="phone call appeler téléphone" /></p>
				<p class="call">Appelez moi</p>
				<p class="number">02 99 62 65 87</p></div>
			<div style="display: none;">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>
		<h2 class="col-xs-12 col-lg-3 col-sm-6 commence">On commence <br><span class="quand">quand ?</span></h2></span>
	</div>
</div>