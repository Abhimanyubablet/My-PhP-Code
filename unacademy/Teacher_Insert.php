<?php
include_once "connection.php";

$T_Id=$_POST["T_Id"];
$T_Name=$_POST["T_Name"];
$Age=$_POST["Age"];
$Contact=$_POST["Contact"];
$Subject=$_POST["Subject"];
$Pass=$_POST["Pass"];
$files=$_FILES["PIC"];
$filename=$files['name'];
$filetmp=$files['tmp_name'];

$destinationfile='upload/'.$filename;
move_uploaded_file($filetmp,$destinationfile);

$sql="INSERT INTO faculties VALUES ('$T_Id','$T_Name','$Age','$Contact','$Subject','$destinationfile','$Pass')";
$result=mysqli_query($conn,$sql);
 
if($result){
    // echo "success";
    header("Location:Teacher_Insert.php");
    
}

?>