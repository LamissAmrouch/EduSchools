<?php

 $serveur = 'localhost' ; 
 $login = 'root'; 
 $pass= '';  

 try 
 {  
    $connexion = new PDO('mysql:host=localhost;dbname=projet_web',$login,$pass);
     //echo "Connexion au data base tdw réussie ";
 }  
catch (PDOException $e)
{
     //echo "Echec de la connexion ".$e->getMessage();
} 

?> 