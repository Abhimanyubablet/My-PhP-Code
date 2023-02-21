<?php
session_start();
echo "<b> Welcome in school </b>" . $_SESSION["Email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<h1></h1>
<a href="logout.php"><button>logout</button></a>

<a href="profile.php">
    <button>Update Profile</button>
</a>
</body>
</html>