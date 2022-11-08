<h3>Ajout d'un avion</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom de l'avion</td>
			<td><input type="text" name="nom" value="<?= ($lAvion !=null)?$lAvion['nom']:'' ?>"></td>
		</tr>
		<tr>
			<td>Modèle de l'avion</td>
			<td><input type="text" name="modele"
				value="<?= ($lAvion !=null)?$lAvion['modele']:'' ?>"></td>
		</tr>
		<tr>
			<td>Capacité de l'avion</td>
			<td><input type="text" name="capacite"
				value="<?= ($lAvion !=null)?$lAvion['capacite']:'' ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" 
				<?= ($lAvion !=null)? 'name="Modifier" value="Modifier" ' : 'name="Valider" value="Valider" ' ?>
				name="Valider" value="Valider"

				></td>
		</tr>
		<input type="hidden" name="idavion" value="
		<?= ($lAvion !=null)? $lAvion['idavion'] : '' ?>">
	</table>
	
</form>


