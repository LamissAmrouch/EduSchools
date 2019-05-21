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


echo ' 
<h2> Tableau récapitulatif  des formations fournies </h2>
<table id="monTableau" class="table">
<thead>
<tr id="ligne1">
<th id="col1" class="formations" >Type_formation</th>
<th>Formation</th>
<th>Volume horaire</th>
<th>Prix HT</th>
<th>TAXE</th>
<th>TTC</th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>';

$sql = "SELECT * from type_formation where id_ecole=1 ";

 $i = 0;
foreach ($connexion->query($sql) as $row) {

$id = $row['id'] ;
   $q = "SELECT * FROM formation where id_type_form='$id' ORDER BY designation ASC" ;

echo '<tr>';

   foreach ($connexion->query($q) as $r) {
  $i = $i + 1 ;
  echo '<td class="type_formation">'.$row['designation'].'</td>';
  $id = $r['id'];

  echo '<td class="formation">'.$r['designation'].'</td>';
  echo '<td class="VH">'.$r['Volume_horaire'].'</td>';
  echo '<td class="prix">'.$r['prix'].'</td>';
  echo '<td class="taxe">'.$r['taxe'].'</td>';
  echo '<td class="ttc"> </td>';
  echo '<td> <button class="btn_modifier2" id="'.$i.'"> Modifier </button> 
  </td>
  
  <td> 
  <form action ="supprimer_formation.php" method="post">
  <input type="hidden" name="id_formation" value="'.$id.'" />
  <button class="btn_supprimer" id="'.$id.'" type="submit" > Supprimer 

  </button>

  </form>
  </td>';


  echo '</tr>';
  
 
   }    
}

echo '</tbody>';
echo '</table>';
?>


<br> <br> <br> <br> 

<div id="div_modifier">
<h3> Modifier une formation </h3>
<form action ="modifier_formation.php" method="post">
<label for="forma">Formation :</label>
<input type="text" name="forma" id="forma3" /> 
<br> <br>
<label for="type_form">Type Formation :</label>
<input type="text" name="type_form" id="type_forma3" /> 
<br> <br>
<label for="VH">Volume Horaire :</label>
<input type="text" name="VH" id="VH3" /> 
<br> <br>
<label for="prix">Prix :</label>
<input type="text" name="prix"  id="prix3" /> 
<br> <br>
<label for="taxe">Taxe :</label>
<input type="text" name="taxe"  id="taxe3" /> 
<br> <br>
<button id="valider" type="submit">  Valider </button>
</form>
</div>
<br> <br> <br> <br>
<div class="global">


<div id="novtype2" class="divs">
<h3> Ajouter un nouveau type de formation </h3>
<form action ="ajout_formation.php" method="post">
<label for="type_form">Type Formation :</label>
<input type="text" name="type_form" id="type_forma" required="required"/> 
<br> <br>
<label for="forma2">Formation :</label>
<input type="text" name="forma2" id="formation" required="required"/> 
<br> <br>
<label for="VH2">Volume Horaire :</label>
<input type="text" name="VH2" id="VolumeH" required="required"/> 
<br> <br>
<label for="prix2">Prix :</label>
<input type="text" name="prix2"  id="prix" required="required"/> 
<br> <br>
<label for="taxe2">Taxe :</label>
<input type="text" name="taxe2" id="taxe" required="required"/> 
<br> <br> 

<button id="ajouter" type="submit">  Ajouter </button>

<button id="annuler" type="reset">  Annuler </button>

</form>
</div>

<div id="novform2" class="divs">
<h3> Ajouter une nouvelle formation </h3>

<form action = "ajout_formation.php" method="post">
<label for="liste_form">Type Formation :</label>
<select id="liste_formation" name='liste_form' data-placeholder="Choisir la formation">
                 

<?php
 $sql = "select * from type_formation" ;
$i =1 ; 
?>
<option value="0"> </option>
<?php
foreach ($connexion->query($sql) as $row) {

echo '<option value="'.$row['id'].'" >'.$row['designation'].'</option>' ;
 $i++;

}

?>
                  
</select>
<br> <br>
<label for="forma">Formation :</label>
<input type="text" name="forma" id="formation" required="required"/> 
<br> <br>
<label for="VH">Volume Horaire :</label>
<input type="text" name="VH" id="VolumeH" required="required"/> 
<br> <br>
<label for="prix">Prix :</label>
<input type="text" name="prix"  id="prix" required="required"/> 
<br> <br>
<label for="taxe">Taxe :</label>
<input type="text" name="taxe" id="taxe" required="required"/> 
<br> <br> 

<button id="ajouter" type="submit">  Ajouter </button>

<button id="annuler" type="reset">  Annuler </button>

</form>
</div>

</div>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>

</body>
</html>