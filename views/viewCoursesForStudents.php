<?php if(!isset($_SESSION)) session_start(); ?>

<?php require('header.html'); 

if(isset($message)) echo $message; 

?>

<h2> Liste de tous les cours</h2>
<h3> Il y'a  <?=$nb_courses?> cours </h3>

<table border="1" class="mx-auto">
	<tr>
		<th>Code du cours</th>
		<th>Intitulé du cours</th>
		<th>Langue d'enseignement</th>
		<th>DésinscrIption</th>
		
	</tr>

<?php
$ligne = $resultGetCourses->fetchAll(PDO::FETCH_NUM);
echo "<tr>";
foreach($ligne as $valeur){
	echo "<td>$valeur[1]</td>";
	echo "<td>$valeur[2]</td>";
	echo "<td>$valeur[3]</td>";


?>

<td><a href="controllerInscriptions/toUnsubscribeStudent/<?=$_SESSION['studentId']?>/<?=$valeur[0]?>">Se désinscrire</a></td>


<?php

	echo "<tr>";
}
echo "</table></center>";

require('footer.php');


	

