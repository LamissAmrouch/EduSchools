<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
<body>

<?php 
require_once('../Modele/connexion_db.php');
session_start();
?>

<?php 
 require_once('header.php');
?>


<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>

<div id="div-commentaire">
<div id="novform" class="divs">
<h3>Commenter sur l'école </h3>
<form method="post" action="commenter.php">
<label for="liste_ecole">Liste des écoles</label>
<select id="ecole" name='liste_ecole' data-placeholder="Choisir l'école">

<?php
require_once('../Modele/EcoleManager.php');

    $ecoleMng = new EcoleManager();
    $ecoles =  $ecoleMng->GetAllEcoleInformation();

while ($resultat = $ecoles->fetch())
  {
echo '<option value="'.$resultat['id'].'" >'.$resultat['nom'].'</option>' ;
  }
?>
                  
</select>
<br>  <br> <br> 

<button  type="submit"> Evoyer votre commentaire </button>
</div>
<textarea name="commentaire" placeholder="Ecrire votre commentaire">   </textarea>


</form>
</div> 


<br> <br><br> <br>
<br> <br><br> <br>


<?php 
    
echo ' 
<table class="table" id="t">
<thead>
<tr>
<th>Ecole</th>
<th>Utilisateur</th>
<th>Commentaire</th>
</tr>
</thead>
<tbody>';

 $sql = "select * from commentaire";

 foreach ($connexion->query($sql) as $row) {
 
 $id_ecole = $row['id_ecole'];
 $sql = $connexion->query("select nom from ecole where id='$id_ecole'");
 $result = $sql->fetch();
 $nom = $result['nom'];
echo '<tr>';
  echo '<td>'.$result['nom'].'</td>'; 
  echo '<td>'.$row['nom_user'].'</td>';
  echo '<td >'.$row['cmt'].'</td>';  
  echo '</tr>';
 
}

echo '</tbody>
</table>';
?>

<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>
<br> <br><br> <br>

</body>
</html>