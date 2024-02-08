
<?php
session_start();
$con = new mysqli("localhost", "root", "", "nasadigital_database");

?> 

<!------------------------------------------------------- Confirm Orders----------------------------------- -->
<?php 
if (isset($_POST['update']))  {
$status="confirmed";
$id = $_POST['id'];
?>
<?php


$up="update orders set status = '$status' where id = '$id'";
$sql=$con->query($up);

$insert = "insert into confirmed_orders(status) VALUES('$status' where id = '$id')";
$sq=$con->query($insert);
} ?>