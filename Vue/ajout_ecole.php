<?php 


require_once('../Modele/connexion_db.php');


// Ajout d'une nouvelle ecole
if (isset($_POST['nom']) and isset($_POST['categorie']) and isset($_POST['commune']) and 
	isset($_POST['wilaya']) and isset($_POST['adresse']) and isset($_POST['telephone']) and isset($_POST['fax']) )
{

	$nom = $_POST['nom'];
	$categorie = $_POST['categorie'];
	$commune = $_POST['commune'];
	$wilaya = $_POST['wilaya'];
	$adresse = $_POST['adresse'];
	$telephone = $_POST['telephone'];
    $fax = $_POST['fax'];
	
	$sql = $connexion->query("select id from categorie where nom=$categorie");
	$result = $sql->fetch();  
    $id_categorie = $result['id']; 
	$sql = "INSERT INTO 
	ecole(nom,commune,wilaya,adresse,telephone,fax,enligne,id_categorie) 
	VALUES ('$nom','$commune','$wilaya','$adresse','$telephone','$fax','0'
	,'$id_categorie')";
	$connexion->query($sql); 

}


header("location: Gestion-ecoles.php");

?>