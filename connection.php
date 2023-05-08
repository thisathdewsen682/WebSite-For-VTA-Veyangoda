<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "vta";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Connection Failed");
}
 
?>