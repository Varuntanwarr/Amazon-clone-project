<?php
//include_once("connnection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
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
echo "connect successful";
}
}

?>