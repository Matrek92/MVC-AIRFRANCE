<h3>Ajout d'un pilote</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom du pilote</td>
			<td><input type="text" name="nom" value="<?= ($lePilote !=null)?$lePilote['nom']:'' ?>"></td>
		</tr>
		<tr>
			<td>Prénom du pilote</td>
			<td><input type="text" name="prenom"
				value="<?= ($lePilote !=null)?$lePilote['prenom']:'' ?>"></td>
		</tr>
		<tr>
			<td>Anciennete du pilote</td>
			<td><input type="text" name="anciennete"
				value="<?= ($lePilote !=null)?$lePilote['anciennete']:'' ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" 
				<?= ($lePilote !=null)? 'name="Modifier" value="Modifier" ' : 'name="Valider" value="Valider" ' ?>
				name="Valider" value="Valider"

				></td>
		</tr>
		<input type="hidden" name="idpilote" value="
		<?= ($lePilote !=null)? $lePilote['idpilote'] : '' ?>">
	</table>
	
</form>
