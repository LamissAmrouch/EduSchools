<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
</head>

<body> 


<?php
require_once('../Modele/connexion_db.php');
require_once('../Modele/EcoleManager.php');

    $ecoleMng = new EcoleManager();
    $informations = $ecoleMng->GetAllEcoleInformation();
    
echo ' 
<table class="table" id="t">
<thead>
<tr >
<th>Nom</th>
<th>Commune</th>
<th>Wilaya</th>
<th>Téléphone</th>
<th>Fax</th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>';
$i = 0; 
while ($resultat = $informations->fetch())
{
  $i = $i + 1 ;
  $id = $resultat['id'];
  echo '<tr>';
  echo '<td>'.$resultat['nom'].'</td>';  
  echo '<td >'.$resultat['commune'].'</td>';
  echo '<td >'.$resultat['wilaya'].'</td>';
  echo '<td >'.$resultat['telephone'].'</td>';
  echo '<td >'.$resultat['fax'].'</td>';
  echo '<td> <button class="btn_modifier" id="'.$i.'"> Modifier </button> 
  </td>
  
  <td> 
  <form action ="supprimer_ecole.php" method="post">
  <input type="hidden" name="id_ecole" value="'.$id.'" />
  <button class="btn_supprimer" id="'.$id.'" type="submit" > Supprimer 
  </button>

  </form>
  </td>';
    echo '</tr>';
  }
echo '</tbody>';
echo '</table>';
?>


<br> <br> <br> <br> 

<div id="div_modifier">
<h3> Modifier les informations d'une école </h3>
<form action ="modifier_ecole.php" method="post">
<label for="nom">Nom :</label>
<input type="text" name="nom" id="nomm"/> 
<br> <br>
<label for="commune">Commune :</label>
<input type="text" name="commune" id="communee"/> 
<br> <br>
<label for="wilaya">Wilaya:</label>
<input type="text" name="wilaya" id="wilayaa"/> 
<br> <br>
<label for="tel">Télephone:</label>
<input type="text" name="tel"  id="tell"/> 
<br> <br>
<label for="fax">Fax :</label>
<input type="text" name="fax"  id="faxx"/> 
<br> <br>
<label for="des[]">Désactiver :</label>
<input type="checkbox" name="des[]" value="1" id="enlignee">
<br> <br>
<button id="valider" type="submit">  Valider </button>
</form>
</div>

<br> <br> <br> 

<div id="novtype" class="divs">
<h3> Ajouter une nouvelle école </h3>
<form action ="ajout_ecole.php" method="post">
<label for="nom">Nom :</label>
<input type="text" name="nom" id="type_forma" required="required"/> 
<br> <br>

<?php
require_once('../Modele/connexion_db.php');
$query = "SELECT * FROM categorie";
$result = $connexion->query($query);
                  ?>

 <label for="categorie">Catégorie : </label>
    <select name="categorie" id="categorie" required="required">
                 <option selected></option>
                        <?php
                                    foreach ($result as $row){
                                      echo '<option value="'.$row['id'].'">'.$row["nom"].'</option>';
                                    }
                               ?>
                            </select>
<br> <br>
<label for="commune">Commune :</label>
<input type="text" name="commune" id="VolumeH" required="required"/> 
<br> <br>
<label for="wilaya">Wilaya :</label>
<input type="text" name="wilaya"  id="prix" required="required"/> 
<br> <br>
<label for="adresse">Adresse :</label>
<input type="text" name="adresse" id="taxe" required="required"/> 
<br> <br> 
<label for="telephone">Téléphone :</label>
<input type="text" name="telephone" id="telephone" required="required"/> 
<br> <br> 
<label for="fax">Fax :</label>
<input type="text" name="fax" id="telephone" required="required"/> 
<br> <br> 

<button id="ajouter" type="submit">  Ajouter </button>
</form>
</div>

<br> <br> <br>
<?php 
    
echo ' 
<h2> Gestion des commentaires  </h2>
<table class="table" id="t">
<thead>
<tr>
<th>Ecole</th>
<th>Utilisateur</th>
<th>Commentaire</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>';

 $sql = "select * from commentaire";

 foreach ($connexion->query($sql) as $row) {
 
 $id_ecole = $row['id_ecole'];
 $id=$row['id'];
 $sql = $connexion->query("select nom from ecole where id='$id_ecole'");
 $result = $sql->fetch();
 $nom = $result['nom'];
echo '<tr>';
  echo '<td>'.$result['nom'].'</td>'; 
  echo '<td>'.$row['nom_user'].'</td>';
  echo '<td>'.$row['cmt'].'</td>'; 
  echo '<td> 
  <form action ="supprimer_commentaire.php" method="post">
  <input type="hidden" name="id_cmt" value="'.$id.'" />
  <button class="btn_supprimer" id="'.$id.'" type="submit" > Supprimer 
  </button>

  </form>
  </td>'; 
  echo '</tr>';
 
}

echo '</tbody>
</table>';
?>



<br> <br> <br>
<?php 
    
echo ' 
<h2> Gestion des utilisateurs </h2>
<table class="table" id="t">
<thead>
<tr>
<th>Nom </th>
<th>Prénom</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>';

$sql = "select * from utilisateur where nom!='Admin' and nom!='sous-admin' ";

 foreach ($connexion->query($sql) as $row) {
 
 $nom = $row['nom'];
 $prenom = $row['prenom'];
 $id=$row['id'];

echo '<tr>';
  echo '<td>'.$row['nom'].'</td>'; 
  echo '<td>'.$row['prenom'].'</td>';

  echo '<td> 
  <form action ="supprimer_user.php" method="post">
  <input type="hidden" name="id_user" value="'.$id.'" />
  <button class="btn_supprimer" id="'.$id.'" type="submit" > Supprimer 
  </button>

  </form>
  </td>'; 
  echo '</tr>';
 
}

echo '</tbody>
</table>';
?>























<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>

</body>
</html>