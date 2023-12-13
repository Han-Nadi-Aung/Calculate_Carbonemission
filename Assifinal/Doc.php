<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <title>Documentation</title>
</head>
<style>
body {
    overflow-x: hidden;
    min-height: 100vh;
    font-size: 25px;
}

.cmpy {
    margin-top: -100px;
}

.cover {
    width: 89.5vh;
    height: 75vh;
    margin-top: 70px;
    margin-left: 50%;
    margin-bottom: -11%;
}

.first {
    width: 70vh;
    height: 40vh;

    margin-left: 100px;
    border-radius: 10px;
    box-shadow: 7px 4px 10px grey;
}

.titt {
    text-align: center;
    margin-top: 12px;
    margin-bottom: 6px;
}

.firr {
    display: flex;
}

.firr p {
    margin-top: 55px;
    text-align: justify;
    margin-right: 20px;
}

.recovery ul {
    margin-top: 50px;
}

.navigation {
    font-size: 26px;
}

.fff {
    margin-top: 20px;
    width: 30%;
    height: 30%;
}

.cmpy {
    margin-top: -20%;
}

.one {
    margin-left: 22%;
}

.cal span {
    color: blanchedalmond;
}


.adicon {
    margin-left: 600px;
    margin-right: 60px;

}

.mb-4 a {
    padding: 5px;
}
</style>

<body>
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
                        <div class="navbar-nav ms-auto">
                            <a href="./logout.php" class="login">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <div class="coverphoto">
        <img src="../Image/12698410_Employees brainstorming during coffee break.jpg" alt="" class="cover">
        <div class="text" style="font-size:45px;">
            <div class="one" style="font-size: 2.2rem; margin-top:90px;">TechnoCo.
            </div>
            <div class="two" style=" font-size: 1.6rem; margin-top:90px;">Thank you for your interest to our company
            </div>
        </div>
    </div>

    <section class="cmpy">
        <div>
            <div class="titt">
                Our Company

            </div>
            <div class="firr">
                <img src="../Image/Captuqqqre.PNG" alt="" class="first">
                <p style="margin-left:30px;">
                    TechnoCo. is operated as technology company. This company make projects on complex problems to find
                    out the result in the simplest way and give out the results to users. One of our latest project is
                    focusing for the calculation of carbon dioxide on video
                    streaming based on a minute. Our Company has many employees who can follow the latest technology.
                    They add their researches and invest certain duration on project.
                </p>
            </div>

        </div>
    </section>
    <section class="tag">
        <div>
            <div class="titt">
                Our Tagline

            </div>
            <div class="firr">

                <p style="font-weight: bold;margin-top:100px;margin-left:10px; font-size:25px;">
                    Empowering Innovation Through Code with updated technology on complex solutions.
                </p>
                <img src="../Image/Cqqapture.PNG" alt="" class="first">

            </div>

        </div>
    </section>
    <section class="">
        <div>
            <div class="titt">
                Video streaming

            </div>
            <div class="firr">


                <img src="../Image/Cadddpture.PNG" alt="" class="fff">
                <p>
                    Video Streaming become popular within decade. People can browse and learn many things from watching
                    videos. Videos can also support in one of the fields to eduction purpose and relaxation. As
                    technology become populated, streamers and vloggers influence
                    end-user to persuade to stream videos. Some of the users stream music or mtvs who they stan with
                    when their idols upload new videos on social media platforms. Even technology become popular in
                    recent years, end-users can stream videos
                    when they get the access of internet. If it is downloaded from certain video streaming platforms, it
                    can be stream offline.

                </p>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <section>
        <div class="titt">
            Disadvantages of video streaming<span class="material-symbols-outlined">
                globe_asia
            </span>
        </div>
        <ul class="dis" style="margin-top:30px;">
            <li><span class="material-symbols-outlined">
                    push_pin
                </span>Emits numerous amount of carbon dioxide in grams within an hour.</li>
            <li><span class="material-symbols-outlined">
                    push_pin
                </span>Streaming videos depending on numerous network devices as they emits between 3% and 4% of
                footprint of carbon dioxide to the global.</li>
            <li><span class="material-symbols-outlined">
                    push_pin
                </span>Depending on Internet platforms which are responsible for about 2% of carbon dioxide emission
                upon planet.</li>
            <li><span class="material-symbols-outlined">
                    push_pin
                </span>Specifically, it emits around 55 grams of carbon dioxide for an hour while streaming videos.</li>
        </ul>

    </section>
    <section>
        <div class="titt">
            Recovery Facts <span class="material-symbols-outlined">
                compost
            </span>
        </div>
        <div class="recovery">
            <div>
                <ul>
                    <li>
                        It is needed to plant trees which is the most valuable task for recovering as trees are
                        absorbing carbon dioxide.Moreover, they clean atmosphere and reduce air pollution and elaborate
                        much more oxygen.

                    </li>
                    <li>
                        Develop the project by group as it more effective in sharing knowledge and teaching people about
                        emission of carbon dioxide from video streaming and how they can impact on global warming.
                    </li>
                    <li>Calcuate how much screen time on video streaming has been spent during that time it is provided
                        how much carbon dioxide being emitted in grams to the atmosphere.</li>
                </ul>
            </div>
            <div class="firr">
                <img src="../Image/carbon-footprint-hero-df3beb3.jpg" alt="" class="first"
                    style="margin-right:100px;margin-top:50px;">
            </div>
        </div>
    </section>
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