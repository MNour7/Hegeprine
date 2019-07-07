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
		<div id="formation">
			<div id="bt_ong">
				<div>PRESENTATION</div>
				<div>PROGRAMME</div>
				<div>COMPETENCE</div>
			</div>			

			
				<?php
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$req1 = $bd->query('SELECT * FROM formation where id = '.$id) or die(print_r($bd->errorInfo()));

						$form = $req1 -> fetch();

						?>

						<h1><?php echo $form['nom']; ?></h1>

						<h2 class="title">Description Générale</h2>
						<p><?php echo $form['description']; ?></p>

						<h2 class="title">Conditions d'Admission</h2>
						<?php 
							$tabAdm = explode("**", $form['admission']);
						?>
						<ul>
							<?php foreach ($tabAdm as $val) {
								echo "<li class='li_form'>".$val."</li>";
							} ?>
						</ul>

						<h2 class="title">Poursuite d'Etude</h2>
						<?php 
							$tabPour = explode("**", $form['poursuite']);
						?>
						<ul>
							<?php foreach ($tabPour as $val) {
								echo "<li class='li_form'>".$val."</li>";
							} ?>
						</ul>

						<h2 class="title">Débouchés</h2>
						<?php 
							$tabDeb = explode("**", $form['debouche']);
						?>
						<ul>
							<?php foreach ($tabDeb as $val) {
								echo "<li class='li_form'>".$val."</li>";
							} ?>
						</ul>

					<?php

					}else{
						echo "<h1> Aucune information à afficher </h1>";
					}
				?>
		</div>
	</div>
</body>
</html>