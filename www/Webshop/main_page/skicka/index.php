<?php

session_start();

if(!isset($_POST['Mail']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Lösenord via formuläret
	header('Location: ../main.php?page=login'); // Skickas till login.php igen om man inte har fyllt i ovanstående
}
require_once('../connect.php');
// ger variabel $dbc

$query = 'SELECT * FROM users WHERE Email="'.$_POST['Mail'].'";';
// Hämta Användarnamn och Lösenord där det instkrivna uppgifterna stämmer överens. (Om de finns)
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$customer_id = mysqli_fetch_array($result)['Customer_ID']; //Hämta den rad man får som svar (Om det finns någon)

$query = 'SELECT * FROM login WHERE customer_id="' . $customer_id . '" AND password=PASSWORD("'.$_POST['Password'].'");';
// Hämta Användarnamn och Lösenord där det instkrivna uppgifterna stämmer överens. (Om de finns)
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$row = mysqli_fetch_array($result); //Hämta den rad man får som svar (Om det finns någon)


if($row){ // Om Användarnamnet i databasen är samma som från formuläret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: ../main.php'); // Skickas till login.php igen om man inte har fyllt i ovanstående
}
else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] === FALSE; // Inloggad FALSKT
	header('Location: ../main.php?page=login'); // Skickas till login.php igen om man inte har fyllt i ovanstående
}

?>