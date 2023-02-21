
<?php
include_once "Connection.php";

if(count($_POST)>0){
    mysqli_query($conn,"UPDATE science SET
       Id='".$_POST["Id"]."',
       Name='".$_POST["Name"]."',
       Email='".$_POST["Email"]."',
       Pass='".$_POST["Pass"]."',
       Contact='".$_POST["Contact"]."',
       Address='".$_POST["Address"]."'

       WHERE Id='".$_GET ["Id"] ."'");

       $m=header("Location:Login.html");
}
   $result=mysqli_query($conn,"SELECT * FROM science  WHERE Id= '".$_GET["Id"] ."'");

   $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border="2">
        <form action="" method="post">
            <?php
            if(isset($m)){
                echo $m;
            }
            ?>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Contact</td>
                <td>Address</td>
                <td>Update</td>
            </tr>
           
                 <tr>
                    <td><input name="Id" type="text" value="<?php echo $row["Id"]; ?>"></td>
                    <td><input name="Name" type="text" value="<?php echo $row["Name"]; ?>"></td>
                    <td><input name="Email" type="text" value="<?php echo $row["Email"]; ?>"></td>
                    
                    <td><input name="Pass" type="text" value="<?php echo $row["Pass"]; ?>"></td>
                    
                    <td><input name="Contact" type="text" value="<?php echo $row["Contact"]; ?>"></td>
                    <td><input name="Address" type="text" value="<?php echo $row["Address"]; ?>"></td>

                    <td><input type="submit"></td>
                 </tr>
                
        </form>
    </table>
</body>
</html>