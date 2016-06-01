<?php
session_start();

//Ifall man är inloggad går den till startsidan
if(@$_SESSION['loggedIn']){
	header('Location: main.php');

}

//Ifall man inte är inloggad kommer man tillbaka till inloggnings sidan
else{
	header('Location: main.php?page=login');
}

?>