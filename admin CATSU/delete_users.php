<?php
include("connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM users WHERE user_id = '".$_GET['user_del']."'");
header("location:all_users.php");  

?>
