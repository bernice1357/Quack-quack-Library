<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="register.css"/>
        <title>Register</title>
        <style>
            .button{
                font-family: Georgia;
                position: absolute;
                top: 345px;
                left: 400px;
                font-size: 15px;
                width: 70px;
                color: #FFFFFF;
                border-radius: 10px;
                background-color: #000000;
                border: 1px solid #000000;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <h1>Register</h1>
            <form action="register_t.php" method="post">
                <h3>Name</h3>
                <input type="text" name="username"> 
                <h3>Account</h3>
                <input type="text" name="account"> 
                <h3>Password</h3>
                <input type="password" name="password"> 
                <br><br>Already have a account? <a href="Login.php">Click here</a>             
                <button class="button" type="submit" onclick="location.href='register_t.php'">Register</button>              
            </form>
        </div>

        <input type="button" value="Home" onclick="location.href='Home.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:relative; left:800px; top:40px; color:#FFFAF0; border:none"/>

        <input type="button" value="Collection" onclick="location.href='Search.php'"; style="font-family:Georgia; background-color: transparent; width:160px;height:50px;font-size:25px;position:relative; left:840px; top:40px; color:#FFFAF0; border:none"/>

        <input type="button" value="Login/Register" onclick="location.href='Login.php'"; style="font-family:Georgia; background-color: transparent; width:180px;height:50px;font-size:25px;position:relative; left:890px; top:40px; color:#FFFAF0; border:none"/>     
    </body>
</html>
