<?php
session_start();
session_unset();
session_destroy();
header("location:adminlogin.php? error=Your session has expired");
?>