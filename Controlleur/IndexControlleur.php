<?php 
	
	session_start();
	require('../Modele/FormationManager.php');
	require('../Modele/EcoleManager.php');
    require('../Modele/CategorieManager.php'); 

    $formation = new FormationManager();
	$formations = $formation->GetFormations();
	
	$ecole = new EcoleManager();
    $ecoles = $ecole->GetAllEcoleListe();
     
	$cpt = 0;

	while ($resultat2 = $formations->fetch())
	{
		$tab_nom[$cpt] = $resultat2['nom_formation'];
		$tab_type[$cpt] = $resultat2['type'];
		$cpt++;
    } 

    require('../vue/principale.php');
?>