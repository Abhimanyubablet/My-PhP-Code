<?php
$server="localhost";
$user="root";
$password="";
$dbname="abhitech";

$conn=mysqli_connect($server,$user,$password,$dbname);

if(isset($_POST['insertdata'])){
$Id=$_POST["Id"];
$Name=$_POST["Name"];
$UserId=$_POST["UserId"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];
$Address=$_POST["Address"];
$City=$_POST["City"];
$State=$_POST["State"];
$files=$_FILES['Photo'];


$filename=$files['name'];
$filetmp=$files['tmp_name'];





    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO people VALUES ('$Id','$Name','$UserId','$Email','$Pass','$Address','$City','$State','$destinationfile')";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo " <script>alert (" You have Created an Account Successfully")</script>";
        header("Location:AbhiTech.html");
        
    }
    
}

?>