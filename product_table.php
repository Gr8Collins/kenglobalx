<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nasadigital_database";
$con = new mysqli($host, $user, $pass, $db);
if (!$con) {
    die("Server connection failed");
}
$table = "Create table if not exists product(id int(20)not null auto_increment primary key,
product_id varchar(100)not null,product_name varchar(100)not null, product_desc varchar(16)not null, product_unit_price varchar(16)not null,product_quantity varchar(16)not null,
 image varchar(50)not null, date_uploaded varchar(50)not null)ENGINE=InnoDB;";
$menu = $con->query($table);
if ($menu) {
    echo "Table Created";
} else {
    echo "Failed";
}
?>