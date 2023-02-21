<!DOCTYPE>
<html lang="en">
<head>
    <title>USER LOGIN</title>
    <style>
        .main{
            border: 5px solid gray;
            background-color: grey;
            width: 30%;
            margin: auto;
            margin-top: 150px;
            padding: 10px;
        }
        input{
            font-size: 20px;
        }
    </style>
</head>
<body style="background-color: orangered;">
<div class="main">
<form action="user_insert.php" method="post" enctype="multipart/form-data">
    <div>
     u_name:--- <input type="text" name="u_name" placeholder="ENTER YOUR USERNAME" style="margin-left: 70px; ">
    </div>
    <div>address:--- <input type="text" placeholder="ENTER YOUR ADDRESS"  name="address" style="margin-left: 73px;"></div>
    <div>age:--- <input type="text" name="age" placeholder="ENTER YOUR AGE"  style="margin-left: 99px;"></div>
    <div>gender:--- <input type="text" name="gender" placeholder="ENTER YOUR GENDER"  style="margin-left: 78px;"></div>
    <div>mobile_number:--- <input type="number" name="mobile_number" placeholder="ENTER YOUR MOBILE NUMBER"  style="margin-left: 20px;"></div>
    <div>email_id:--- <input type="email" name="email_id" placeholder="ENTER YOUR EMAIL ID"  style="margin-left: 65px;"></div>
    <div>password:--- <input type="password" name="password" placeholder="ENTER YOUR PASSWORD"  style="margin-left: 61px;"></div>
    <div>c_password:--- <input type="password" name="c_password" placeholder="ENTER YOUR CONFORM PASSWORD"  style="margin-left: 46px;"></div>
    <div>image:--- <input type="file" name="photo"  style="margin-left: 145px;"></div>
    <div><input type="submit" name="submit" value="USER_SUBMIT" ></div>
     <div> <input type="reset" name="reset" value="USER_RESET">

</div>
    </form>
</div>
</body>
</html>