
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
?>

<?php 
 require_once('header.php');
?>

<br> <br>
<?php 
 require_once('container.php');
?>


<br>
<br>
<br>



<h2> Tableau des écoles </h2> 
<br> <br>

<div id="filtre">
<input type='text' placeholder="Nom"  id="nom" value="" />
<input type="button" onclick="bar(0)" value="Filtrer" />
<input type='text' placeholder="Commune" id="commune" value="" />
<input type="button" onclick="bar2(4)" value="Filtrer" />
<input type='text' placeholder="Wilaya" id="wilaya" value="" />
<input type="button" onclick="bar3(3)" value="Filtrer" />
</div>
<br> <br>

<?php 
require_once('../Modele/EcoleManager.php');

    $ecoleMng = new EcoleManager();
    $informations = $ecoleMng->GetEcoleInfomation(3);
    
echo ' 
<table class="table" id="t">
<thead>
<tr >
<th class="formations" >Nom</th>
<th>Categorie</th>
<th>Wilaya</th>
<th>Commune</th>
<th>Adresse</th>
<th>Telephone</th>
<th>Fax</th>
</tr>
</thead>
<tbody>';

 while ($resultat = $informations->fetch())
  {
echo '<tr class="tt">';

  echo '<td>'.$resultat['nom'].'</td>'; 
  echo '<td> Secondaire </td>';
  echo '<td >'.$resultat['wilaya'].'</td>';
  echo '<td >'.$resultat['commune'].'</td>';
  echo '<td >'.$resultat['adresse'].'</td>';
  echo '<td >'.$resultat['telephone'].'</td>';
  echo '<td >'.$resultat['fax'].'</td>';
  echo '</tr>';
 
}

echo '</tbody>
</table>';
?>

<br>
<br>
<br>
<br>
<br>

<div id="bare">
  <ul>
  <li class="libare"><img src="Images/gallery-img1.jpg" width="24%" /></li>
  <li class="libare"><img src="Images/gallery-img2.jpg" width="24%"/></li>
  <li class="libare"><img src="Images/gallery-img3.jpg" width="24%"/></li>
  <li class="libare"><img src="Images/gallery-img4.jpg" width="24%"/></li>
  </ul>
</div>

<br> <br> <br>
<?php 
 require_once('footer.php');
?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>

<script type='text/javascript'>
function bar(col){
reg=new RegExp(document.getElementById('nom').value)
$("tr.tt").each(function(){
  this.style.display=($(this).children('td').eq(col).text().match(reg))?'':'none';
  })
} 

function bar2(col){
reg=new RegExp(document.getElementById('commune').value)
$("tr.tt").each(function(){
  this.style.display=($(this).children('td').eq(col).text().match(reg))?'':'none';
  })
}

function bar3(col){
reg=new RegExp(document.getElementById('wilaya').value)
$("tr.tt").each(function(){
  this.style.display=($(this).children('td').eq(col).text().match(reg))?'':'none';
  })
}

</script> 
 
</body>
</html>
