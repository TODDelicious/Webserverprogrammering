<?php
session_start(); // Starta sessionen ( Alltid överst)

if(!isset($_POST['Name']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Lösenord via formuläret
	header('Location: login.php'); // Skickas till login.php igen om man inte har fyllt i ovanstående
}

require_once('C:/wamp/SQL Files/connection/mysql_connect_db_webshop.php'); // Databasanslutning (ER SÖKVÄG)
// Ger variabel $dbc som är databasanslutningen.
 
 
$query = 'SELECT Username, Password FROM Admins WHERE Password=PASSWORD("' . $_POST['Password'] . '") AND Username="'.$_POST['Name'].'";'; // Hämta Användarnamn och Lösenord där det instkrivna uppgifterna stämmer överens. (Om de finns)
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$username = mysqli_fetch_array($result); //Hämta den rad man får som svar (Om det finns någon)

if($username['Username'] = $_POST['Name']){ // Om Användarnamnet i databasen är samma som från formuläret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	$_SESSION['items'] = "[]";
	header('Location: index.php'); // Skickas till index.php
}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: login.php'); // Skickas till login.php
}

?>