<?php
$server="localhost";
$user="root";
$password="";
$dbname="patna";

$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn){
    die("database is not connected".mysqli_error($conn));
}
?>