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
			<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo strip_tags($_POST['prenom']); ?> !</p>
<?php 
			$mdp= $_POST['motDePasse'];    
			if(isset($_POST['motDePasse']) AND $mdp==="kangourou"){

				echo "les mots de passes de la nasa Sont Verslinfinietaudela";

			}



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