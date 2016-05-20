<?php

	require_once('../SQL Files/Connection/mysql_connect_db_random.php');
	// Innehåller variabeln $dbc som är anslutningen till databasen.
	
	echo '<table border="solid" cellpadding="8">
	<tr>
	<td><b> Place </b></td>
	<td><b> <a href="mysql_test.php?sort=Country">Country</a> </b></td>
	<td><b> <a href="mysql_test.php?sort=City">City</a> </b></td>
	<td><b> <a href="mysql_test.php?sort=Population">Population</a> </b></td>
	</tr>';
	
	$orderBy = 'Population';
	$order= 'DESC';
	if(@$_GET['sort']){
		$orderBy = $_GET['sort'];
		}
	else{
		$orderBy = 'Population';
	}
	 
	
	$query = 'SELECT * FROM Cities ORDER BY '. $orderBy .' ' . $order;;
	$result = mysqli_query($dbc, $query);
	$number = 0;
	while($row = mysqli_fetch_array($result)){
		$number += 1;
		
		echo 
		'<tr>
		<td>' . $number . '</td>
		<td>' . mysqli_fetch_array(mysqli_query($dbc, 'SELECT Countryname FROM Countries WHERE Countrycode="'. $row['Country'] .'"'))['Countryname'] . '</td>
		<td>' . ucfirst($row['City']) . ' </td>
		<td>' . number_format($row['Population'], 0, "."," ") . '</td>
		</tr>';
	}
	echo '</table>';
	
?>