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
.login-box {
    margin-left: 30%;
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

h2 {
    margin: 10% 15% 3% 15%;
    font-size: 50px;
    color: #194569;
}

.sigin p {
    color: #194569;
}

.submit {
    color: white;
}
</style>

<body>
    <div class="loggin">
        <div class="intro">
            <h2>
                Welcome from TechnoCo.!!!
            </h2>
            <p class="qq">
                <b>Have you considered the impact of carbon dioxide emissions on the Earth???</b>
            </p>
            <p> At
                <b>TechnoCo.</b>,
                we
                have
                developed
                a tool that can help you calculate the carbon footprint of your video streaming activities on related
                platforms. If you want to know how much carbon dioxide you have emitted from video streaming and receive
                tips on reducing your carbon footprint, our website can assist you. Simply input the numerical data from
                the related platforms for an estimation.
            </p>
        </div>

        <div class="login-box">
            <h2>Login</h2>
            <form action="chkloginexample.php" method="POST">
                <div class="user-box">
                    <input type="text" name="cidd">
                    <label style=" color: #194569;">Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="cpwdd">
                    <label style=" color: #194569;">Password</label>
                </div>
                <div class="user-box">
                    <input type="email" name="cemaill">
                    <label style=" color:#194569;">Enter Gmail</label>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <input type="submit" name="submit" class="submit">



                </a>
                <div class="sigin">
                    <p>Don't you have an account? Then, Sign Up</p>
                    <a href="./signin.php" class="siginn">Sign Up</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>