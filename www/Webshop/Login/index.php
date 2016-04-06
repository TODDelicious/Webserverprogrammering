<?php
session_start();

if(@$_SESSION['loggedIn']){
	echo 'välkommen';

}else{
	header('Location: login.php');
}






?>