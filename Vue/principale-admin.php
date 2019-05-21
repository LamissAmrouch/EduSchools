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

<?php 
 require_once('container-admin.php');
?>


<br>
<br>
<br>
<?php 
 require_once('comparateur-ecole.php');
?>


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

</body>
</html>
