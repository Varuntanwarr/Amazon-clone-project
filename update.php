<?php
session_start();
$userprofile=$_SESSION['email'];
//include_once('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname=$_POST["username"]; 
    $uphone=$_POST["number"]; 

 $dbhost="localhost:4306";
 $dbusername="root";
 $dbPassword="";
 $dbName="users";
 $con=mysqli_connect($dbhost,$dbusername,$dbPassword,$dbName);
 $sql="UPDATE customers SET `U_NAME`='{$uname}',`PHONE_NO`='{$uphone}' WHERE `U_EMAIL`='{$userprofile}'";
 if($con->query($sql)===TRUE)
 {
 header("location:userprofile.php");
 }
 else
 {
     //header("location:goback.php");
 echo "error:".$sql."<br>".$con->error;
 }
 
 }
 
 ?>
 