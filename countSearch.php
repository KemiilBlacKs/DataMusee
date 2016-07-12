<?php

function countSearch()
{
    global $pdo;
	if ($keywords) 
	{
		$sql1 = "SELECT * FROM liste_musees WHERE VILLE LIKE '$keywords%' OR NOMDEP LIKE '$keywords%' OR NOMREG LIKE '$keywords%' LIMIT 10";
	    $query = $pdo->prepare($sql1);
    	$query->execute();
    	$data1 = $query->fetchAll();
        
        $sql2 = "SELECT * FROM liste_musees WHERE DEP = '$keywords%' OR CP LIKE '$keywords%' OR `NOM DU MUSEE` LIKE '%$keywords%'";
	    $query = $pdo->prepare($sql2);
    	$query->execute();
    	$data2 = $query->fetchAll();
        
        $count1 = sizeof($data1);
        $count2 = sizeof($data2);
        
        $resultCount = $count1 + $count2;
        echo $resultCount;
	}
}

?>