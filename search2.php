<?php
require_once('connexionsql.php');

$search = $_REQUEST['search'];
$searchToUpper = strtoupper($search);

	
function search($keywords)
{
	global $pdo;
	if (is_string($keywords))
	{
		$sql = "SELECT DEP, CP, `NOM DU MUSEE` FROM liste_musees WHERE DEP = '$keywords%' OR CP LIKE '$keywords%' OR `NOM DU MUSEE` LIKE '%$keywords%'";
	
	    $query = $pdo->prepare($sql);
    	$query->execute();
    	$data = $query->fetchAll();
	    include ('searchResult.php');
	} else
	{
        echo "Type de données non valide. Réessayer !";
        return false;
	}
}

function searchToUpper($keywords)
{
	global $pdo;
	if (is_string($keywords)) 
	{
		$sql = "SELECT * FROM liste_musees WHERE VILLE LIKE '$keywords%' OR NOMDEP LIKE '$keywords%' OR NOMREG LIKE '$keywords%' LIMIT 10";    
        
	    $query = $pdo->prepare($sql);
    	$query->execute();
    	$data = $query->fetchAll();
	    include ('searchResult.php');
	} else
	{
		echo "Type de données non valide. Réessayer !";
		return false;
	}
}


search($search);	
searchToUpper($searchToUpper);
?>