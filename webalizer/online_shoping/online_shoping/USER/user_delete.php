<?php
  include_once 'db_connect.php';
  $u_id=$_GET['u_id'];
  
  $sql="DELETE FROM user WHERE u_id ='$u_id'";
  if(mysqli_query($conn,$sql)){
    echo "delete is successful";
  }
  else{
    echo "error";
  }
  

?>