<?php
session_start();
include_once "connection.php";


    extract ($_POST);
    
    $sql=mysqli_query($conn,"SELECT * FROM faculties WHERE  Name='$Name' and Pass= '$Pass'");
    
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        
        $_SESSION["Name"]=$row["Name"];
       
        
        // header("Location:test.php");
        echo "success";
    }
    else{
        echo "invalid";
    }

?>