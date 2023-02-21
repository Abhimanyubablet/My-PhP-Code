<?php
$server="localhost";
$user="root";
$pass="";
$dbname="college";

$conn=mysqli_connect($server,$user,$pass,$dbname);

if(!$conn){
    die ("Database is not connected".mysqli_error($conn));
}
?>