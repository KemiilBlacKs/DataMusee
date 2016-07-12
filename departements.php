<?php include('list_departements.php');
        include('connexionsql.php');
?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> 
    <title>liste</title>
</head>

<body>
<header class="header2">
        <nav class="navbar navbar-default">
         
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="navbar-header">
             
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
               
                    <li><a href="index.php">Accueil</a></li>
                    <li class="active"><a href="departements.php">Annuaire</a></li>
                 
                </ul>
            </div><!-- /.navbar-collapse -->
            
          </div><!-- /.container-fluid -->
          
        </nav>
        
 <section class="boxselect">
      
    <form  action="departements.php" method="get" class="form-horizontal col-md-12 col-xs-12" id="monForm">

       
        <div class="col-md-5 col-md-offset-4 col-xs-12 col-xs-offset-2">
        
           
                <select class="form-control col-md-6 col-xs-12" name="dep" id="listDep" onChange="this.form.submit()">
                   
                     <?php echo $viewdep; ?>
                </select>
        </div>
         
    </form>
    
   </section>
   
</header>
   
   

    <div>    
        <?php

            $dep = $_REQUEST['dep']; 


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
                    $dep =  $data[$i]['DEP']; 
                                          
                    echo"<div class='liste col-md-5 col-xs-11'><a class='listeBox' data-toggle='modal' href='#myModal" . $id . "'> $musee - $cp $ville </a></div>";
                            

                    
                  } 

        ?>
   
        <!-- modal -->
       <div class="modal fade" id="myModal<?php echo $id; ?>" role="dialog">
            <div class="modal-dialog">
             
        <!-- en-tête containe modal -->
             <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
             
             <div class="modal-body">
             <?php 

              $musee = $_GET['musee'];


                $sql = "SELECT * FROM liste_musees WHERE id = '". $musee ."'";

                $query = $pdo->prepare($sql);
                $query->execute();
                $data = $query->fetchAll();
    // Fin de l'exécution


              for($i=0; $i < sizeof($data); $i++)
                {
                  
                 
                $id = "".$data[$i]['id']."";
                $ville = "".$data[$i]['VILLE']."";  
                $cp = "".$data[$i]['CP'].""; 
                $musee = "".$data[$i]['NOM DU MUSEE']."";
                $dep = substr($cp, 0, 2); 
 
                echo "
                <h4>$id - $musee - $ville - $dep</h4>
                
                <li><a href=\"https://www.google.fr/#q=$musee+$ville\" target=\"_blank\">Plus d'informations</a></li>
                <li><a href=\"https://www.google.fr/search?site=imghp&tbm=isch&source=hp&biw=1517&bih=714&q=$musee+$ville\" target=\"_blank\">Photos</a></li> "; 
                                           
                }
?>
               </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            
            
            
             
               
<!--<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Paris</h3>
                    <ul>
                        <li><a href="musees.php?musee=458">Musée du Louvre</a></li>
                        <li><a href="musees.php?musee=447">Musée d’Orsay</a></li>
                        <li><a href="musees.php?musee=450">Petit Palais</a></li>
                        <li><a href="musees.php?musee=473">Le Centre George Pompidou</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Marseille</h3>
                    <ul>
                        <li><a href="#">Fort Saint-Jean</a></li>
                        <li><a href="#">Mucem Marseille</a></li>
                        <li><a href="#">Musée d'histoire</a></li>
                        <li><a href="#">Centre de la Vieille Charite</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Lyon</h3>
                    <ul>
                        <li><a href="#">Musée Miniature et Cinéma</a></li>
                        <li><a href="#">Beaux-Arts de Lyon</a></li>
                        <li><a href="#">Fresque des Lyonnais</a></li>
                        <li><a href="#">Institut et Musée Lumière</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Toulouse</h3>
                    <ul>
                        <li><a href="#">Musée des Augustins</a></li>
                        <li><a href="#">Musée Saint-Raymond</a></li>
                        <li><a href="#">Musée Georges Labit</a></li>
                        <li><a href="#">Cité de l'espace</a></li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Contact </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Entrez votre mail">
                                <button class="btn bg-gray" type="button">Envoyer <i class="fa fa-long-arrow-right"></i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>-->
            <!--/.row--> 
      <!--  </div>-->
        <!--/.container--> 
  <!--  </div>-->
    <!--/.footer-->
    
   <!-- <div class="footer-bottom">
        <div class="container">
            <p class="pull-left">Copyright © Musees-de-france.fr</p>
        </div>
    </div>-->
    <!--/.footer-bottom--> 
<!--</footer>   -->                
                
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
      document.getElementById('listDep').value = "<?php echo $_GET['dep']; ?>"; /* qui garde le select active de la table choisi */
 </script>
 
</body>
</html>










