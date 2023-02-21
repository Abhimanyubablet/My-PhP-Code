<?php
$servername="localhost";
$username="root";
$password="";
$database="online_shoping";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "data is not connect";
}
?>