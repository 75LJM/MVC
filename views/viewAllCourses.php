
<?php require('header.html'); 

if(isset($message)) echo $message; ?>

<h2> Liste de tous les cours</h2>
<h3> Il y'a  <?=$nb_courses?> cours </h3>
<center>
<table border="1">
	<tr>
		<th>Code du cours</th>
		<th>Intitulé du cours</th>
		<th>Langue d'enseignement</th>
		<th>Modification</th>
		<th>Suppression</th>
	</tr>

<?php
$ligne = $resultGetCourses->fetchAll(PDO::FETCH_NUM);
echo "<tr>";
foreach($ligne as $valeur){
	echo "<td>$valeur[1]</td>";
	echo "<td>$valeur[2]</td>";
	echo "<td>$valeur[3]</td>";
?>

<td><a href="controllerCourses/getUpdateCourse/<?=$valeur[0]?>">Modifier</a></td>
<td><a href="controllerCourses/getDeleteCourse/<?=$valeur[0]?>">Supprimer</a></td>

<?php

	echo "<tr>";
}
echo "</table></center>";

require('footer.php');