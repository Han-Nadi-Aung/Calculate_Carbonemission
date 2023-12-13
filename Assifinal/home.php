<!DOCTYPE html>
<html lang="en">
<?php
            
include 'Connect.php';
 $sql = $ab->prepare("SELECT * FROM home");
$sql->execute();
session_start();
  
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"
        integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        integrity="sha512-BfgviGirSi7OFeVB2z9bxp856rzU1Tyy9Dtq2124oRUZSKXIQqpy+2LPuafc2zMd8dNUa+F7cpxbvUsZZXFltQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-HIgS+9XNzmruB+djz42Fp4KKbIelTzzk24IdDTw32hth1rAaKpgXvX8ejZ1Q2G2sCtPQ88zG8k3qj62gBsbM1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<style>
.navigation {
    margin-bottom: 65px;
}

.girdbox {
    display: grid;
    grid-template-columns: auto auto auto auto;
    max-width: 560px;
    margin-left: 50px;
    margin-right: 50px;
    column-gap: 130px;
}

.image {
    border-radius: 20px;
    cursor: pointer;
    box-shadow: 10px 10px 10px #555555;
}

.image:hover {
    scale: 1.1;
    box-shadow: 10px 10px 10px black;
}

.imagee img {
    margin-top: 0.1px;
    width: 40%;
    height: 100%;
    margin-left: 60%;
}

.first {
    background-color: white;
}

.cal span {
    color: blanchedalmond;
}

.adicon {
    margin-left: 600px;
    margin-right: 60px;

}
</style>

<body style="background-color:white;">
    <div class="navigation">
        <div class="m-4">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-4">
                <div class="container-fluid">
                    <a href="./Acchistory.php" class="cal d-flex">
                        <span class="material-symbols-outlined">
                            account_circle
                        </span>
                        <?php
                        
                        if(isset($_SESSION['u'])){
                            $username=$_SESSION['u'];
                            echo $username;
                        }
                      
        
                        ?>

                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="./home.php" class=" hlink active">Home</a>
                            <a href="./Calculationn.php" class=" hlink ">Calculation</a>
                            <a href="./Doc.php" class=" hlink">Documentation</a>
                            <a href="./admin.php" class="adicon"><span class="material-symbols-outlined">
                                    admin_panel_settings
                                </span></a>

                        </div>
                        <div class="navbar-nav me-4">
                            <a href="./logout.php" class="login" style="margin-right:-20px;">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <section>
        <div class="first">
            <div class="imagee">

                <img src="../Image/2801710_17368.jpg" alt="" class="earth">
            </div>
            <div class="text" style="font-size:49px;">
                <div class="one" style="font-size: 2.2rem;">Want to learn emission of carbon dioxide on video streaming?
                </div>
                <div class="two" style=" font-size: 1.6rem;">Several video streaming platforms are provided below !
                </div>
            </div>
        </div>
    </section>
    <section class="mvv">
        <p class="mv">Mission & Vision<span class="material-symbols-outlined">
                tips_and_updates
            </span> </p>
        <div class="txtmv">
            <p class="mission">This project leads for providing how much time does the user stream the vide either from
                online or from offline. Make the user more realize how does they emmit how much amount of carbon dioxide
                per minute. Provide the calculator related with
                various video streaming platforms. </p>
            <p class="vision">Streaming videos are growingly over the world.These connect with networks, data centers,
                energy usage and others. Streaming top ten movies on Netflix platforms is totally same as 1.13 billion
                miles driving from Earth to Saturn by just estimation.
            </p>
        </div>

    </section>
    <div class="boxx">

        <div class="titt">Video Streaming Platforms with description<span class="material-symbols-outlined">
                videocam
            </span></div>

        <div class="pline"></div>



        <div class="girdbox">
            <?php
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                            ?>
            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            <form method="post" action="homedetail.php">
                                <input type="hidden" name="img" value="<?php echo $File; ?>">
                                <a href="./homedetail.php?deid=<?php echo $HID;?>"><img
                                        src="../Image/<?php echo $Himg;?>" alt="Avatar" height="250" width="250"
                                        class="image"></a>
                                <input type="hidden" name="name" value="<?php echo $Hname;?>">
                                <div class="tit">
                                    <?php echo $Hname; ?><br>

                                </div>
                                <div class="btn">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        }  
                    ?>
        </div>
    </div>
</body>
<br>
<br>
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a href="https://www.facebook.com/YourFacebookPage/" class="fa fa-facebook"></a>

            <!-- Twitter -->
            <a href="https://twitter.com/YourTwitterHandle" " class=" fa fa-twitter "></a>
                    <a href=" https://plus.google.com/+YourGoogleProfile/ " class=" fa fa-google "></a>
                    <a href=" https://www.instagram.com/YourInstagramUsername/ " class=" fa fa-instagram "></a>

                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class=" text-center p-3 " style=" background-color: rgba(0, 0, 0, 0.2); ">

                <a class=" text-white " href=" https://mdbootstrap.com/ " style=" text-decoration: none; ">TechnoCo.</a>
            </div>
            <!-- Copyright -->
        </footer>

</html>