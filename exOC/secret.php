<!DOCTYPE html>
<html lang="fr">
	<head>
		<title></title>

		<meta charset="utf-8" />
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" /> -->

	</head>
	<body>

		<!-- header -->
		<header>
			<h1></h1>
			<p>
			<?php
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', '', '');
					}
					catch(Exception $e)
					{
							die('Erreur : '.$e->getMessage());
					}

					$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
					$req->execute(array($_GET['possesseur'], $_GET['prix_max']));

					echo '<ul>';
					while ($donnees = $req->fetch())
					{
						echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
					}
					echo '</ul>';

					$req->closeCursor();

			?>


    
            
            </p>

			<nav>
				<ul>

			</nav>
		</header>
		<!-- FIN header -->
		<main>
		<!-- main -->
			<h2></h2>

			<!-- section -->
			<section>



			</section>

		</main>
		
    	<footer>
    	</footer>

       	<!-- <script type="text/javascript" src="js/jquery-3.3.1.js"> </script>
      	<script type="text/javascript" src="js/jquery-UI.js"> </script>
        <script type="text/javascript" src="js/bootstrap.js"> </script>
        <script type="text/javascript" src="js/script.js"> </script> -->
<!--dans l'ordre  jQuery> Bootstrap > TON_SCRIPT -->
	</body>
</html>