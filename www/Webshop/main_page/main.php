<?php
$page =@$_GET['page'];


?>

<html>
	<head>
		<html lang="se">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>Recycle.se</title>

	</head>

	<body>
		<!-- hämtar headern och login baren -->
		<header>
			<?php include ('header.php'); ?>

			<?php include ('login_bar.php'); ?>
		</header>

		<main>
			<!-- hämtar sidorna och lägger dem mellan headern, login baren och footern -->
            <?php
                if (!empty($page)) {
                    require("$page.php");
                }
                else{
                    require("start.php");
                }
            ?>
        </main>
        <!-- hämtar footern -->
        <footer>
        	<?php include ('footer.php'); ?>
        </footer>	
		
	</body>
</html>