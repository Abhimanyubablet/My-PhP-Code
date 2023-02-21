<?php
$server="localhost";
$user="root";
$password="";
$dbname="course";

$conn=mysqli_connect($server,$user,$password,$dbname);

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];
$Mobile=$_POST["Mobile"];
$files=$_FILES['file'];
$UserId=$_POST["UserId"];


$filename=$files['name'];
$filetmp=$files['tmp_name'];


    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO user2 VALUES ('$Id','$Name','$Email','$Pass','$Mobile','$destinationfile','$UserId')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location:Sign_up.html");
    }
    


?>