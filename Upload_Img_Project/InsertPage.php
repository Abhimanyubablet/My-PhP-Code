<?php
$server="localhost";
$user="root";
$password="";
$dbname="upload";

$conn=mysqli_connect($server,$user,$password,$dbname);

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$files=$_FILES['file'];


$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];


$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){

    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO mystudent VALUES ('$Id','$Name','$destinationfile')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location:Sign_up.html");
    }
    
}

?>