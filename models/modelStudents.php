<?php  

require_once('models/model.php');

function addStudents($ine, $firstName, $lastName, $address, $city, $mail, $password){
	$bdd = connexionBDD();
	$stmtStudents = $bdd->prepare('INSERT INTO students (ine,firstName,lastName,address, city, mail,password)VALUES(:ine, :firstName, :lastName, :address, :city, :mail, :password)');
	$stmtStudents->bindvalue(':ine', $ine);
	$stmtStudents->bindvalue(':firstName', $firstName);
	$stmtStudents->bindvalue(':lastName', $lastName);
	$stmtStudents->bindvalue(':address', $address);
	$stmtStudents->bindvalue(':city', $city);
	$stmtStudents->bindvalue(':mail', $mail);
	$stmtStudents->bindvalue(':password', $password);
	$resultAddStudents = $stmtStudents->execute();
	return $resultAddStudents;
}

function getStudentsWithMail($mail){
	$bdd=connexionBDD();
	$requete = $bdd->prepare('SELECT * FROM students WHERE mail = :mail');
	$requete->bindvalue(':mail', $mail);
	$requete->execute();
	$data = $requete->fetch(PDO::FETCH_ASSOC);
	return $data;
}