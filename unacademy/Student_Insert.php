<?php
include_once "connection.php";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Age=$_POST["Age"];
$Subject=$_POST["Subject"];
$Email=$_POST["Email"];
$Mobile=$_POST["Mobile"];
$Pass=$_POST["Pass"];

$T_Id=$_POST["T_Id"];
$files=$_FILES["Pic"];
$filename=$files['name'];
$filetmp=$files['tmp_name'];

$destinationfile='upload/'.$filename;
move_uploaded_file($filetmp,$destinationfile);

$sql="INSERT INTO student VALUES ('$Id','$Name','$Age','$Subject','$Email','$Mobile','$destinationfile','$T_Id','$Pass')";
$result=mysqli_query($conn,$sql);

if($result){
    // echo "success";
    header("Location:Student_Insert.php");
}

?>