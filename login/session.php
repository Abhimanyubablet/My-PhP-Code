<?php
session_start();
$url = "localhost";
$server = "root";
$password = "";
$dbname = "college";
$conn = mysqli_connect($url, $server, $password, $dbname);
if (!$conn) {
    echo "Database is not connected" ;
}

if(isset($_POST['save']))
{   
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM student WHERE User_id='$user_id' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["user_id"] = $row['User_id'];
        $_SESSION["password"]=$row['Password'];

        header("Location: test.php");   
    }
    else
    {
        echo "Wrong  Username /Password";
    }
}
?>