<?php 
require_once('views/header.html');
 ?>

 <form action="controllerStudents/connexion" method="post">
 	<h2>Connexion</h2>
 	<table class="mx-auto">
 		<tr>
 			<td>Adresse email</td>
 			<td>
 				<input type="text" name="mail" size="50" maxlength="100">
 			</td>
 		</tr>
 		<tr>
 			<td>Mot de passe</td>
 			<td>
 				<input type="password" name="password" size="50" maxlength="50">
 			</td>
 		</tr>
 		<tr>
 			<td></td>
 			<td>
 				<input type="submit" name="connexion" value="Se connecter">
 			</td>
 		</tr>
 	</table>
 </form>

 <?php 

 require_once('views/footer.php');