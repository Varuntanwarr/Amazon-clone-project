<?php
session_start();
include("connection.php");
if(isset($_SESSION['username']));
session_unset();
session_destroy();
header("location:project.php");
?>
