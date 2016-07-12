<?php

include('connexionsql.php');

            $sql = "SELECT   COUNT(DEP) AS nb, DEP, NOMDEP
                    FROM     liste_musees 
                    GROUP BY DEP
                    ORDER BY DEP ASC";

            $query = $pdo->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();
            // Fin de l'exécution


                for($i=0; $i < sizeof($data); $i++)
                    {

                                          
                        $nb = "".$data[$i]['nb']."";                                
                        $dep = "".$data[$i]['DEP']."";  
                        $nomdep = "".$data[$i]['NOMDEP']."";  
                    
/*                        

                        echo"<li><a href=\"departements.php?dep=$dep\">Département : $nomdep ($dep) ($nb musées)</a></li>\n";

*/
                     
             
                    	$viewdep .= "<option value=\"$dep\">".$dep."  ".$nomdep." - ".$nb." musées</option>\n";      
                    }   
 


/*
 $sql = "SELECT * FROM liste_musees ORDER BY id ASC";

            $query = $pdo->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();
            // Fin de l'exécution


                for($i=0; $i < sizeof($data); $i++)
                    {
                       
                $id = "".$data[$i]['id']."";
                $cp = "".$data[$i]['CP'].""; 
                $musee = "".$data[$i]['NOM DU MUSEE']."";  
                $dep = substr($cp, 0, 2); 
                                          
                    echo"<li>$id - $musee - $cp - $dep</li>\n";

*/                                      
                                          
                                      



/*
Set column DEP in db
UPDATE `liste_musees` SET DEP = left(CP, 2)
*/

?>