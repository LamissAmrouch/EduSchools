
<?php 




require_once('../Modele/connexion_db.php');
session_start();

// Ajout d'une nouvelle formation 
if (isset($_POST['liste_form']) and isset($_POST['forma']) and isset($_POST['VH']) and 
	isset($_POST['prix']) and isset($_POST['taxe'])  )
{

	$id_type_form = $_POST['liste_form'];
	$designation = $_POST['forma'];
	$VH = $_POST['VH'];
	$prix = $_POST['prix'];
	$taxe = $_POST['taxe'];
	
	$sql = "INSERT INTO formation(id_type_form,designation,volume_horaire,prix,taxe) 
	VALUES ('$id_type_form','$designation','$VH','$prix','$taxe')";
	$connexion->query($sql); 

}


// Ajout d'un nouveau type de formation 
if (isset($_POST['type_form']) and isset($_POST['forma2']) and isset($_POST['VH2']) and 
	isset($_POST['prix2']) and isset($_POST['taxe2'])  )
{
  
  //Ajout du type de foramtion
   $type_form = $_POST['type_form'];

   $sql = "INSERT INTO type_formation(designation) 
	VALUES ('$type_form')";
	$connexion->query($sql);

 //Ajout de la formation 
    $sql = $connexion->query("SELECT MAX(id) as identifier from type_formation");
    $result = $sql->fetch();  
  
    $id_type_form =  $result['identifier'] ;
	$designation = $_POST['forma2'];
	$VH = $_POST['VH2'];
	$prix = $_POST['prix2'];
	$taxe = $_POST['taxe2'];
	
	$sql = "INSERT INTO formation(id_type_form,designation,volume_horaire,prix,taxe) 
	VALUES ('$id_type_form','$designation','$VH','$prix','$taxe')";
	$connexion->query($sql);  

}



header("location: Gestion_formation.php");

?>