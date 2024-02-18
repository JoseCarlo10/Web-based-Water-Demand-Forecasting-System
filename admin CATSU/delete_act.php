<?php
include("connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM activity WHERE activity_id = '".$_GET['act_del']."'");
header("location:activity.php");  

?>
