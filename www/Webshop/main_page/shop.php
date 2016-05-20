<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>Recycle.se</title>
	</head>

	<body>
		<p class="starttext">This is a shop with big red buttons on buy which makes it look like extremely low prices though there are no low prices here.
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
<!--
		<div class="shop">
			<h1 class="Shop_text">Toapapper
			</h1>
			<img class="pictures" src="Pictures/toapapper.jpg" class="Shop_picture">
			<div class="Buy_text">
				<p>KÖP 3Kr/st
				</p>
			</div>
		</div>

		<div class="shop">
			<h1 class="Shop_text">Tandborste
			</h1>
			<img class="pictures" src="Pictures/tandborste.jpg" class="Shop_picture">
			<div class="Buy_text">
				<p>KÖP 5Kr/st
				</p>
			</div>
		</div>

		<div class="shop">
			<h1 class="Shop_text">Tuggummi
			</h1>
			<img class="pictures" src="Pictures/tuggummi.jpg" class="Shop_picture">
			<div class="Buy_text">
				<p>KÖP 2Kr/st
				</p>
			</div>
		</div>
		
		<div class="shop">
			<h1 class="Shop_text">Fyverkerier
			</h1>
			<img class="pictures" src="Pictures/fyverkerier.jpg" class="Shop_picture">
			<div class="Buy_text">
				<p>KÖP 7Kr/st
				</p>
			</div>
		</div>

		<div class="shop">
			<h1 class="Shop_text">Engångsgrillar
			</h1>
			<img class="pictures" src="Pictures/engångsgrill.jpg" class="Shop_picture">
			<div class="Buy_text">
				<p>KÖP 15Kr/st
				</p>
			</div>
		</div>

		<div class="shop">
			<h1 class="Shop_text">Glasspinnar
			</h1>
			<img class="pictures" src="Pictures/glasspinnar.jpg" class="Shop_picture">
			<div class="Buy_text">
				<p>KÖP 8Kr/st
				</p>
			</div>
		</div>
-->
	</body>
</html>