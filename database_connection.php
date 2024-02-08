<?php
// variable declarartion
$host = "localhost";
$user = "root";
$pass = "";
// for connecting to database
$con = new mysqli($host, $user, $pass);
if (!$con) {
    die("Server connection failed");

}
// query
$db = "create database if not exists nasadigital_database";
// executing the query
$sql = $con->query($db);
if ($sql) {
    die("database created");
} else {
    die("Failed");
}
?>