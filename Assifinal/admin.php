<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./log.css">
</head>
<style>
body {
    overflow-y: hidden;
}

.login-box {
    margin-left: -27%;
}

.loggin {
    display: flex;
}

.intro p {
    margin-right: 40%;
    margin-left: 2%;
    font-size: 20px;
    line-height: 2;
}



.sigin p {
    color: #194569;
}

.submit {
    color: white;
}

.admin {
    margin-left: 80%;
    font-size: 80px;
}

.intro .p {
    color: #194569;
    font-size: 50px;
}

.coverimg img {
    width: 50%;
    height: 50%;
    margin-left: 50%;
    margin-top: 5%;
}
</style>

<body>
    <div class="loggin">


        <div class="login-box">
            <h2>Admin Login</h2>
            <form action="chkadmin.php" method="POST">
                <div class="user-box">
                    <input type="text" name="aidd">
                    <label style=" color: #194569;">Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="apwdd">
                    <label style=" color: #194569;">Password</label>
                </div>
                <div class="user-box">
                    <input type="email" name="aemaill">
                    <label style=" color:#194569;">Enter Gmail</label>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <input type="submit" name="submit" class="submit">



                </a>


            </form>
        </div>
    </div>
    <div class="coverimg"><img src="../Image/Typing-pana.png"></div>
</body>

</html>