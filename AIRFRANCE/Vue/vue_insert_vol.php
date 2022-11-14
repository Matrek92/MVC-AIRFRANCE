<h3>Ajout d'un vol</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom du vol</td>
			<td><input type="text" name="nom" value="<?= ($leVol !=null)?$leVol['nom']:'' ?>"></td>
		</tr>
		<tr>
			<td>Pays de départ</td>
			<td><input type="text" name="paysDepart"
				value="<?= ($leVol !=null)?$leVol['paysDepart']:'' ?>"></td>
		</tr>
		<tr>
			<td>Pays d'arrivée</td>
			<td><input type="text" name="paysArrive"
				value="<?= ($leVol !=null)?$leVol['paysArrive']:'' ?>"></td>
		</tr>
		<tr>
			<td>Avion</td>
			<td><input type="text" name="idavion"
				value="<?= ($leVol !=null)?$leVol['idavion']:'' ?>"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" 
				<?= ($leVol !=null)? 'name="Modifier" value="Modifier" ' : 'name="Valider" value="Valider" ' ?>
				name="Valider" value="Valider"

				></td>
		</tr>
		<input type="hidden" name="idvol" value="
		<?= ($leVol !=null)? $leVol['idvol'] : '' ?>">
	</table>
	
</form>


