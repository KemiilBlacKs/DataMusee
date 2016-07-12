<?php
require_once('connexionsql.php');

$search = $_REQUEST['search'];
$count = 0;
	
function search($keywords)
{
	global $pdo;
	if (is_string($keywords) && strlen($keywords) > 0)
	{
		$sql = "SELECT * FROM liste_musees WHERE DEP = '$keywords%' OR CP LIKE '$keywords%' OR `NOM DU MUSEE` LIKE '%$keywords%' OR VILLE LIKE '$keywords%' OR NOMDEP LIKE '$keywords%' OR NOMREG LIKE '$keywords%'";
	
	    $query = $pdo->prepare($sql);
    	$query->execute();
    	$data = $query->fetchAll();
        $result = sizeof($data);
        echo "<h3 class=\"container\">$result résultat(s) trouvé(s)</h3>";
	    include ('searchResult.php');
    } else
	{
        $content = "Type de données non valide. Réessayer !";
        $result =  0;
	}
    //$searchResult['nbResult'] = $result;
    //$searchResult['content'] = $content;
    //return $searchResult;
}
search($search);
//$searchMusee = search($search);
//print_r($searchMusee);
?>