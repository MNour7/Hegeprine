<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>Catalogue Des Formations</title>
</head>
<body>
	<?php 
		include 'menu.php';
		include 'connexion_bd.php';
	?>
	<div id="page">
		<div id="arts_left">
			<ul>
				<li>
					<a href="#">
						<p class="tit">UN JOLI TITRE D'ESSAI</p>
			    		<img src="images/logo.jpg" class="img_mini"/>
			      		<p class="text_mini">
			      			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			      		</p>
		    		</a>
				</li>

				<li>
					<a href="#">
						<p class="tit">UN JOLI TITRE D'ESSAI</p>
			    		<img src="images/slide2.jpg" class="img_mini" />
			      		<p class="text_mini">
			      			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			      		</p>
		    		</a>
				</li>

				<li>
					<a href="#">
						<p class="tit">UN JOLI TITRE D'ESSAI</p>
			    		<img src="images/logo.jpg" class="img_mini" />
			      		<p class="text_mini">
			      			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			      		</p>
		    		</a>
				</li>
			</ul>
		</div>
		<div id="les_formations">
			<h1>LES FORMATIONS A HEGEPRINE</h1>
			<p>
				L’école privée HEGEPRINE propose trois filières de formation supérieure
				d’excellence accès sur l’industrie, l’eau et l’environnement. Les programmes de formation
				sont proposés d’un commun accord avec les industries nigériennes et le Ministère de
				l’enseignement Supérieur, de la Recherche et de l’Innovation avec la pleine participation du
				Ministère de la formation professionnelle et Technique et le Ministère de l’Industrie. Les
				programmes de formations sont établis sous la base des principes régissant le système LMD
				(Licence – Master – Doctorat), nouveau régime d’enseignement supérieur. Toutes les
				formations sont tirées des meilleures expériences universitaires d’Afrique, des Etats-Unis, de
				l’Europe et d’Asie etc., qui ont et continuent de produire la meilleure main d’œuvre adaptée
				aux besoins réels explicites et implicites des industries et des pays du monde entier.
			</p>

			<ul>
				<?php
					$req1 = $bd->query('SELECT * FROM diplome') or die(print_r($bd->errorInfo()));

					while ($dip=$req1->fetch()){
					?>
						<li class="diplome">
							<h2>Les <?php echo $dip['libelle'] ?></h2>
							<ul>
								<?php 
									$req2 = $bd->query('SELECT * FROM formation	WHERE diplome='.$dip['id']) or die(print_r($bd->errorInfo()));

									while ($form=$req2->fetch()){
									?>
										<li class="une_form"><a href="formation?id=<?php echo $form['id'] ?>"><?php echo $form['nom'] ?></a></li>
									<?php
									}
								?>
							</ul>
						</li>

					<?php
					}
				?>
			</ul>
		</div>
	</div>
</body>
</html>