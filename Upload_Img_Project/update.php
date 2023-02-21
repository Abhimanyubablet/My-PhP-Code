<?php
  include_once 'connection.php';
  $Id=$_GET['Id'];
  $sql="SELECT * FROM mystudent WHERE Id ='$Id'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
      
    <table style="width: 18%; margin: auto; margin-top: 100px;" border="2">
    
        <form  action="student_update.php" method="post" enctype="multipart/form-data">
           
                <tr>
                <td>Id</td>
                <td ><input name="Id" type="text" value="<?php echo $row["Id"]; ?>"></td>
                </tr>
                <tr>
                <td>Name</td>
                <td><input name="Name" type="text" value="<?php echo $row["Name"]; ?>"></td>
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
                <td>Update</td> 
                <td><input type="submit" name="submit" value="SUBMIT" ></td>
                </tr>  
        </form>
    </table>

    <a classname="m-auto" href="view.php ">Tap here for <button> View </button></a>
</body>
</html>
<?php
    }
}
?>