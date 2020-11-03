<?php
require_once('models/modelInscriptions.php');
require_once('controllers/controllerCourses.php');
session_start();

function addCourseToStudent($studentId, $courseId){
	if(isset($_SESSION['studentId'])){

		$result = getCoursesStudents($studentId, $courseId);

		$nb_courses = $result->rowCount();

		if($nb_courses!=0){
			$message = "Vous êtes déjà inscris à ce cours ";
			getAllCoursesStudents();
		}
		else{
			$result = addCourseForStudent($studentId, $courseId);

		if(!$result){
			$message = "Le cours choisi n'a as été attribué!";
			getAllCoursesStudents();

		}else{
			$message = "Vous êtes bien inscris à ce cours";
			getAllMyCourses();
		}

		}
		require('views/errors.php');
		
	}else{
		$message = "Vous n'êtes pas connecté pour s'inscrire à ce cours";
	}
}

function getAllMyCourses(){
	// if there is no session, so we use a session start.
	if(!isset($_SESSION)){
		session_start();
	}
	// if there is student who are connect
	if(isset($_SESSION['studentId'])){

		$resultGetCourses = getMyCourses($_SESSION['studentId']);
		if(!$resultGetCourses){
			$message="Problème de récuperation";
		}else{
			$nb_courses=$resultGetCourses->rowCount();
			if ($nb_courses == 0) {
				$message = "Vous n'êtes inscris à aucun cours";
				getAllMyCourses();
			}else{
				require_once('views/viewCoursesForStudents.php');
			}
		}
		$resultGetCourses->closeCursor();
	}
	require_once("views/errors.php");
}













