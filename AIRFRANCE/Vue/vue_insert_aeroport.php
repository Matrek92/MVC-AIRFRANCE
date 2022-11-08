<h3>Ajout d'un aeroport</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom de l'aeroport</td>
			<td><input type="text" name="nom" value="<?= ($laeroport !=null)?$laeroport['nom']:'' ?>"></td>
		</tr>
		<tr>
			<td>Pays de l'aeroport</td>
			<td><input type="text" name="prenom"
				value="<?= ($laeroport !=null)?$laeroport['pays']:'' ?>"></td>
		</tr>
		<tr>
			<td>ville de l'aeroport</td>
			<td><input type="text" name="ville"
				value="<?= ($laeroport !=null)?$laeroport['ville']:'' ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" 
				<?= ($laeroport !=null)? 'name="Modifier" value="Modifier" ' : 'name="Valider" value="Valider" ' ?>
				name="Valider" value="Valider"

				></td>
		</tr>
		<input type="hidden" name="idaeroport" value="
		<?= ($laeroport !=null)? $laeroport['idaeroport'] : '' ?>">
	</table>
	
</form>

