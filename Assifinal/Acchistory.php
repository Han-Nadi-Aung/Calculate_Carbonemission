<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<style>
body {
    background-color: #d1d1d1;
}

h1 {
    text-align: center;
    border-bottom: 1px solid #194569;
    margin-left: 10px;
    margin-right: 10px;
}

table {
    border-collapse: separate;
    border-spacing: 65px 5px;
    margin-left: 15%;
    margin-top: 7%;
    border: 1px solid black;
    padding: 30px;
    box-shadow: 13px 15px 15px black;
    border-radius: 20px;
}

td {
    padding: 10px 2px;
}

th {
    font-size: 20px;
}

.back {
    margin-left: 10%;
}

/*.account {
    border: 1px solid #ecebeb;

    margin-left: 5%;
    margin-right: 5%;
    background-color: #ecebeb;
    border-radius: 10px;
    box-shadow: 10px 14px 10px grey;
}*/
</style>
<?php 
session_start();
include 'Connect.php';
$IDD=    $_SESSION['ID'];
$sql = $ab->prepare("SELECT * FROM usagehistory WHERE ccid=$IDD");
$sql->execute();

?>

<body>

    <h1 style="color:#194569;font-size:2.5rem;">Account History</h1>
    <a href="./home.php" class="back"> <span class="material-symbols-outlined">
            arrow_back</a>
    </span>
    <div class="account">

        <table>

            <tr>

                <th scope="col">Platform Name</th>
                <th scope="col">Minutes(per day)</th>
                <th scope="col">Grams(per day)</th>
                <th scope="col">Grams(per year)</th>
                <th scope="col">Date</th>
            </tr>
            <?php 
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                extract($row);?>
            <tr>

                <td><?php echo $Uplat?></td>
                <td><?php echo $Umin?></td>
                <td><?php echo $Uamount?></td>
                <td><?php echo $Utotal?></td>
                <td><?php echo $Date?></td>
            </tr>
            <?php }?>
        </table>
    </div>

</body>

</html>