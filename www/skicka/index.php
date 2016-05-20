<?php

if(!isset($_POST['Anmälare'])){
	die(
	header('Location: /form.php')
	);
}
require_once('../../SQL Files/connection/mysql_connect_db_random.php');
// ger variabel $dbc
 
 
 $query = 'INSERT INTO felanmalningar(Anmälare,Mail,Kort_beskrivning,Detaljerad_beskrivning,Prioritet) 
VALUES("'
. $_POST['Anmälare'] .'","'
. $_POST['Mail'] . '","'
. $_POST['Kort_beskrivning'] .'","'
. $_POST['Detaljerad_beskrivning'] .'","'
. $_POST['Prioritet'].'");';

mysqli_query($dbc,$query);







?>