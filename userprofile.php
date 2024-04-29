<?php
session_start();
//include_once("connection.php");
//include_once("connect.php");
$dbhost="localhost:4306";
 $dbusername="root";
 $dbPassword="";
 $dbName="users";
 $con=mysqli_connect($dbhost,$dbusername,$dbPassword,$dbName);
$userprofile=$_SESSION["email"];
//echo"welcome".$_SESSION["email"];

$result=mysqli_query($con,"SELECT*FROM  `customers`  WHERE U_EMAIL='$userprofile'");

$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> profile</title>
    </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        body{background-color:peachpuff;}

        a{text-decoration:none;}

        button{font-size:25px;
            height:40px;margin-left:200px;
        background-color:rosybrown;
    font-weight:bold;
border:1px solid orange;
border-radius:8px;}

.b1{font-size:25px;
            height:40px;margin-left:10px;
        
    font-weight:bold;
border:1px solid orange;
border-radius:8px;}

.b2{font-size:25px;
            height:40px;
        margin-left:10px;
        
    font-weight:bold;
border:1px solid orange;
border-radius:8px;}

.h_one{margin-left:200px;
color:black;
font-size:55px;
text-shadow:10px 1 black ;c}

.p1{
    margin-left:300px;
    font-size:30px;
    font-weight:bold;

}
p{
    margin-left:300px;
    font-size:20px;
}
h1{margin-left:200px;
    font-size:30px;
}
p{
    font-size:25px;
}
        </style>
    <body>
<br>

<h1 class="h_one">Hello...<?PHP
echo $row['U_NAME'];?></h1>

    <h1>welcome to Amazon...<i class="fa-solid fa-face-smile-wink" style="color: black; height:30px; width:30px"></i></h1>
<br><p class="p1">Your Email and Contact are:</p>
<p><b>Email:</b>&nbsp;&nbsp;<?php echo $row['U_EMAIL'];?></p>
<p><b>Contact no:</b>&nbsp;&nbsp;<?php echo $row['PHONE_NO'];?></p><br><br>
<a href="logout.php"><button>Logout</button></a>
<a href="updateform.php"><button class="b1">Update</button></a>
<a href="form.php"><button class="b2">Create Account</button></a>



</body>
</html>



