<?php  
require_once('models/modelStudents.php');
require_once('models/modelCourses.php');

function addNewStudents($ine, $firstName, $lastName, $address, $city, $mail, $password){
	$resultAddStudents = addStudents($ine, $firstName, $lastName, $address, $city, $mail, $password);
	if (!$resultAddStudents) {
		$message = " Un problème est survenu, l'enregistrement n'a pas été effectué";
	}
	else{
		echo "<script type = \"text/javascript\">alert('compte bien crée')</script>";
	}
}

function addOneStudent(){

	if(isset($_POST['enregistrer'])){
		if(!empty($_POST['ine']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['confirm_password']))
		{
			if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
			{
				$message = "Faites rentrer une adresse email valide";
			}
			elseif ($_POST['password']!= $_POST['confirm_password']) {
				$message = "Les deux mots de passe ne correspondent pas";
			}
			else{
				$data = getStudentsWithMail($_POST['mail']);

				if($data)
				{
				$message = "Un compte existe déjà avec cette adresse email";
				}
				else{
					$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
					addNewStudents($_POST['ine'], $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['city'], $_POST['mail'], $password);
				}
			}

		}
	else{
		$message = "Tous les champs sont requis!";
	}
}
require_once('views/viewAddStudents.php');
require_once('views/errors.php');
}

function connexion(){
	if (isset($_POST['connexion'])) {
		
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		$data = getStudentsWithMail($mail);
		if (!$data) {
			$message = "Veuillez rentrer une adresse email valide";
		}else{
			$passwordIsOk = password_verify($password, $data['password']);
			if($passwordIsOk){
				session_start();
				$_SESSION['studentId'] = $data['id'];
				$_SESSION['studentIne'] = $data['ine'];
				$_SESSION['studentFirstName'] = $data['firstName'];
				$_SESSION['city'] = $data['city'];
				$_SESSION['password'] = $password;
				$_SESSION['mail'] = $mail;

				$resultGetCourses = getCourses();
				//echo "vous êtes connectés en tant que : ".$_SESSION['studentFirstName'];
				$nb_courses = $resultGetCourses->rowCount();
				require_once('views/viewAllCoursesStudents.php');
			}else{
				$message = "Veuillez rentrer un mot de passe valide";
			}
		}
	}

	if(!isset($_SESSION['studentId'])){
		require_once('views/viewConnexion.php');
	}
	require_once('views/errors.php');
}

function disconnect(){
	session_start();
	if (isset($_SESSION['studentId'])) {
		session_unset();
		session_destroy();
		$message = "Vous êtes bien déconnectés";
	}else{
		$message ="Vous n'êtes pas connectés";
	}
	require_once('views/errors.php');
}