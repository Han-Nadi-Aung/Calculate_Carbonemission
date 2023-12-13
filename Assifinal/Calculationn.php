<!DOCTYPE html>
<html lang="en">
<?php
   session_start();      
include 'Connect.php';
 $sql = $ab->prepare("SELECT * FROM home");
$sql->execute();
  
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
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
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        integrity="sha512-BfgviGirSi7OFeVB2z9bxp856rzU1Tyy9Dtq2124oRUZSKXIQqpy+2LPuafc2zMd8dNUa+F7cpxbvUsZZXFltQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-HIgS+9XNzmruB+djz42Fp4KKbIelTzzk24IdDTw32hth1rAaKpgXvX8ejZ1Q2G2sCtPQ88zG8k3qj62gBsbM1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<style>
.textcal {
    margin-top: 30%;
    z-index: 100;
    color: #194569;
    margin-left: -80%;
}

.earth {
    margin-top: 40px;
}

.one {
    margin-top: 44px;
    margin-left: -1%;
}

.two {
    margin-top: 40px;
}

.navigation {
    margin-bottom: 65px;
}



.image {
    border-radius: 20px;
    cursor: arrow;
    box-shadow: 10px 10px 10px #555555;
}

.image:hover {
    scale: 1.1;
    box-shadow: 10px 10px 10px black;
}

.imagee {
    margin-top: -2%;
}

.minutes {
    width: 55%;
    border-radius: 20px;
    border: 1px solid #555555;
    text-align: center;
    padding-right: 10px;
    margin-right: 10px;
}

.computing button {
    border: 1px solid #194569;
    background-color: #194569;
    color: #e6e6e6;
    width: 8%;
    height: 8%;
    padding: 10px;
    font-size: 20px;
    border-radius: 5px;
    margin-left: 85%;
    margin-bottom: 10%;
    box-shadow: 3px 10px 10px grey;
}

.imagee img {
    margin-top: 0.1px;
    width: 40%;
    height: 100%;
    margin-left: 60%;
}

.computing button:hover {
    scale: 1.1;
    box-shadow: 10px 15px 15px black;
}

.gridd {
    display: grid;
    grid-template-columns: auto auto auto;
    max-width: 960px;
    margin-left: 220px;
    column-gap: 220px;
}

.output {
    margin-top: 30px;
    margin-left: 28%;
    font-size: 25px;
    color: #194569;
}

.outputt {

    margin-left: 13%;
    font-size: 25px;
    color: #194569;

}

.submit {
    border: 1px solid #194569;
    background-color: #194569;
    color: #e6e6e6;

    height: 8%;
    padding: 10px;
    font-size: 20px;
    border-radius: 5px;
    margin-left: 85%;
    margin-bottom: 10%;
    box-shadow: 3px 10px 10px grey;
}

.output-text {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.cal span {
    color: blanchedalmond;
}

.cal button {
    width: 120px;

}

.adicon {
    margin-left: 600px;
    margin-right: 60px;

}

.oututt {
    margin-left: 60%;
    font-size: 17px;
    color: #194569;
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
    <section>
        <div class="first">
            <div class="imagee">

                <img src="../Image/3530034_64613.jpg" alt="" class="earth">
            </div>
            <div class="textcal" style="font-size:45px;">
                <div class=" one" style="font-size:2.1rem;">Want to calculate emission of carbondioxide on video
                    streaming?</div>
                <div class="two" style=" font-size: 1.5rem;">You can calculate several platforms you've used!

                </div>
            </div>
        </div>
    </section><br><br>



    <section>
        <div class="titt">Want to calculate video streaming platforms?<span class="material-symbols-outlined">
                videocam
            </span></div>
        <div class="tittt">Track your carbon emissions from video streaming activity by inputting the daily minutes you
            use
            this platform
            <span class="material-symbols-outlined">
                calculate
            </span>
        </div>
        <div class="gridd">
            <?php
      
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            ?>
            <form method="post" action="./Calculationn.php">

                <div class="girdbox">


                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="">

                                    <input type="hidden" name="img" value="<?php echo $File; ?>">
                                    <img src="../Image/<?php echo $Himg; ?>" alt="Avatar" height="260" width="260"
                                        class="image">
                                    <input type="hidden" name="name" class="name" value="<?php echo $Hname; ?>">
                                    <div class="tit">
                                        <div id="platform"><?php echo $Hname; ?><br></div>
                                        <input type="hidden" name="name" id="platform" value="<?php echo $Hname; ?>">
                                        <input type="hidden" name="minute" id="platform" value="<?php echo $Hcal; ?>">
                                        <div><input type="number" id="minutes" class="minutes" min="0" placeholder=""
                                                name="minutes">minutes<br>
                                        </div>

                                    </div>
                                    <div class="btn">
                                        <div class="computing">
                                            <input type="submit" name="calculate" class="submit">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
        }
        ?>
        </div>
        <?php  
           if (isset($_POST['calculate'])) {
            $names = $_POST['name'];
            $minutes = $_POST['minutes'];
            $Hcal = $_POST['minute'];
            $carbon_emission = $minutes * $Hcal;

            echo "<span class='output'> " . $carbon_emission . " grams of carbon dioxide is emitted on " . $names . " for " . $minutes . " minutes per day.</span>";
            $caremitt = $carbon_emission * 365;
            echo "<br><br><span class='outputt'>Within a year: " . $caremitt . " grams of carbon dioxide on " . $names . " was estimated 
             on " . $minutes . " minutes are streamed daily.</span>";
            date_default_timezone_set('Asia/Yangon');
            $currentDateTime = date('Y-m-d H:i:s');
            echo "<br><span class='oututt'>The current date and time in Myanmar Time Zone is: " . $currentDateTime."</span>";
              $ID = $_SESSION['ID'];
            $sql = "INSERT INTO usagehistory(ccid,Uamount, Umin,Uplat,Utotal,Date)VALUES($ID,'$carbon_emission',' $minutes','  $names',' $caremitt ',' $currentDateTime')";
                    $ab->exec($sql);
       
        }
        ?>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>