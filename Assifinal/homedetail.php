<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body {
    background-color: #d1d1d1;
    font-family: 'Open Sans', sans-serif;
}

.inf {
    display: flex;
    margin: 240px 120px 150px 240px;

}

.image {
    border-radius: 20px;
    margin-right: 30px;
    box-shadow: 10px 10px 10px #555555;
}

.data {
    margin-left: 40px;

}

.data .nam {
    font-size: 39px;
    font-weight: 900;
    margin-top: 10px;
}

.price {
    font-size: 20px;

}

.previous {
    margin-left: 90%;
    border: 1px solid #194569;
    background-color: #194569;
    padding: 20px;
    text-decoration: none;
    color: aliceblue;
    border-radius: 15px;
    box-shadow: 3px 4px 14px black;
}

.inf {
    border: 1px solid #ecebeb;
    padding: 20px;
    margin-top: 13%;
    margin-left: 8%;
    background-color: #ecebeb;
    border-radius: 10px;
    box-shadow: 10px 14px 10px grey;
}
</style>

<body>

    <div class="inf">
        <div class="pic">
            <?php
                include "Connect.php";
                $deid = $_GET['deid'];
                $sql = $ab->prepare("SELECT * FROM home WHERE HID=$deid"); #provide data which is same with id
                $sql->execute();
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                extract($row);
                ?>
            <div class="scrollimg">
                <img src="../Image/<?php echo $Himg;?>" height="280" width="280" class="image">
            </div>
        </div>
        <div class="data">
            <div>
                <p class="nam">
                    <?php echo $Hname?></p>
            </div>
            <div>
                <p class="price"> <?php echo $Hdesc?></p>
            </div>



        </div>

    </div>
    <a href="./home.php" class="previous"> Previous</a>
</body>

</html>