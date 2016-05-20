


<link rel="stylesheet" type="text/css" href="/CSS/cssitem.css" />	
<script>

function search(word){
	
	
	if(word==1){
		window.location = "/index.php?page=butik";
	}
	word = document.getElementById('searchWord').value;
	if(word==""){
		window.location = "/index.php?page=butik";
	}else{
		window.location = "/index.php?page=butik&search="+word;
	}
	
	
}





cart=<?php echo $_SESSION['items']; ?>; // [1,2,3]


path="/addToCart.php?items=";
for(i=0;i<cart.length;i++){
	path+=cart[i]+"-"; //   /addToCart.php?items=1-2-3-
}
document.getElementById("cartItems").innerHTML = cart.length+" Items";
	
function addToCart(product){  // 1
	cartLen = cart.length; // =3
	cart[cartLen] = product; // [1,2,3,1]
	
	path += product+"-";    //   /addToCart.php?items=1-2-3-1-
   
	xhttp = new XMLHttpRequest();
	
	xhttp.open("GET", path , true);
	xhttp.send();
	
	document.getElementById("cartItems").innerHTML = cart.length+" Items";

	
}

</script>

<p><input type="text" id="searchWord" name="search" placeholder="Sökord"></input><button onClick="search()">Sök</button>
<?php
if(isset($_GET['search'])){
	echo '<button onClick="search(1)">Visa alla</button>';
}


?>

<?php 

require_once("/mysql_connect_db_webshop.php"); // $dbc


if(isset($_GET['search'])){
	$query='SELECT * FROM Products WHERE Product_name LIKE "%'.$_GET['search'].'%" 
	OR
	Price LIKE "%'.$_GET['search'].'%"
	OR
	Description LIKE "%'.$_GET['search'].'%"	
	;';
	$result=mysqli_query($dbc,$query);
}else{
	$query="SELECT * FROM Products;";
	$result=mysqli_query($dbc,$query);
}



while($row=mysqli_fetch_array($result)){
	echo'
		<div class="itemContainer" id="first">
			<div class="itemPicture"><img src="/Images/'.$row['Image'].'" style="background-color:white" alt="Produkt"/></div>
			<div class="itemName" ><p>'.$row['Product_name'].' </p></div>
			<div class="itemInfoBox"><p>'.$row['Description'].'</p></div>
			<div class="itemButtonContainer">
				<div class="itemPrice"><p>'.$row['Price'].'kr </p></div>
				<div class="itemBuyButton" onmousedown="addToCart('.$row['Product_number'].')"><p> Buy </p></div>
			</div>
		</div>
	';
}

?>
