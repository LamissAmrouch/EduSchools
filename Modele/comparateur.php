<?php
if(isset($_POST["type"])){
    $type = $_POST["type"];
  
 require_once('../Modele/connexion_db.php');

}

    $query = "SELECT * FROM ecole WHERE id_categorie=$type";
    $result = $connexion->prepare($query);
    $result->execute();
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $row_res = $result->fetchAll();
    echo '<option selected> Choisir Ecole </option>';
      foreach($row_res as $row){
      echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
    }
?>
