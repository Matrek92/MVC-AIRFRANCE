		<h3>Liste des pilotes</h3>
		
		<form method="post">
			Filtrer par : <input type="text" name="mot"><input type="submit" name="Filtrer" value="Filtrer">
		</form>

		<br>

		<table border='1'>
			<tr>
				<td>Id pilote </td>
				<td> Nom </td>
				<td>Prenom</td>
				<td>Anciennete</td>
			</tr>
		
		<?php
		foreach ($lesPilotes as $unPilote) 
		{
			echo "<tr>";
			echo"<td>".$unPilote['idpilote']."</td>";
			echo"<td>".$unPilote['nom']."</td>";
			echo"<td>".$unPilote['prenom']."</td>";
			echo"<td>".$unPilote['anciennete']."</td>";
			echo"<td>
				<a href='index.php?page=3&action=sup&idpilote=".$unPilote['idpilote']."'><img src='images/supp.png' height='40' width='40'></a>

				<a href='index.php?page=2&action=edit&idpilote=".$unPilote['idpilote']."'><img src='images/edit.png' height='40' width='40'></a>
				</td>

			";




			echo "</tr>";
		}
		?>
		</table>
