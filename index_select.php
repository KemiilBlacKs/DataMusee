<?php 
include('list_departements.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musées de France - l'annuaire</title> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <form action="departements.php" method="get" class="form-horizontal" id="monForm">


        <div class="form-group">
            <label for="departement" class="col-sm-2 control-label">Departement :</label>
            <div class="col-sm-6">
                <select class="form-control" name="dep" onChange="this.form.submit()">
                     <?php echo $viewdep; ?>
                </select>
            </div> 
        </div> 


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Valider</button>
                <button type="reset" class="btn btn-danger">Effacer</button>
            </div>
        </div>

    </form> 
         
                                                                  
<script src="js/bootstrap.min.js"></script>                                                              
</body>
</html>
 