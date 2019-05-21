

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>

<table align="center" border="1" class="table table-striped table-bordered table-sm" id="table">
  <thead>
      <tr>
        <th>Type Formation</th>
        <th>Formation</th>
        <th>Volume horaire</th>
        <th>Prix HT</th>
        <th>taxe</th>
        <th>TTC</th>
      </tr>
    </thead>
 
<tbody>

<?php
if(isset($_POST["type"])){
    $type = $_POST["type"]; 
   

 require_once('../Modele/connexion_db.php');

}
   

require_once('../Modele/FormationManager.php');

    $TypeMng = new FormationManager();
    $type_formations = $TypeMng->GetTypeFormationListe($type);


    $query1 = "SELECT * FROM commentaire WHERE id_ecole=$type";
    $result1 = $connexion->prepare($query1);
    $result1->execute();
    $result1->setFetchMode(PDO::FETCH_ASSOC);
    $row_res1 = $result1->fetchAll();
 

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

 echo '<br> <br> <br>';
 echo '<table class="table table-dark">';
 echo '<thead class="">
            <tr>

            <th scope="col">Utilisateur</th>
            <th scope="col">commentaire</th>

            </tr>
            </thead>' ;
      foreach ($row_res1 as $row) {
                    echo '
            
            <tbody>

            <tr>
            <td>' .$row["nom_user"] . '</td>
            <td>' .$row["cmt"] . '</td>


             </tr>
             </tbody>
             ';

        }
                echo '</table>';






?>

</tbody>
</table>
