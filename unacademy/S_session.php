<?php
session_start();
include_once "connection.php";


    extract ($_POST);
    
    $sql=mysqli_query($conn,"SELECT * FROM student WHERE  Email='$Email' and Pass= '$Pass'");
    
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Name"]=$row["Name"];
        $_SESSION["Email"]=$row["Email"];
        
        // header("Location:test.php");
        echo "success";
    }
    else{
        echo "invalid";
    }

?>
