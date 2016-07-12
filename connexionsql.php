   <?php 
          
    // MySQL Database Settings:
    $username = "adame"; // Votre nom d'utilisateur
    $password = "mg6KDwYLTk"; // Votre mot de passe
    $database = "musee"; // Le nom de la base de donnée
    $hostname = "localhost"; // l'adresse du serveur mysql (le nom de l'hôte) 


 

	// Pilote de connexion à la base et exécution de la requête SQL:
    $pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=UTF8",$username,$password); 
          
?>   