<!Doctype html>
<html lang="en">
    <head>
        <title>fom</title>
        <style>
.h_one{width:95%;
height:8%;
border:2px solid blue;
border-radius:2px;}
.h2{width:96%;
height:8%;
background-color: rgb(243, 167, 27);

font-size:23px;
border: 1px solid rgb(255, 185, 55);
border-radius:8px;}
.h3{color:blue;}
fieldset{margin-left: 500px;
margin-top:10px;}
.p1{margin-left:630px;}
.b1{margin-left:500px;
width:27%;
height:4%;
border-radius: 10px;
background-color:white;
border:1px solid gray}
.a2{margin-left: 520px;
color:blue;}
.a1{color:blue;}
p{margin-left:520px ;}
img{height:50px;
            width:120px;
        margin-left:610px;
    margin-top:5px;}
a{
    text-decoration:none;
}
        </style>
    </head>
    <body>
        
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpXjnOH2eCxZPBjon7ewyY8pDdIqg0iUltkzRPVN5Pe0BTzNSJ">
        <form method="post" action="usersin.php">
    <fieldset style="height:60%;width:25%;">
        <h1>
            Sign in
        </h1>
Enter Email <br>
<input class="h_one" type="text" id="email" name="email" pattern=".+@gmail.com" size="30" required/><br><br>
Enter Password
<input class="h_one" type="password" name="password" pattern="(?=.*\d)(?=.*[\W_]).{7,}" title="Minimum of 7 characters. Should have at least one special character and one number."/><br><br>
<input type="submit" class="h2" value="Continue"/>
<br><br>

By continuing, you agree to Amazon's <a class="h3" href="help.php">Conditions of 
    Use</a> and <a class="h3" href="help.php">Privacy Notice</a><br><br>
        <a>Need help?</a><br><br>
    <hr style="color:gray"> <br>
    Buying for work?<br>
    <a class="h3">Shop on amazon business</a>
    </fieldset>
    
</form><p class="p1">New to Amazon?</p>

<a href="form.php"> <button class="b1"> Create your Amazon Account </button> </a>
    
    <br>
<hr style="color:gray;"><br>

    
        <a class="a2" href="help.php">Conditions of use</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="a1" href="help.php">Privacy Notice</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="a1" href="help.php">help</a>
    
</div>
<p>© 1996-2024, Amazon.com, Inc. or its affiliates</p>
</body>
</html>