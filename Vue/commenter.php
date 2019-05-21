<?php 


require_once('../Modele/connexion_db.php');
session_start();


// Ajout d'un commentaire
if (isset($_POST['commentaire']) and isset($_POST['liste_ecole']))
{

	$id_ecole = $_POST['liste_ecole'];
	$commentaire = $_POST['commentaire'];
	$user =  $_SESSION["username"];
	/*
	$sql = $connexion->query("select id from utilisateur where nom_utilisateur=$user");  
	$result = $sql->fetch();  
    $id_user = $result['id'];*/
	$sql = "INSERT INTO commentaire(cmt,id_ecole,nom_user) 
	VALUES ('$commentaire','$id_ecole','$user')";
	$connexion->query($sql); 
}

header("location: page-commentaire.php");

?>