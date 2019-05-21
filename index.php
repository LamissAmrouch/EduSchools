<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="Vue/style.css">
<meta charset="utf-8">

</head>
<body> 

<?php 
session_start();
?> 

<div class="div_connexion">
<h3> Connexion </h3>
</br> </br> </br>

<form action = "Vue/Verifier_connexion.php" method="post">
<label for="nom">Nom utilisateur :</label>
<input type="text" name="nom" id="nom_user" required="required" /> 
<br> <br>

<label for="mdp">Mot de passe :</label>
<input type="password" name="mdp" id="motdepasse" required="required" /> 
<br> <br>
<button id="connecter" type="submit"> Connecter </button>
<br> <br><br>
<a href="Vue/Inscription.php"> <h3> Inscription </h3> </a>
</form>
</div>


</body>