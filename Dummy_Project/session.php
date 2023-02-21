<?php
session_start();
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
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM student_details WHERE Id='$Id' and Email='$Email'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"] = $row["Id"];
        $_SESSION["Email"]=$row["Email"];

        header("Location: test.php");   
    }
    else
    {
        echo "Invalid";
    }
}
?>