<?php require_once('header.html'); ?>

<center>
	<form action="index.php?action=controllerCourses/addOneCourse" method="post">
		<h2>Ajout d'un nouveau cours</h2>
		<table>
			<tr>
				<td>Code de cours :</td>
				<td>
				<input type="text" name="courseCode" size="50" maxlength="50">
				</td>
			</tr>
			<tr>
				<td>Titre du cours :</td>
				<td>
				<input type="text" name="courseTitle" size="50" maxlength="150">
				</td>
			</tr>
			<tr>
				<td>Langue du cours :</td>
				<td>
				<input type="text" name="courseLanguage" size="50" maxlength="50">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="reset" name="effacer" value="effacer">
					<input type="submit" name="insert" value="insertion">
				</td>
				
			</tr>
	</table>
	</form>
</center>

<?php require_once('footer.php'); ?>