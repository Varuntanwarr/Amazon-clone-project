<?php
session_start();
include_once("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $email=($_POST['email']);
    $password=($_POST['password']);
    //$name=$_POST['username'];
    //$mobileno=$_POST['number'];
   // $sql="SELECT*FROM userdetail WHERE email='{$email}' and password='{$password}'";
    $result=mysqli_query($con,"SELECT*FROM  `customers`  WHERE U_EMAIL='{$email}' and U_PASSWORD='{$password}'");
   if(!$result)
   {
    header("location:goback.php");
   }
   else if(mysqli_num_rows($result)>0)
   { 
    //$row=mysqli_fetch_assoc($result);
   // echo "user login";
   session_start();
    $_SESSION["email"]=mysqli_real_escape_string($con,$email);
    
     header("location:user.php");
   //if($row['email']===$email && $row['password']===$password)
    //{
    
    //$_SESSION['username']=$name;
     //header("location:profile.php");
   }

       else   
        {
        header("location:goback.php?error=incorrect username or password");
        }
    //}

}
 else   
     {
        header("location:goback.php?error=incorrect username or password");
        }
    
    
    
?>