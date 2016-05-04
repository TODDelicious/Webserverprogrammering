<?php
session_start();

if(@$_SESSION['loggedIn']){
	header('Location: main.php');

}

else{
	header('Location: main.php?page=login');
}






?>