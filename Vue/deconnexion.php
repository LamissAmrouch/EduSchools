<?php 
 require_once('../Modele/connexion_db.php');
session_start();

session_unset();
session_destroy();

header("location: ../index.php");





 ?>