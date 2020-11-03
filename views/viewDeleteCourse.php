<?php 
require_once('header.html');
?>

<form action="controllerCourses/getDeleteCourse/<?=$data['id']?>" method="post">
	
	<h2>Suppresion d'un cours</h2>

	<table class="mx-auto">
		<tr>
			<td>Code</td>
			<td>
				<?=$data['courseCode']?>
			</td>
		</tr>
		<tr>
			<td>Titre</td>
			<td>
				<?=$data['courseTitle']?>
			</td>
		</tr>
		<tr>
			<td>Langue</td>
			<td>
				<?=$data['courseLanguage']?>
			</td>
		</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="delete" value="supprimer">
				</td>
			</tr>

	</table>
	<input type="hidden" name="id" value="<?= $data['id']?> ">

</form>

<?php require_once('footer.php');
