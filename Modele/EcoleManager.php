<?php 


class EcoleManager
{   
 
public function GetEcoleInfomation($id)
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

 

        require_once('connexion_db.php');
        $req = $connexion->prepare("SELECT * from ecole where id_categorie=$id and enligne=0");
        $req->execute();
        return $req;
    }


public function GetEcoleListe($id_categorie)
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

require_once('connexion_db.php');
        $req = $connexion->prepare("SELECT nom from ecole where id_categorie=$id_categorie");
        $req->execute();
        return $req;
     }

public function GetAllEcoleListe()
{ 
$serveur = 'localhost' ; 
$login = 'root'; 
$pass= '';  

try {  
$connexion = new PDO('mysql:host=localhost;dbname=projet_web',$login,$pass); }  
catch (PDOException $e)
 {  } 

        $req = $connexion->prepare("SELECT nom from ecole");
        $req->execute();
        return $req;
}

public function GetAllEcoleInformation()
    { 
$serveur = 'localhost' ; 
$login = 'root'; 
$pass= '';  

try {  
$connexion = new PDO('mysql:host=localhost;dbname=projet_web',$login,$pass); }  
catch (PDOException $e)
 {  } 

        $req = $connexion->prepare("SELECT * from ecole");
        $req->execute();
        return $req;
}














}

?>