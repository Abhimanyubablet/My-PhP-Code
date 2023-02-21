<?php
session_start();
echo "<b>welcome Boys</b> " .$_SESSION["Email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<a href="logout.php">logout</a>
<br>
<p></p>
 <a href="Profile.php"><button>Profile Update</button></a>

    
</body>
</html>