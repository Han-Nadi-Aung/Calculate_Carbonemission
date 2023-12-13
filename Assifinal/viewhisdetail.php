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
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body {
    background-color: #d1d1d1;
    font-family: 'Open Sans', sans-serif;
}

.inf {
    display: flex;
    margin: 100px 120px 150px 240px;

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
    padding: 22px;
    margin-top: 5%;
    margin-left: 10%;
    background-color: #ecebeb;
    border-radius: 10px;
    box-shadow: 10px 14px 10px grey;
}

.head {
    font-size: 30px;
    color: #194569;
    text-align: center;
}

table {
    border-collapse: separate;
    border-spacing: 55px 5px;
}

td {
    padding: 10px 2px;
}

th {
    font-size: 18px;
    font-weight: 600;
}
</style>

<body>
    <div class="head">History of Calculation on carbon emission </div>

    <div class="inf">

        <div class="pic">
            <?php
                include "Connect.php";
                $vhis = $_GET['vhis'];
                $sql = $ab->prepare("SELECT * FROM usagehistory WHERE ccid=$vhis"); #provide data which is same with id
                $sql->execute();?>

        </div>
        <table>
            <tr>
                <th>
                    Name of Platform
                </th>
                <th>
                    Spent minutes per day
                </th>
                <th>
                    In Grams(per day)
                </th>
                <th>
                    In Grams(per year)
                </th>
                <th>
                    Calculated Date
                </th>
            </tr>
            <?php while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
                 
            ?>
            <tr>

                <td> <?php echo $Uplat?></td>
                <td> <?php echo $Umin?></td>
                <td> <?php echo $Uamount?></td>
                <td> <?php echo $Utotal?></td>
                <td> <?php echo $Date?></td>
            </tr>
            <?php }?>
        </table>


    </div>
    <a href="./viewhis.php" class="previous"> Previous</a>
</body>

</html>