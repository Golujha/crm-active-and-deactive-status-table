<?php include("config.php");
$id = $_GET['id'];
$status = $_GET['status'];
$updatequery = "UPDATE customers SET status=$status WHERE id=$id";
mysqli_query($con,$updatequery);
header("location:table.php");
?>