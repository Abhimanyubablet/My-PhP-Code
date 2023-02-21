<?php
session_start();
$Email = $_SESSION['Email'];
// if(empty($_SESSION['Email'])){
// header("Location: login.php");
// }

// $result = mysql_query("SELECT * FROM student_details");
// echo "Logged in as ". $_SESSION['Email'];
// echo "<br />";
// while($row = mysql_fetch_array($result))
// {
// echo $row['Email'] ;
// echo "<br />";
// }
include_once "Connection.php";
if(isset($_POST['save'])){
    
    mysqli_query($conn,"UPDATE student_details SET
       Id='".$_POST["Id"]."',
       Name='".$_POST["Name"]."',
       Email='".$_POST["Email"]."',
       Adhar='".$_POST["Adhar"]."',
       Contact='".$_POST["Contact"]."'

       WHERE Id='".$_GET ["Id"] ."'");

       $m=header("Location:Login.php");
}
extract($_POST);
$result=mysqli_query($conn,"SELECT * FROM student_details  WHERE Id= '".$_GET["Id"] ."'");

$row=mysqli_fetch_array($result);

if(is_array($row))
    {
        $_SESSION["Id"] = $row["Id"];
        $_SESSION["Email"]=$row["Email"];
        header("Location: update.php");   
    }

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
                <td>Adhar</td>
                <td>Contact</td>
                <td>Update</td>
            </tr>
           
                 <tr>
                    <td><input name="Id" type="text" value="<?php echo $row["Id"]; ?>"></td>
                    <td><input name="Name" type="text" value="<?php echo $row["Name"]; ?>"></td>
                    <td><input name="Email" type="text" value="<?php echo $row["Email"]; ?>"></td>
                    
                    <td><input name="Adhar" type="text" value="<?php echo $row["Adhar"]; ?>"></td>
                    
                    <td><input name="Contact" type="text" value="<?php echo $row["Contact"]; ?>"></td>

                    <td><input type="submit"></td>
                 </tr>
                
        </form>
    </table>
</body>
</html>