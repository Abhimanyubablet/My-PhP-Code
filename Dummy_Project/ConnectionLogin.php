<?php
$server="localhost";
$user="root";
$pass="";
$dbname="school";

$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
    echo "Database is not connected";
}

if(isset($_POST['save']))
{
    $Id=$_POST["Id"];
    $Email=$_POST["Email"];

    $sql=mysqli_query($conn,"SELECT * FROM student_details WHERE Id='$Id' and Email='$Email'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        echo "Welcome";
    }
    else{
        echo "Invalid";
    }
}
?>