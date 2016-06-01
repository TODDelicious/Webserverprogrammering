<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>Recycle.se</title>
	</head>

	<body>
		<p class="starttext">This is a shop with big red buttons on buy which makes it look like extremely low prices though there are no low prices here. BEST SWINGLISH SITE EU.
		</p>

		<?php 
	require_once("connect.php"); // $dbc
	if(!empty($_GET['search'])){
		$query='SELECT * FROM Products WHERE Product_name LIKE "%'.$_GET['search'].'%";';
		$result=mysqli_query($dbc,$query);
	}else{
		$query="SELECT * FROM Products;";
		$result=mysqli_query($dbc,$query);
	}
	while($row=mysqli_fetch_array($result)){
		// Den loopar och skriver ut en vara åt gången tills alla är utskrivna (alla dessa med all information)
		echo'
			<div class="itemContainer" id="first">
				<div class="itemPicture"><img src="Pictures/'.$row['Product_image'].'"/></div>
				<div class="itemName"><p>'.$row['Product_name'].' </p></div>
				<div class="itemInfoBox"><p>'.$row['Product_description'].'</p></div>
				<div class="itemButtonContainer">
				<div class="itemPrice"><p>'.$row['Product_price'].' kr/st </p></div>
				<a href="#lask">
					<div class="itemBuyButton"><p> Köp </p></div>
				</a>
				</div>
			</div>
		';
	}
?>
	</body>
</html>