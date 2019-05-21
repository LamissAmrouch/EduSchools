<?php 


class CategorieManager
{  


public function GetCategorieListe()
{   
 $serveur = 'localhost' ; 
 $login = 'root'; 
 $pass= '';  

 try 
 {  
    $connexion = new PDO('mysql:host=localhost;dbname=projet_web',$login,$pass);
 }  
catch (PDOException $e)
 {  } 
        
        $req = $connexion->prepare("SELECT * from categorie");
        $req->execute();
        return $req;
    }

}





?>