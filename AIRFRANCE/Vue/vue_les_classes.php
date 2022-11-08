		<h3>Liste des avions</h3>
		
		<form method="post">
			Filtrer par : <input type="text" name="mot"><input type="submit" name="Filtrer" value="Filtrer">
		</form>

		<br>

		<table border='1'>
			<tr>
				<td>Id avion </td>
				<td> Nom </td>
				<td>Modele</td>
				<td>Capacite</td>
			</tr>
		
		<?php
		foreach ($lesAvions as $unAvion) 
		{
			echo "<tr>";
			echo"<td>".$unAvion['idavion']."</td>";
			echo"<td>".$unAvion['nom']."</td>";
			echo"<td>".$unAvion['modele']."</td>";
			echo"<td>".$unAvion['capacite']."</td>";
			echo"<td>
				<a href='index.php?page=1&action=sup&idavion=".$unAvion['idavion']."'><img src='images/supp.png' height='40' width='40'></a>

				<a href='index.php?page=1&action=edit&idavion=".$unAvion['idavion']."'><img src='images/edit.png' height='40' width='40'></a>
				</td>

			";
			echo "</tr>";
		}
		?>
		</table>
		<br/><br/>