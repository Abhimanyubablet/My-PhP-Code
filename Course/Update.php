<?php
  include_once 'connection.php';
  $Id=$_GET['Id'];
  $sql="SELECT * FROM user2 WHERE Id ='$Id'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body> 
      
    <table style="width: 18%; margin: auto; margin-top: 100px;" border="1">
    
        <form  action="action.php" method="post" enctype="multipart/form-data">
           
                <tr>
                <td>Id</td>
                <td ><input name="Id" type="text" value="<?php echo $row["Id"]; ?>"></td>
                </tr>
                <tr>
                <td>Name</td>
                <td><input name="Name" type="text" value="<?php echo $row["Name"]; ?>"></td>
                 </tr>
                 
                 <tr>
                <td>Email</td>
                <td><input name="Email" type="text" value="<?php echo $row["Email"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Password</td>
                <td><input name="Pass" type="text" value="<?php echo $row["Pass"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Mobile</td>
                <td><input name="Mobile" type="text" value="<?php echo $row["Mobile"]; ?>"></td>
                 </tr>

                 <tr>
                 <td>Profile Pic</td> 
                 <td>
                    <img class="pic" src="<?php echo $row["Image"]; ?>" alt="">
                    <br>
                    <input type="file" name="photo" value="<?php echo $row['Image'];?>"  style="margin-left: 145px;">
                </td>
                 </tr>

                 <tr>
                <td>UserId</td>
                <td><input name="UserId" type="text" value="<?php echo $row["UserId"]; ?>"></td>
                 </tr>
                <tr>

                <td>Update</td> 
                <td><input type="submit" name="submit" value="SUBMIT" ></td>
                </tr>  
        </form>
    </table>

   
</body>
</html>
<?php
    }
}
?>