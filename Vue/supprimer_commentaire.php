
<?php 

require_once('../Modele/connexion_db.php');

$id = $_POST['id_cmt'];

$result=$connexion->query("DELETE from commentaire WHERE id='$id'");
 
 if ($result) {
 	header("location: Gestion-ecoles.php");
 }
 else{
 	echo "error";
 }

?>