<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>Recycle.se</title>
	</head>

	<body>
		<p class="starttext">POOTIS!
		</p>

	<?php 

	require_once("connect.php"); // $dbc

	echo '<br><br>';
	if($_SESSION['items'] != "[]"){  // "[1,2,3,1]"
	

	$itemList = explode(",",substr($_SESSION['items'],1,-1)); // [1,2,3,1]  (array)


	$quantityList = array_count_values($itemList); // [2,1,1]
	$productList = array_unique($itemList); //        [1,2,3] 


	$cart = [[]];


	$n=0;
	foreach($productList as $productNumber){
		$cart[$n][0] = $productNumber;
		$n+=1;
	}  // slutprodukt [[1],[2],[3]]

	$n=0;
	foreach($quantityList as $quantity){
		$cart[$n][1] = $quantity;
		$n+=1;
	} // slutprodukt [[1,2],[2,1],[3,1]]



	foreach($cart as $info){
		$query = "SELECT * FROM Products WHERE Product_number=".$info[0].";";
		$result = mysqli_query($dbc,$query);
		$row = mysqli_fetch_array($result);
		echo $info[1]."st ".$row['Product_name']."<br>";
	}


	}
	else{
	
		echo "Kundvagnen är tom";
	
	}
	?>

	<script>

	function clearCart(){
	
		xhttp = new XMLHttpRequest();
	
		xhttp.open("GET", "/index.php?page=om" , true);
		xhttp.send();
	
		document.getElementById("cartItems").innerHTML = "0 Items";
		window.location = "/index.php?page=cart";
	
	}

	</script>
	<p onmousedown="clearCart()"><a href="#"> Rensa kundvagn</a></p>


	</body>
</html>