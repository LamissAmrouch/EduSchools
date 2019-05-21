<?php 

class FormationManager
{  

public function GetTypeFormationListe($id_ecole)
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
        
        $req = $connexion->prepare("SELECT * from type_formation where id_ecole=$id_ecole");
        $req->execute();
        return $req;
}



public function GetFormationListe($id_type_formation)
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
        
        $req = $connexion->prepare("SELECT * from formation where id_type_form=$id_type_formation");
        $req->execute();
        return $req;
}

}





?>