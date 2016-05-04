<?php
$page =@$_GET['page'];


?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>Recycle.se</title>

	</head>

	<body>

		<header>
			<?php include ('header.php'); ?>

			<?php include ('login_bar.php'); ?>
		</header>

		<main>
            <?php
                if (!empty($page)) {
                    require("$page.php");
                }
                else{
                    require("start.php");
                }
            ?>
        </main>

        <footer>
        	<?php include ('footer.php'); ?>
        </footer>	
		
	</body>
</html>