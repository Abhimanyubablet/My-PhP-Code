<?php
$server="localhost";
$user="root";
$pass="";
$dbname="college";

 $conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
    echo "not connected";
}
if(isset($_POST['save']))
{
    $user_id=$_POST["user_id"];
     $password=$_POST["password"]; 
   
    
    $sql=mysqli_query($conn,"SELECT * FROM student WHERE User_id='$user_id' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        
        echo "welcome";
    }
    else
    {
        echo "Invalid User Id/Password";
    }
}
?>
