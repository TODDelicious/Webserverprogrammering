<?php

session_start();  

//items = "1-2-3-1-"
$items = explode("-",substr($_GET['items'], 0, -1)); // [1,2,3,1]


$cart = "[";
foreach($items as $item){
	$cart .= $item.",";
} 
$cart = substr($cart, 0, -1);
$cart .= "]"; // slutprodukt = "[1,2,3,1]"
$_SESSION['items'] = $cart;



?>