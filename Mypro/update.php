<?php
include_once "connection.php";
if(count($_POST)>0)
{
 mysqli_query ($conn, "UPDATE student SET
    Id='".$_POST["Id"]."',
    Name='".$_POST["Name"]."',
    Email='".$_POST["Email"]."',
    Pass='".$_POST["Pass"]."'
    
    WHERE Id='".$_GET["Id"]."'");
    $m=header("Location:Login.html");
}
$result=mysqli_query($conn,"SELECT * FROM student WHERE Id='".$_GET["Id"]."'");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <table border='2'>
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
                <td>Pass</td>
                <td>Update</td>
            </tr>
           

            <tr>
                 <td><input type="text" name="Id" value="<?php echo $row["Id"] ; ?>" ></td>
                 <td> <input type="text" name="Name" value="<?php echo $row["Name"] ; ?>" ></td>
                 <td> <input type="text" name="Email" value="<?php echo $row["Email"] ; ?>" ></td>
                 <td> <input type="text" name="Pass" value="<?php echo $row["Pass"] ; ?>" ></td>
                 <td> <input type="submit"  >
                 
            </tr>
        </form>
    </table>
</body>
</html>