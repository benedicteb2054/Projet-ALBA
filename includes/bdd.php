<?php 
// ce fichier va servir à regrouper tous ce qui est relié à la bdd

require_once("includes/config.php");
try{
		# première étape : je me connecte au serveur
        $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd);
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    
        //$pdo->query("INSERT INTO `reactions` (`reactions_id`, `reactions_nombre`, ``Jeux_Mode`, `Genre_Id`) VALUES (NULL, '3);");
    
        # seconde étape : j'envoie mes requètes
        $pdostat = $pdo->query("SELECT * FROM info");
        $pdostat->setFetchMode(PDO::FETCH_ASSOC);
    
} catch (Exception $exception){
	$messageError = $exception->getMessage();
}
?>