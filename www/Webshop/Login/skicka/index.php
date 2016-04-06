<?php

session_start();

if(!isset($_POST['Mail']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Lösenord via formuläret
	header('Location: ../login.php'); // Skickas till login.php igen om man inte har fyllt i ovanstående
}
require_once('../connect.php');
// ger variabel $dbc
 
 
$query = 'SELECT Mail, Password FROM login WHERE Password=PASSWORD("' . $_POST['Password'] . '") AND Mail="'.$_POST['Mail'].'";';
// Hämta Användarnamn och Lösenord där det instkrivna uppgifterna stämmer överens. (Om de finns)
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$mail = mysqli_fetch_array($result); //Hämta den rad man får som svar (Om det finns någon)

if($mail['Mail'] === $_POST['Mail']){ // Om Användarnamnet i databasen är samma som från formuläret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: ../index.php'); // Skickas till index.php
}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] === FALSE; // Inloggad FALSKT
	header('Location: ../login.php'); // Skickas till login.php
}


?>