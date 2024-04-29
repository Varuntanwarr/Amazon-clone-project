<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['number'];
 $dbhost="localhost";
 $dbusername="root";
 $dbPassword="";
 $dbName="users";
 $con=mysqli_connect($dbhost,$dbusername,$dbPassword,$dbName);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
    //header("location:goback.php");
}
else
{
    $sql="INSERT INTO customers (U_NAME,U_EMAIL,U_PASSWORD,PHONE_NO) values ('$name','$email','$password','$phone')";
if($con->query($sql)===TRUE)
{
header("location:signin.php");
}
else
{
    //header("location:goback.php");
echo "error:".$sql."<br>".$con->error;
}
$con->close();
}
}

?>