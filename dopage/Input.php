<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Document</title>
</head>
<body>
    <table>
        <form action="InsertPage.php" method="post">
            <tr>
                <td>
                    <input type="text" name="id" placeholder="Id" required />
                   </br>
                   <input type="text" name="name" placeholder="Name" required />
                   </br>
                   <input type="email" name="email" placeholder="Email" required />
                   </br>
                   <input type="text" name="contact" placeholder="contact" required />
                   </br>
                   <input type="text" name="adhar" placeholder="adhar" required />
                   </br>
                   <input type="text" name="pan" placeholder="pan" required />
                   <input type="submit"/>
                   
                </td>
            </tr>
        </form>
    </table>
    <?php
    include_once "Mydel.php";
    ?>
</body>
</html>