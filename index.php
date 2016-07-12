<?php 
include('list_departements.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musées de France - l'annuaire référence</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="france_departement_jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar-fixed-top navbar-default navbar-custom">
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
                <div class="collapse navbar-collapse nav-color" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Accueil</a></li>
                        <li><a href="departements.php">Annuaire</a></li>
                    </ul>
                    </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="header" class="text-center">
            <div class="container">
                <h1 class="text-intro">Annuaire des musées de France</h1>
                <p class="text-intro">Ce site est un annuaire de tous les musées de France répertoriés par département.</p>
                <div class="col-sm-4 col-sm-offset-4 col-lg-4 col-lg-offset-4">
                    <form class="navbar-form navbar-left" role="search" id="myForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tapez votre recherche" id="valeur">
                        </div>
                        <button type="submit" class="btn btn-default">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>

    </header>
<div id="info"></div>
<div>
    <div id="francemap"></div>
</div>
      
<!--    <form action="departements.php" method="get" class="form-horizontal" id="monForm">


        <div class="form-group">
            <label for="departement" class="col-sm-2 control-label">Departement :</label>
            <div class="col-sm-6">
                <select class="form-control" name="dep" onChange="this.form.submit()">
                     <?/*php echo $viewdep;*/ ?>
                </select>
            </div> 
        </div> 

 
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Valider</button>
                <button type="reset" class="btn btn-danger">Effacer</button>
            </div>
        </div> 
        

    </form> -->          
             
             
<footer>
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
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left">Copyright © </p>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>                                                                                                                            

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <script src="france_departement_jqvmap/jquery.vmap.js" type="text/javascript"></script>
 <script src="france_departement_jqvmap/jquery.vmap.france.js" type="text/javascript"></script>
 <script src="france_departement_jqvmap/jquery.vmap.colorsFrance.js" type="text/javascript"></script>
 <script src="js/main.js" type="text/javascript"></script>
 <script>
    $(document).on('submit', '#myForm', function()
 {
  
 
  var valeur = $("#valeur").val();
  var data = $(this).serialize(); 
   
  
  
  $.ajax({
   
  type : 'get', 
  url  : 'search.php?search='+valeur,
  data : data, 
  success :  function(data)
       {
           
           
          $("#info").html(data);
           console.log(data);
           
       
       }
  }); 
  return false;
 });
  
    

 
  
  
  

    
    
    
</script>
 
</body>
</html> 
 