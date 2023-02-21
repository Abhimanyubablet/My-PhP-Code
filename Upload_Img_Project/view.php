<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM mystudent");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <table border="2"" style="margin:auto; ">
        <form action=""> 
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Profile pic</td>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
                 <tr>
                    <td class="my" ><?php echo $row["Id"]; ?></td>
                    <td class="my" ><?php echo $row["Name"]; ?></td>
                    <td ><img class="pic"
                     src="<?php echo $row["Image"];  ?>" alt=""></td>

                    
                 </tr>
                <?php
                $i++;
            }
            ?>
        </form>
    </table>
</body>
</html>