<?php 


require_once('../Modele/connexion_db.php');



if (isset($_POST['nom']) and isset($_POST['commune']) and isset($_POST['wilaya']) and isset($_POST['tel']) and isset($_POST['fax']))
{

$nom = $_POST['nom'];
$commune = $_POST['commune'];
$wilaya = $_POST['wilaya'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];

if ($_POST['des'] == 0)
{
$enligne = 0;
}
else
{
$enligne = 1;
}

$requestInsert=$connexion->query("UPDATE ecole
set commune='$commune',wilaya='$wilaya',telephone='$tel',fax='$fax',enligne='$enligne'
  where nom ='$nom'");

  header("location: Gestion-ecoles.php"); 

}
header("location: Gestion-ecoles.php");

?>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
