<?php
$con = new mysqli("localhost", "root", "", "nasadigital_database");

$id= $_POST['id'];
$del = "delete  from product  where id = '$id'";
$sql=$con->query($del);
if($sql){
    header ("location:admin_manage_products.php");
}else{
    header("location:admin_manage_products.php");   
}

?>
