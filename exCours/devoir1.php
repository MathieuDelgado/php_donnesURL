<?php 
    //1 : faire l'appel des variables pour le nom, le prénom, l'âge.
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['agePers'])) {
    //2 : tester leur valeur.
    if((strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 50)  ){
        $erreurs[]=" nom, ";
    }
    if(strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 50 ){
        $erreurs[]=" prenom, ";
    }
    if($_POST['agePers'] < 2 || $_POST['agePers'] > 50 && filter_var($_POST['agePers'], FILTER_VALIDATE_INT) ){
        $erreurs[]=" votre âge ";
    }
}

    // étape 1) et 2) pour la couleur de fond.

if(isset($_POST['color'])){
    if(strlen($_POST['color']) != 7 ){
        $erreurcoul="Il y a une erreur avec la couleur ! Merci de la remplir en hexadécimal ! ";
       
    }
}
//attribution du cookie si la variable entrée dans le questionnaire est nickel
if(isset($_POST['color'])){
    if(strlen($_POST['color']) == 7 ){
        setcookie('cookiename', $_POST['color'], time()+60*60*24*365,null ,null ,false ,true);
        echo $_COOKIE['cookiename'];
       
    }
}

// IL FAUT INCLURE LE COOKIE dans la partie juste au dessus : c'est à dire une fois 
// 
// 

// 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style='background-color: <?php 
if(isset($_POST['color'])){
    echo htmlspecialchars($_POST['color']) ;
}
if(!isset($_POST['color']) && isset($_COOKIE['cookiename'])){
    echo htmlspecialchars($_COOKIE['cookiename']) ;
}
?> ;'>

<h1>Mon site !</h1>


<!-- questionnaire d'athentification -->

<?php if(isset($erreurs)){  ?>
    <h2>La page 1, merci de vous connecter !</h2>
<form action="devoir1.php" method="POST">
    <p><label for="name">Merci d'indiquer votre nom :</label><input type="text" name="nom" id="name"></p>
    <p><label for="firstname">Merci d'indiquer votre prénom :</label><input type="text" name="prenom" id="firstname"></p>
    <p><label for="age">Merci d'indiquer votre age :</label><input type="number" name="agePers" id="age"></p>
    <p><input type="submit"><label>Valider</label></p>
</form>      

<?php }


// affichage des erreures au cas où le questionnaire d'athentification a mal été rempli !
if(isset($erreurs)){
    echo "<strong style='color: red;' > vous n'avez pas bien complétés les données suivantes : ";
    foreach($erreurs as $erreur){
        echo htmlspecialchars($erreur);
    }
    echo "</strong> ";
}
//affichage de l'erreur couleur si mal remplie, une fois l'athentification réalisée
if(isset($erreurcoul)){
    echo "<strong style='color: red;' > vous n'avez pas bien complétés les données sur la couleur (doit être en héxadécimal) ";
    echo "</strong> ";
}


//message d'arrivée en cas de bone authentification.
if(!isset($erreurs)){
    echo "    <h2>La page 1, Page d'acceuil !</h2>";
    echo "<strong style='color: green;' > Bienvenu sur mon site, vous pouvez désormais naviguer : </strong> ";
    include('menu1.php');

?>
<!-- questionnaire pour la couleur de fond -->

<form action="devoir1.php" method="POST">
    <p><label for="color">Merci d'indiquer la couleur que vous choisissez en fond d'ecran de ce site :</label><input type="text" name="color" id="color"></p>
    <p><input type="submit"><label>Valider</label></p>
</form>   
    
<?php } ?>
  
          


    
</body>
</html>