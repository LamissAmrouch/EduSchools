<?php 




require_once('../Modele/connexion_db.php');
session_start();



if (isset($_POST['forma']) and isset($_POST['type_form']) and isset($_POST['VH']) and isset($_POST['prix']) and isset($_POST['taxe']) )
{

	$type_form = $_POST['type_form'];
	 $sql = $connexion->query("SELECT id FROM type_formation WHERE designation ='$type_form'");
    $result = $sql->fetch(); 
    $id_type_form = $result['id'];
    $designation = $_POST['forma'];
    $sql = $connexion->query("SELECT id FROM formation WHERE designation ='$designation'");
    $result = $sql->fetch(); 
    $id = $result['id'];
	$VH = $_POST['VH'];
	$prix = $_POST['prix'];
	$taxe = $_POST['taxe'];

$requestInsert=$connexion->query("UPDATE formation
        set id_type_form='$id_type_form',
        designation='$designation',volume_horaire='$VH',prix='$prix',taxe='$taxe'
  where id = '$id'");

  if (!$requestInsert) echo "error !";
  header("location: Gestion_formation.php");

	

}


header("location: Gestion_formation.php");

?>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
