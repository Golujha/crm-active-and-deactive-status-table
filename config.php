<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crm";


$con = mysqli_connect($servername,$username,$password,$database);

if ($con) {

}
else{
    die("connection failed:".mysqli_connect_error());
}
?>