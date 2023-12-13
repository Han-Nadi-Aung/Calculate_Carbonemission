<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.user {
    padding: 10px;
    border: 2px solid #194569;
    background-color: #194569;
    color: aliceblue;
    font-size: 20px;
    margin-left: -17%;
    text-decoration: none;
    border-radius: 10px;
    box-shadow: 2px 5px 5px grey;
    margin-top: -10px;
}

.userr {
    padding: 10px;
    border: 2px solid #194569;
    background-color: #194569;
    color: aliceblue;
    font-size: 20px;
    margin-left: -9%;
    text-decoration: none;
    border-radius: 10px;
    box-shadow: 2px 5px 5px grey;
    margin-top: -10px;
}


.user:hover,
.userr:hover {
    scale: 1.5;
    box-shadow: 2px 5px 5px black;
}
</style>

<body>
    <img src="../Image/wepik-export-20230428183748.png" style="width:150vh;height:90vh;margin-left:250px;">
    <a href="./admin.php" class="userr">Admin View</a>
    <a href="./cuslogin.php" class="user">User View</a>
    <?php
            session_start();
    session_destroy();
    ?>


</body>

</html>