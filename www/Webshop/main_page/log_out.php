<?php
	// När man klickar på logga ut, förstör den sessionen och skickar dig till start
	session_start();
	session_destroy();
	header('Location: main.php');
?>