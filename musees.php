<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du musée</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    

<?php

include('connexionsql.php');

$musee = $_GET['musee'];


 $sql = "SELECT * FROM liste_musees WHERE id = '". $musee ."'";

    $query = $pdo->prepare($sql);
    $query->execute();
    $data = $query->fetchAll();
    // Fin de l'exécution


              for($i=0; $i < sizeof($data); $i++)
                {
                  
                 
                $ville = "".$data[$i]['VILLE']."";  
                $cp = "".$data[$i]['CP'].""; 
                $musee = "".$data[$i]['NOM DU MUSEE']."";
                $adresse = "".$data[$i]['ADR']."";
                $siteweb = "".$data[$i]['SITWEB']."";
                $fermann = "".$data[$i]['FERMETURE ANNUELLE'].""; 
                $periouv = "".$data[$i]['PERIODE OUVERTURE']."";                  
                  
                
                echo"<li><h1>$musee</h1><br>
                         Adresse : $adresse - $cp $ville<br>
                         Site officiel : $siteweb<br>
                         Période d'ouverture : $periouv<br>
                         Fermeture : $fermann<br><br>
                         
                         
                         <a href=\"https://www.google.fr/#q=$musee+$ville\" target=\"_blank\">+ d'infos</a><br>
                         
                         <a href=\"https://www.google.fr/search?site=imghp&tbm=isch&source=hp&biw=1517&bih=714&q=$musee+$ville\" target=\"_blank\">+ de photos</a></li>\n";   
                    
                                           
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


</body>
</html>