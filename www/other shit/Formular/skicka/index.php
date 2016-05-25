<?php

require_once('../../../mysql_connect.php');
// ger variabel $dbc
 
 
 $query = 'INSERT INTO tabell(Anmälare,Mail,Kort_beskrivning,Detaljerad_beskrivning,Prioritet) 
VALUES("'
. $_POST['Anmälare'] .'","'
. $_POST['Mail'] . '","'
. $_POST['Kort_beskrivning'] .'","'
. $_POST['Detaljerad_beskrivning'] .'","'
. $_POST['Prioritet'].'");';

mysqli_query($dbc,$query);







?>