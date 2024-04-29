<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>form</title>
        <style>
            img{height:50px;
            width:120px;
        margin-left:660px;
    margin-top:20px;}
    fieldset{height:570px;
    width:22%;
margin-left: 550px;}
input{height:20px;
width:95%;}
.in_one{height:30px;
width:98%;
background-color:rgb(227, 157, 27);
font-size:20px;
border:1px solid orange;
border-radius:5px;}
a{color:blue;
text-decoration:none;}
        </style>
    </head>
    <body>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpXjnOH2eCxZPBjon7ewyY8pDdIqg0iUltkzRPVN5Pe0BTzNSJ">
        <form method="post" action="connection.php">
            <fieldset>
            <h1>Create Account</h1>
            Your name<br>
            <input type="text" name="username"/><br><br>
            Email<br>
            <input type="email" id="email" pattern=".+@gmail.com" size="30" required  name="email"/><br><br>
            Paasword<br>
            <input type="password" name="password" pattern="(?=.*\d)(?=.*[\W_]).{7,}" title="Minimum of 7 characters. Should have at least one special character and one number."/><br><br>
            Mobile no<br>
            <input type="number" name="number" required /><br><br>
            
            <input class="in_one" type="submit" value="continue" name="sub"/><br><br>
            <p>By creating an account, you agree to Amazon's <a href="help.php">Conditions of Use</a> and <a href="help.php">Privacy Notice.</a>
            </p>
            <br>Buying for work?<br>
                <a>Create a free business account</a><br><br>
                Already have an account? <a href="signin.php">Sign in</a>
        
        </fieldset>
        </form>
    </body>
</html>