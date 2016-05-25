<?php

session_start();

	$page = @$_GET['page'];


?>

<!DOCTYPE html>
<head>

	<title> Titel </title>
	<link rel="stylesheet" type="text/css" href="/CSS/css.css" />	
	<link rel="stylesheet" type="text/css" href="/CSS/CSScart.css" />	

	
</head>

<body>

	<div id="wrapper">
		
		<header>
		
			<?php include('templates/header.php'); ?>
			
		</header>
		
		<nav>
		
			<?php include('templates/navigation.php'); ?>
			
		</nav>
		
		
		<main>
		
			<?php 
			
				if(!empty($page)){
					require("templates/$page.php");
				}else{
					require("templates/index.php");
				}
				
			?>
		</main>
			
		
		
	</div><!-- #wrapper -->
	
</body>

</html>

