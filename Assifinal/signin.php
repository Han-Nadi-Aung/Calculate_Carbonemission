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
    overflow-x: hidden;
    overflow-y: hidden;
}

h4 {
    color: #194569;
    margin-left: 15px;
    row-gap: 12px;

}

.signin {
    display: flex;
}

.login-box {
    margin-left: 390px;
}

img {
    border-right: 5px solid #194569;
}

.submit {
    color: aliceblue;
}
</style>

<body>
    <div class="signin">
        <div class="pic">
            <img src="../Image/33770913_2208.q703.029.F.m004.c7.FP movie film cinema poster banner.jpg"
                style="width:100vh;height:100vh;">
        </div>
        <div class="login-box">
            <h2>Sign up</h2>
            <h4><b>{After creating account,please click SUBMIT and login again.}</b></h4>
            <form action="chksiginup.php" method="POST">
                <div class="user-box">
                    <input type="text" name="cname" required="">
                    <label style=" color:  #194569;">Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="cpwd" required="">
                    <label style=" color: #194569;">Password</label>
                </div>
                <div class="user-box">
                    <input type="email" name="cemail" required="">
                    <label style=" color: #194569;">Email</label>
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

</body>

</html>