<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<style>
body {
    overflow-x: hidden;
}

.admintotal {
    border: 2px solid black;
    margin-left: 20px;
    margin-right: 5%;
    padding: 35px 25px 35px 30px;
    border-radius: 10px;
    width: 180px;
    margin-left: 270px;
    background-color: #194569;
    color: aliceblue;
    box-shadow: 10px 15px 15px black;
}

.custotal {
    border: 2px solid black;
    margin-left: 20px;
    margin-right: 5%;
    padding: 35px 25px 35px 25px;
    border-radius: 10px;
    width: 430px;
    margin-left: 150px;
    background-color: #194569;
    color: aliceblue;
    box-shadow: 10px 15px 15px black;
}


.dash {
    display: flex;
    display: grid;
    grid-template-columns: auto auto;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 10px;
    row-gap: 40px;
    width: 20px;
}

.dashh {
    display: flex;
    display: grid;
    grid-template-columns: auto auto auto;
    margin: 20px;
    padding: 10px;
    row-gap: 140px;
    width: 20px;
}

.tabl {
    border: 1px solid #194569;
    text-align: center;
    padding: 10px;
    border-radius: 10px;

}

th {
    font-size: 25px;
    text-align: center;
    padding: 8px;
    color: #194569;

}

td {
    font-size: 18px;
    padding: 10px;
}

.video {
    border-bottom: 1px solid #d7b546;
    font-size: 30px;
    margin-left: 20px;
    font-family: 'Open Sans', sans-serif;
}

.vidplat .imgg {
    border-radius: 100%;
    width: 150px;
    height: 150px;
    margin-left: 50px;
    box-shadow: 2px 15px 15px grey;
    margin-top: 20px;
}

.dh {
    border-bottom: 1px solid #d7b546;
    font-size: 50px;
    margin-left: 20px;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    text-align: center;
    color: #194569;
}

.vidplat {
    display: grid;
    grid-template-columns: auto auto auto auto auto auto;
}

.dh span {
    font-size: 40px;
}

@media only screen and (max-width: 620px) {
    body {
        overflow-x: hidden;

    }

    .admintotal {

        margin-left: 10px;
        margin-right: 2%;
        padding: 35px 40px 35px 5px;

        width: 140px;
        margin-left: 240px;


        box-shadow: 10px 15px 15px black;
    }

    .custotal {

        margin-left: 10px;
        margin-right: 2%;

        padding: 35px 40px 35px 5px;

        border-radius: 10px;
        width: 390px;
        margin-left: 100px;

        box-shadow: 10px 15px 15px black;
    }


    .dash {
        display: flex;
        display: grid;
        grid-template-columns: auto auto;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 10px;
        row-gap: 10px;
        width: 20px;
    }

    .dashh {
        display: flex;
        display: grid;
        grid-template-columns: auto auto auto;
        margin: -10px;
        margin-left: -150px;
        margin-right: -120px;
        padding: 10px;
        row-gap: 70px;
        width: 20px;
    }

    .tabl {
        border: 1px solid #194569;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
        margin-right: -80px;

    }

    th {
        font-size: 25px;
        text-align: center;
        padding: 8px;
        color: #194569;

    }

    td {
        font-size: 18px;
        padding: 10px;
    }

    .video {
        border-bottom: 1px solid #d7b546;
        font-size: 30px;
        margin-left: 10px;
        font-family: 'Open Sans', sans-serif;
    }

    .vidplat .imgg {
        border-radius: 100%;
        width: 150px;
        height: 150px;
        margin-left: 50px;
        box-shadow: 2px 15px 15px grey;
        margin-top: 20px;
    }

    .dh {
        border-bottom: 1px solid #d7b546;
        font-size: 50px;
        margin-left: 20px;
        font-family: 'Open Sans', sans-serif;
        font-weight: bold;
        text-align: center;
        color: #194569;
    }

    .vidplat {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
    }

    .dh span {
        font-size: 40px;
    }
}
</style>

