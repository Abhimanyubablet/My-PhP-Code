<?php
$server="localhost";
$user="root";
$pass="";
$dbname="aimit";

$conn=mysqli_connect($server,$user,$pass,$dbname);

if(!$conn){
    die("database is not connected".mysqli_error($conn));
}
?>