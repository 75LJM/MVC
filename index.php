<?php 


define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
if ($_GET['action']) {

// explode permet de séparer les paramètre à l'aide de slash
$params = explode("/",$_GET['action']);

// Séparation des patramètres dans l'url
// echo "Parametre 1 = ".$param[0];
// echo "<p></p>";
// echo "Parametre 2 = ".$param[1];
// echo "<p></p>";
// echo "Parametre 3 = ".$param[2];
// echo "<p></p>";

if($params[0]!= ""){
	$controller = $params[0];

	$action = "";

	if(isset($params[1])) {$action = $params[1];}

	require_once(ROOT.'controllers/'.$controller.'.php');

	if(function_exists($action)){
		if(isset($params[2])&& isset($params[3])){
			$action($params[2],$params[3]);
		}elseif (isset($params[2])) {

			$action($params[2]);
		}else
		{
			$action();
		}
	}else{
		echo "page par défaut";
	}
 
}
}else{
	require_once('controllers/controllerCourses.php');
	getAllCourses();

}