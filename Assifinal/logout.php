<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        color: black;
        background-image: url('../Image/wepik-export-20230420071253.png');
        background-size: 200.5vh 100vh;
        background-repeat: no-repeat;
    }
    
    .logout {
        margin-left: 35%;
        margin-top: 20%;
    }
    
    .one {
        margin-left: 30px;
    }
    
    button {
        margin-left: 500px;
        margin-top: 250px;
    }
    
    a {
        text-decoration: none;
    }
    
    .login {
        margin-left: 90%;
        border: 1px solid #194569;
        background-color: #194569;
        padding: 20px;
        text-decoration: none;
        color: aliceblue;
        border-radius: 15px;
        box-shadow: 3px 4px 14px black;
    }
</style>

<body>

    <div class="logout">

    </div><br>
    <br> <br> <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> <br> <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br>
    <a href="./cuslogin.php" class="login">Login</a>
    <?php
            session_start();
    session_destroy();
    ?>
</body>

</html>