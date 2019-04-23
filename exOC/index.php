<!DOCTYPE html>
<html lang="fr">
	<head>
		<title></title>



<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', '', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>






<?php
// Sous MAMP (Mac)
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', '', '');
$reponse = $bdd->query("SELECT * FROM jeux_video WHERE possesseur = 'florent' AND prix<25 ORDER BY prix DESC");



// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']." ce jeu coute ".$donnees['prix']." E"; ?>
   </p> 
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



		<meta charset="utf-8" />
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" /> -->

	</head>
	<body>

		<!-- header -->
		<header>
			<h1></h1>
			<p>
			Voici ma page :




			<form action="secret.php" method="get">

				<p>le jeu de qui voulez vous ?<br/>
					<input type="text" name="possesseur"/><br/>
					pour quel budjet au maximum ?<br/>


							<input type="text" name="prix_max" />


					<br/><input type="submit" value="valider"/>


				</p>
</form>
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