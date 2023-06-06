<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT faculties.T_Name,faculties.Contact,faculties.Subject,faculties.PIC,
student.Name, student.Email ,student.Pic
FROM faculties
INNER JOIN student ON faculties.T_Id = student.T_Id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .pic{
            width: 100px;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <table border="2"" style="margin:auto; ">
        <form action=""> 
            <tr>
               
                <td>T_Name</td>
                <td>Contact</td>
                <td>Subject</td>
                <td>PIC</td>
                <td>Name</td>
                <td>Email</td>
                <td>Pic</td>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
                 <tr>
                    

                    <td class="my" ><?php echo $row["T_Name"]; ?></td>

                    <td class="my" ><?php echo $row["Contact"]; ?></td>
                    
                    <td class="my" ><?php echo $row["Subject"]; ?></td>

                    <td ><img class="pic"
                     src="<?php echo $row["PIC"];  ?>" alt=""></td>

                     <td class="my" ><?php echo $row["Name"]; ?></td>

                     <td class="my" ><?php echo $row["Email"]; ?></td>

                     <td ><img class="pic"
                     src="<?php echo $row["Pic"];  ?>" alt=""></td>


                 </tr>
                <?php
                $i++;
            }
            ?>
        </form>
    </table>
</body>
</html>