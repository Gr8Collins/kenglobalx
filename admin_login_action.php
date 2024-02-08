<?php
session_start();
$con = new mysqli("localhost", "root", "", "nasadigital_database");
$Email = trim($_POST['Email']);
$Password = trim($_POST['Password']);
$sel = "select * from admin_tb where Email='$Email' and Password='$Password'";
$sql = $con->query($sel);
$num = $sql->num_rows;
$row = $sql->fetch_object();
$_SESSION['id'] = $row->id;
$_SESSION['Name'] = $row->Name;
if ($num >= 1) {
    header("location:admindashboard.php");
} else {
    header("location:login.php?error=Invalid Login Details" . $row->id);
}
?>
