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





<?php 
            
    if(isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])   )
    {
        $_GET['repeter']= (int) $_GET['repeter'];

        if($_GET['repeter']>=1 AND  $_GET['repeter']<100){
        
            for ($i = 0; $i < $_GET['repeter'] ; $i++)
                {
                    echo 'Bjr '. $_GET['prenom']. '  '.$_GET['nom'] .' !';
                }
        }
    }
    else{
            echo 'renseigne ton id stp';
        }



?> 
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