<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musées dans ce département :</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="france_departement_jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    




<?php

include('connexionsql.php');

$dep = $_GET['dep']; 


 $sql = "SELECT * FROM liste_musees WHERE DEP = '". $dep ."' ORDER BY id ASC";

        $query = $pdo->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        // Fin de l'exécution


                for($i=0; $i < sizeof($data); $i++)
                  {
                      
                                          
                    $id = "".$data[$i]['id']."";
                    $cp = "".$data[$i]['CP'].""; 
                    $musee = "".$data[$i]['NOM DU MUSEE']."";
                    $ville = "".$data[$i]['VILLE']."";                   
                    $dep = substr($cp, 0, 2); 
                                          
                    echo"<li><a href=\"musees.php?musee=$id\"> $musee - $cp $ville </a></li>\n";


                  }  


/*
   
$sql = "UPDATE liste_musees SET DEP = '". $dep ."' WHERE id = '". $id ."'";
                                          
      	// Prepare la bdd et execute la requete
		$query = $pdo->prepare($sql);
		$query->execute();
	// Fin de l'exécution
    
    
    
    echo($sql);   
    
*/                                           


?>
             


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <script src="france_departement_jqvmap/jquery.vmap.js" type="text/javascript"></script>
 <script src="france_departement_jqvmap/jquery.vmap.france.js" type="text/javascript"></script>
 <script src="france_departement_jqvmap/jquery.vmap.colorsFrance.js" type="text/javascript"></script>
 <script src="js/main.js" type="text/javascript"></script>
</body>
</html>