<?php
  include_once 'Connection.php';
   $Id=$_POST['Id'];
   $Name=$_POST['Name'];
   $files=$_FILES['Photo'];



   $filename=$files['name'];
   $filetmp=$files['tmp_name'];
   $destinationfile='image/'.$filename;
   move_uploaded_file($filetmp,$destinationfile);

$sql="UPDATE `student` SET `Name`='$Name',`Image`='$destinationfile' WHERE `Id`='$Id'";
  
if(mysqli_query($conn,$sql)){
    
    header('location:View.php');
}

else{
    echo "NOT UPDATE";
}
mysqli_close($conn);

?>