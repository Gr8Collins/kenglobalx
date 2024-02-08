<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nasadigital_database";
$con = new mysqli($host, $user, $pass, $db);
if (!$con) {
    die("Server connection failed");
}
$tb = "Create table if not exists admin_tb(id int(20)not null auto_increment primary key,
Name varchar(100)not null, Phone varchar(16)not null,
 Email varchar(50)not null, Password varchar(100)not null, Message varchar(100)not null)ENGINE=InnoDB;";
$menu = $con->query($tb);
if ($menu) {
    echo "Table Created";
} else {
    echo "Failed";
}
?>