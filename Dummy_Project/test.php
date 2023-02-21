<?php
session_start();
echo "<b>welcome Boys</b> " .$_SESSION["Email"];
include_once "Connection.php";
$sql=mysqli_query($conn,"SELECT * FROM student_details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="logout.php">Logout</a>
<h1></h1>
<form action=""> Tap her for
          <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
               <tr>
                <td><a href="Up.php? Id= <?php echo $row["Id"]; ?>">Edit</a></td>
               </tr>
               <?php
                $i++;
            }
            ?>.
    </form>
</body>
</html>