<body>
    <a href="./view.php"
        style="margin-left:1390px;border:1px solid #194569;padding:13px 13px 5px 13px;background-color:#194569;color:aliceblue;"><span
            class="material-symbols-outlined">
            close
        </span></a>
    <div class="dh">Admin Dashboard
        <span class="material-symbols-outlined">
            settings
        </span>

    </div>

    <div class="dash">
        <div class="admintotal">
            <?php

        $con = mysqli_connect("localhost","root","","caremit");
  
            // SQL query to display row count
            // in building table
            $sql = "SELECT * from admilogin";
  
            if ($result = mysqli_query($con, $sql)) {
  
            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
      
            // Display result
            printf("<span style='font-size: 40px;margin-left:28px;'>Admins</span> <br> <span style='font-size: 35px;margin-left:79px;'>%d</span>",
             $rowcount);

        }
  
        // Close the connection
        mysqli_close($con);
  
        ?>
        </div>
        <div class="admintotal">
            <?php

        $con = mysqli_connect("localhost","root","","caremit");
  
            // SQL query to display row count
            // in building table
            $sql = "SELECT * from customerlogin";
  
            if ($result = mysqli_query($con, $sql)) {
  
            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
      
            // Display result
             printf("<span style='font-size: 40px;margin-left:45px;' >Users</span> <br> <span style='font-size: 35px;margin-left:77px;'>%d</span>",
             $rowcount);
        }
  
        // Close the connection
        mysqli_close($con);
  
        ?>
        </div>
        <div class="custotal">
            <?php

        $con = mysqli_connect("localhost","root","","caremit");
  
            // SQL query to display row count
            // in building table
            $sql = "SELECT * from usagehistory";
  
            if ($result = mysqli_query($con, $sql)) {
  
            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
      
            
            printf("<span style='font-size: 40px;'>Total Calculations Times </span> <br> 
            <span style='font-size: 35px;margin-left:167px;'>%d</span>",
             $rowcount);
        }
  
        // Close the connection
        mysqli_close($con);
  
        ?>
        </div>
        <div class="custotal">
            <?php

        $con = mysqli_connect("localhost","root","","caremit");
  
            // SQL query to display row count
            // in building table
            $sql = "SELECT * from home";
  
            if ($result = mysqli_query($con, $sql)) {
  
            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
      
            // Display result
             printf("<span style='font-size: 40px;margin-left:29px;'>Numbers of Platforms </span> <br> 
            <span style='font-size: 35px;margin-left:197px;'>%d</span>",
             $rowcount);
        }
  
        // Close the connection
        mysqli_close($con);
  
        ?>
        </div>
    </div>
    <p class="video">Names and Roles </p>
    <div class="dashh">

        <div class="aadmin">
            <?php
            include 'Connect.php';
            $sql = $ab->prepare("SELECT * FROM admilogin");
            $sql->execute();
             
            ?>
            <table class="tabl" style="margin-left:199px;">
                <tr>
                    <th> Admin </th>
                    <th>Name</th>
                    <th>Gmail</th>
                </tr>
                <?php
                while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    ?>
                <tr>
                    <td><?php echo $AID?> </td>
                    <td><?php echo $Aname?></td>
                    <td><?php echo $Aemail?></td>
                </tr>
                <?php

                }
                ?>
            </table>
        </div>
        <div class="cus">
            <?php
            include 'Connect.php';
            $sql = $ab->prepare("SELECT * FROM customerlogin");
            $sql->execute();
             
            ?>
            <table class="tabl" style="margin-left:219px;">
                <tr>
                    <th> Customer </th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Gmail</th>
                </tr>
                <?php
                while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    ?>
                <tr>
                    <td><?php echo $ccid?> </td>
                    <td><?php echo $cnamee?></td>
                    <td><?php echo $cpwdd?></td>
                    <td><?php echo $cemaill?></td>
                </tr>
                <?php

                }
                ?>
            </table>
        </div>

    </div>
    <div class="plat">
        <p class="video">Video Streaming Platforms</p>
        <?php
        include 'Connect.php';
        $sql = $ab->prepare("SELECT * FROM home");
        $sql->execute();
   ?>

        <div class="vidplat">
            <?php 
              while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            extract($row);
               
            ?>

            <img src="../Image/<?php echo $Himg;?>" class="imgg">
            <?php }?>
        </div>

    </div>
    <img src="../Image/Working-rafiki.png" style="width:390px;height:390px;margin-left:70%;">
</body>

</html>