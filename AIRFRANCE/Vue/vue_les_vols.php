		<h3>Liste des vols</h3>
		
		<form method="post">
			Filtrer par : <input type="text" name="mot"><input type="submit" name="Filtrer" value="Filtrer">
		</form>

		<br>

		<table border='1'>
			<tr>
				<td>Id vol </td>
				<td> Nom </td>
				<td>Pays Départ</td>
				<td>Pays Arrivé</td>
				<td>Avion </td>
				<?php 
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
				{
					echo "<td>Opérations </td>";
				}
				?>
			</tr>
		
		<?php
		foreach ($lesVols as $unVol) 
		{
			echo "<tr>";
			echo"<td>".$unVol['idvol']."</td>";
			echo"<td>".$unVol['nom']."</td>";
			echo"<td>".$unVol['paysDepart']."</td>";
			echo"<td>".$unVol['paysArrive']."</td>";
			echo"<td>".$unVol['idavion']."</td>";
			if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
	{
			echo"<td>
				<a href='index.php?page=2&action=sup&idvol=".$unVol['idvol']."'><img src='images/supp.png' height='40' width='40'></a>

				<a href='index.php?page=2&action=edit&idvol=".$unVol['idvol']."'><img src='images/edit.png' height='40' width='40'></a>
				</td>

			";
			echo "</tr>";
		}
	}
		?>
		</table>
		<br/><br/>