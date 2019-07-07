<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/css.flexslider.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="stackpathha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<title>Acceuil</title>
</head>
<body>
	<?php 
		include 'menu.php';
	?>
	<div id="page">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="images/stat.png" alt="Chania" style="width:100%;">
		      <div class="carousel-caption">
		        <h3>Los Angeles</h3>
		        <p>LA is always so much fun!</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="images/slide4.jpg" alt="Chicago" style="width:100%;">
		      <div class="carousel-caption">
		        <h3>Chicago</h3>
		        <p>Thank you, Chicago!</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="images/slide2.jpg" alt="New York" style="width:100%;">
		      <div class="carousel-caption">
		        <h3>New York</h3>
		        <p>We love the Big Apple!</p>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div id="les_articles">
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
			      		<p class="text_mini">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
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
			</ul>
		</div>
	</div>
</body>
</html>