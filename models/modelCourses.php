<?php 

require_once('models/model.php');
function addCourse($courseCode, $courseTitle, $courseLanguage){
	$bdd = connexionBDD();
	$requete = $bdd->prepare('INSERT INTO courses(courseCode, courseTitle, courseLanguage) VALUES (:courseCode, :courseTitle, :courseLanguage)');

	$requete->bindvalue(':courseCode', $courseCode);
	$requete->bindvalue(':courseTitle', $courseTitle);
	$requete->bindvalue(':courseLanguage', $courseLanguage);

	$result = $requete->execute();
	return $result;
}

function getCourses(){
	$bdd = connexionBDD();
	$resultGetCourses= $bdd->prepare("SELECT * FROM courses ORDER BY id ASC");
	$resultGetCourses->execute();
	return $resultGetCourses;
}

function getCourse($id){
	$bdd = connexionBDD();
	$result = $bdd->prepare("SELECT * FROM courses WHERE id = :courseId");
	$result->bindvalue(":courseId", $id);
	$result->execute();
	$data = $result->fetch(PDO::FETCH_ASSOC);
	return $data;
}

function updateCourse($id){
	$bdd = connexionBDD();
	$stmtUpdate = $bdd->prepare("UPDATE courses SET courseCode = :courseCode, courseTitle=:courseTitle, courseLanguage = :courseLanguage WHERE id= :id");
	$stmtUpdate->bindvalue(':courseCode', $_POST['courseCode']);
	$stmtUpdate->bindvalue(':courseTitle', $_POST['courseTitle']);
	$stmtUpdate->bindvalue(':courseLanguage', $_POST['courseLanguage']);
	$stmtUpdate->bindvalue(':id', $_POST['id']);

	$resultUpdate = $stmtUpdate->execute();
	return $resultUpdate;
}

function deleteCourse($id){
	$bdd = connexionBDD();
	$deleteStmt = $bdd->prepare("DELETE FROM courses WHERE id = :id");
	$deleteStmt->bindvalue(':id', $id);
	$result = $deleteStmt->execute();
	return $result;

}