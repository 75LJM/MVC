<?php require_once('header.html');
?>

<form action="controllerStudents/addOneStudent" method="post">

	<h1>Création d'un compte étudiant</h1>
	<table class="mx-auto">
		<tr>
			<td>INE</td>
			<td>
				<input type="text" name="ine" size="50" maxlength="50">
			</td>

		</tr>
		<tr>
			<td>Prenom</td>
			<td>
				<input type="text" name="firstName" size="50" maxlength="50">
			</td>

		</tr>
		<tr>
			<td>Nom</td>
			<td>
				<input type="text" name="lastName" size="50" maxlength="50">
			</td>

		</tr>
		<tr>
			<td>Adresse</td>
			<td>
				<input type="text" name="address" size="50" maxlength="100">
			</td>

		</tr>
		<tr>
			<td>Ville</td>
			<td>
				<input type="text" name="city" size="50" maxlength="50">
			</td>

		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="mail" name="mail" size="50" maxlength="80">
			</td>

		</tr>
		<tr>
			<td>Mot de passe</td>
			<td>
				<input type="password" name="password" size="50" maxlength="50">
			</td>

		</tr>
		<tr>
			<td>Confirmation du mot de passe</td>
			<td>
				<input type="password" name="confirm_password" size="50" maxlength="50">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="reset" name="effacer" value="Effacer">
				<input type="submit" name="enregistrer" value="Enregistrer">
			</td>
		</tr>
	</table>
	
</form>

<?php require_once('footer.php'); 