
<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
<body> 

<div class="div_inscription">
	
<h3> Inscription d'un nouveau utilisateur </h3>
<form action ="Ajouter_user.php" method="post">


</br> </br> </br>
<label for="nomm">Nom  :</label>
<input type="text" name="nomm" id="nom" required="required"/> 
<br> <br>

<label for="prenom_u">Prénom :</label>
<input type="text" name="prenom_u" id="prenom" required="required"/> 
<br> <br>
	
<label for="nom_u">Nom utilisateur :</label>
<input type="text" name="nom_u" id="nom_user" required="required"/> 
<br> <br>

<label for="mdp">Mot de passe :</label>
<input type="text" name="mdp" id="motdepasse" required="required" /> 
<br> <br>

<label for="mail_u">Mail :</label>
<input type="text" name="mail_u" id="mail" required="required"/> 
<br> <br>
<button id="confirmer" type="submit"> Confirmer </button>
<br> <br><br> <br>
<a href="../index.php"> <h3> Connexion </h3> </a>


</form>
</div>
</body>