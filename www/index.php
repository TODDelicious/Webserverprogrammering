<?php
	require_once('../mysql_connect.php');
	//Gör en anslutning till batabasen

	$query = 'SELECT * FROM Cities WHERE Population>=5000000 ORDER BY Population DESC;';
	//Selectar datdan från tabellen i mysql servern

	$result = mysqli_query($dbc, $query);

	echo '<table border="solid">';
	//Lägger in så att tabellen får kanetr mellan alla celler
	while($row = mysqli_fetch_array($result)){
		echo '<tr><td>' . ucfirst($row['City']) . ' </td> <td> ' . $row['Population'] . '</td></tr>';
	}
	//En loop som skriver ut städer i storleksårdning från störst (med över 5 000 000 invånare)

	echo '</table>';
	
?>