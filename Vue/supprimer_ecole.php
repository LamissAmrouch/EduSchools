
<?php 

require_once('../Modele/connexion_db.php');



$id = $_POST['id_ecole'];

$result=$connexion->query("DELETE from ecole WHERE id='$id'");
 
 if ($result) {
 	header("location: Gestion-ecoles.php");
 }
 else{
 	echo "error";
 }

?>