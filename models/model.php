<?php 

function connexionBdd(){
	$host = "localhost";
	$db_name = "mvc";
	$username ="root";
	$password ="";
	$connexion = False;

	if(!$connexion){
		try{
			$bdd = new PDO ('mysql:host='.$host.';dbname='.$db_name.'', $username, $password);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $bdd;
		}catch(PDOException $exception){
			echo "Erreur de connexion : ".$exception->getMessage();
		}
	}
}
