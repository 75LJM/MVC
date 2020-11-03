<?php
require_once('models/model.php');

function addCourseForStudent($studentId, $courseId){
	$bdd = connexionBDD();

	$requete = $bdd->prepare('INSERT INTO inscription(studentsId,coursId, inscription_date) VALUES (:studentId, :courseId, :inscriptionDate)');

	$requete->bindvalue(':studentId', $studentId);
	$requete->bindvalue(':courseId', $courseId);
	$requete->bindvalue(':inscriptionDate', date('Y-m-d'));

	$result = $requete->execute();
	return $result;
}


function getMyCourses($studentId){
	$bdd = connexionBDD();

	// joint between table course and table register
	$stmtSelect = "SELECT courses.id, courses.courseCode, courses.courseTitle, courses.courseLanguage, inscription.id, inscription.studentsId,inscription.coursId FROM courses, inscription WHERE inscription.studentsId = '$studentId' && inscription.coursId = courses.id";
	$resultatSelect = $bdd->query($stmtSelect);
	return $resultatSelect;
}

function getCoursesStudents($studentId, $coursId){
	$bdd = connexionBDD();
	$requete = "SELECT * FROM inscription WHERE studentsId='$studentId' AND coursId = '$coursId'";
	$resultRequest = $bdd->query($requete);
	return $resultRequest;

}








