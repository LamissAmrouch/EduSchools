
<?php 



require_once('../Modele/connexion_db.php');
session_start();


$id = $_POST['id_formation'];

$result=$connexion->query("DELETE from formation WHERE id='$id'");
 
 if ($result) {
 	header("location: Gestion_formation.php");
 }
 else{
 	echo "error";
 }

?>