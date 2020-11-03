<?php 

require_once('models/modelCourses.php');
function addOneCourse(){
	if(isset($_POST['insert'])){
		if(!empty($_POST['courseCode']) && !empty($_POST['courseTitle']) && !empty($_POST['courseLanguage']))
		{
		addCourse($_POST['courseCode'], $_POST['courseTitle'],$_POST['courseLanguage']);
		}else{
			echo "Tous les champs ne sont pas remplis !";
		}
	}
	require_once('views/course_view.php');
}

function getAllCourses(){

	$resultGetCourses = getCourses();
	if(!$resultGetCourses){
		$message = " La récuperation des cours n'a pas abouti";
	}else{
		$nb_courses = $resultGetCourses->rowCount();
		if($nb_courses == 0){
			$message = "Il n'y a aucun cours";
			addOneCourse();
		}else{
			require_once('views/viewAllCourses.php');
		}
	}
	// libère la connexion du serveur
	$resultGetCourses->closeCursor();
}

function getUpdateCourse($id){
	$data = getCourse($id);
	if(!$data){
		$message = "Aucun cours ! ";
	}else{
		require_once('views/viewUpdateCourse.php');
	}
	if(isset($_POST['update'])){
		if(!empty($_POST['courseCode']) && !empty($_POST['courseTitle']) && !empty($_POST['courseLanguage']))
		{
			$resultUpdate = updateCourse($id);

			if(!$resultUpdate){
				$message = "Un problème est survenu, les mises à jour n'ont pas été effectuées!";
				header('Location:controllerCourses/getAllCourses');
			}else{
				$message = "Les mises à jour ont été bien effectuées";
			}
		}else{
			$message = "Tous les champs sont requis";
		}
		require_once('views/errors.php');
	}
}
function getDeleteCourse($id){
	$data = getCourse($id);
	if (!$data) {
		$message = "Aucun cours à supprimer";
	}
	else{
		require_once('views/viewDeleteCourse.php');
	}
	if (isset($_POST['delete'])) {
		$resultDelete = deleteCourse($id);
		if(!$resultDelete){
			$message = "Un problème est survenu lors de la suppression";
		}
		else{
			$message = "Le cours a bien été supprimé";
		}
	}
	require_once('views/errors.php');
}
function getAllCoursesStudents(){

	$resultGetCourses = getCourses();
	if(!$resultGetCourses){
		$message = "La récuperation des cours n'a pas aboutie !";
	} else{
		$nb_courses = $resultGetCourses->rowCount();
		if($nb_courses == 0){
			$message = "Il n'y a aucun cours pour le moment!";
			
		}else{
			require_once('views/viewAllCoursesStudents.php');
		}
	}

	$resultGetCourses->closeCursor();
}