<?php
$server="localhost";
$user="root";
$password="";
$dbname="health";

$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die ("Database is not connected"). mysqli_error($conn);
}
?>