<?php 
require_once('header.html');
if(isset($message)) echo $message;?>

<form action="controllerCourses/getUpdateCourse/<?=$data['id']?>" method="post">
	
	<h2>Modification d'un cours</h2>

	<table class="mx-auto">
		<tr>
			<td>Code</td>
			<td>
				<input type="text" name="courseCode" size="50" maxlength="50" value="<?=$data['courseCode']?>">
			</td>
		</tr>
		<tr>
			<td>Titre</td>
			<td>
				<input type="text" name="courseTitle" size="50" maxlength="50" value="<?=$data['courseTitle']?>">
			</td>
		</tr>
		<tr>
			<td>Langue</td>
			<td>
				<input type="text" name="courseLanguage" size="50" maxlength="50" value="<?=$data['courseLanguage']?>">
			</td>
		</tr>
			<tr>
				<td></td>
				<td>
					<input type="reset" name="effacer" value="effacer">
					<input type="submit" name="update" value="valider">
				</td>
			</tr>

	</table>
	<input type="hidden" name="id" value="<?= $data['id']?> ">

</form>

<?php require_once('footer.php');
