<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style2.css">
<meta charset="utf-8">
</head>
<body> 

<?php 
 require_once('../Modele/connexion_db.php');
?>


<div>
    <ul >
    <li class="logo"> <img src="Images/logo.png" /></li>
    <li class="logo"> Ecole Superieure d'informatique </li>
    </ul>
</div>


<div class="divmenu">
<ul class="divmenu">

<?php

require_once('../Modele/FormationManager.php');

    $TypeMng = new FormationManager();
    $type_formations =  $TypeMng->GetTypeFormationListe(1);

while ($resultat = $type_formations->fetch())
  {
echo '<li class="menu">'.$resultat['designation'].'</li>' ;
  }
?>

</ul>
</div>
<br> <br> <br>

  
<div class="slider">
    <figure>
    <img src="Images/diapo1.png" alt="Le logo de notre école" >
    <img src="Images/diapo2.png" alt="Le logo de notre école" >
    <img src="Images/diapo3.jpg" alt="Le logo de notre école" >
    <img src="Images/diapo4.jpg" alt="Le logo de notre école" >
    </figure>
</div>



<br> <br> <br> 



<br> <br> <br>


<table class="table" id="t">
<caption> <h2> Tableau récapitulatif des formations fournies </h2> </caption>
<thead>
<tr id="ligne1">
<th id= "col1" class="formations" >Type_formation</th>
<th>Formation</th>
<th>Volume horaire</th>
<th>Prix HT</th>
<th>Taxe</th>
<th>TTC</th>
</tr>
</thead>
<tbody>

<?php

require_once('../Modele/FormationManager.php');

    $TypeMng = new FormationManager();
    $type_formations = $TypeMng->GetTypeFormationListe(1);

while ($resultat = $type_formations->fetch())
{
   $formations =  $TypeMng->GetFormationListe($resultat['id']);
    echo '<tr>';

  while ($reslt = $formations->fetch())
  {
  
  echo '<td>'.$resultat['designation'].'</td>' ;
  echo '<td>'.$reslt['designation'].'</td>';
  echo '<td>'.$reslt['Volume_horaire'].'</td>';
  echo '<td class="prix">'.$reslt['prix'].'</td>';
  echo '<td class="taxe">'.$reslt['taxe'].'</td>';
  echo '<td class="ttc"> </td>';
  echo '</tr>';
}
}

?>
  
</tbody>
</table>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


 <video src="Video_accueil.mp4" width="50%" preload="auto" controls="autoplay"> 
</video> 
<br>
<br>
<br>

<br>
<br>
<br>

<br> <br> <br>

<div class="footer">

<a class="contact" href="mailto:fl_amrouch@esi.dz">  Contact   </a>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>

</body>
</html>
