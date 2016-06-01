<?php

require_once('connect.php');
// ger variabel $dbc
 
 //När man skapar ett konto skrivs din mail, ditt namn och så vidare i databasen.
 $query = 'INSERT INTO users(Email, First_name, Last_name, Social_Security_Number, Adress, Postal_code, Country, Phone_number)
VALUES("'
. $_POST['Mail'] .'","'
. $_POST['First_name'] .'","'
. $_POST['Last_name'] .'","'
. $_POST['Social_Security_Number'] .'","'
. $_POST['Adress'] .'","'
. $_POST['Postal_code'] .'","'
. $_POST['Country'] .'","'
. $_POST['Phone_number'].'");';

mysqli_query($dbc,$query);

$query = 'select customer_id from users order by customer_id desc limit 1;';
$result = mysqli_query($dbc,$query);
$id = mysqli_fetch_array($result)['customer_id'];

$query = "INSERT INTO login VALUES (".$id.",Password('".$_POST['Password']."'));";
mysqli_query($dbc,$query);

header('Location: main.php?page=login');

?>