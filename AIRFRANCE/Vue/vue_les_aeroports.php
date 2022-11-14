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
				<td>Avion </td>
				<td>Vol</td>
				<?php 
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
				{
					echo "<td>Opérations </td>";
				}
				?>
			</tr>
		
		<?php
		foreach ($lesAeroports as $unAeroport) 
		{
			echo "<tr>";
			echo"<td>".$unAeroport['idaeroport']."</td>";
			echo"<td>".$unAeroport['nom']."</td>";
			echo"<td>".$unAeroport['pays']."</td>";
			echo"<td>".$unAeroport['ville']."</td>";
			echo"<td>".$unAeroport['idavion']."</td>";
			echo"<td>".$unAeroport['idvol']."</td>";
			if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
	{
			echo"<td>
				<a href='index.php?page=4&action=sup&idaeroport=".$unAeroport['idaeroport']."'><img src='images/supp.png' height='40' width='40'></a>
				<a href='index.php?page=4&action=edit&idaeroport=".$unAeroport['idaeroport']."'><img src='images/edit.png' height='40' width='40'></a>
				</td>
			";




			echo "</tr>";
		}
	}
		?>
		</table>