<h3>Liste des aeroports</h3>
		
		<form method="post">
			Filtrer par : <input type="text" name="mot"><input type="submit" name="Filtrer" value="Filtrer">
		</form>

		<br>

		<table border='1'>
			<tr>
				<td>Id aeroport </td>
				<td> Nom </td>
				<td>Pays</td>
				<td>Ville</td>
			</tr>
		
		<?php
		foreach ($lesAeroports as $unAeroport) 
		{
			echo "<tr>";
			echo"<td>".$unAeroport['idaeroport']."</td>";
			echo"<td>".$unAeroport['nom']."</td>";
			echo"<td>".$unAeroport['pays']."</td>";
			echo"<td>".$unAeroport['ville']."</td>";
			echo"<td>
				<a href='index.php?page=3&action=sup&idaeroport=".$unAeroport['idaeroport']."'><img src='images/supp.png' height='40' width='40'></a>

				<a href='index.php?page=2&action=edit&idaeroport=".$unAeroport['idaeroport']."'><img src='images/edit.png' height='40' width='40'></a>
				</td>

			";




			echo "</tr>";
		}
		?>
		</table>

