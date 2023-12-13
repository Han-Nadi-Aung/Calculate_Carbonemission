<!DOCTYPE html>
<html lang="en">
<?php 
   session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Slab:wght@100;400&display=swap');

.table {

    width: 99%;
    text-align: center;
    border-collapse: collapse;
    border: 1px solid black;
    margin-left: 10px;
    border-top: 2px solid #97cadb;

    margin-top: 40px;


}

* {
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Slab', serif;
}

body {
    margin: 0;
    padding: 0;
    background-color: #eeeeee;
}

thead {
    background-color: #eeeeee;
    color: #194569;


}

td {
    height: 10px;
    color: #194569;
}

th {
    height: 50px;
    font-size: 20px;
    border-bottom: 3px solid #194569;
    border-right: 3px solid #194569;
    border-left: 3px solid #194569;
    border-top: 3px solid #194569;
}


input {
    width: 100%;
    height: 50px;
    text-align: center;
    color: #194569;

}

.btnn {
    color: #eeeeee;
    background-color: #194569;
    width: 15%;
    margin-left: 45%;
    margin-top: 2%;
    border-radius: 10px;
}

p {
    font-size: 50px;
    text-align: center;
    border-bottom: 2px solid #d7b546;
    color: #194569;
    margin-left: 80px;
    margin-right: 60px;
    margin-top: 30px;


}

.insert {

    color: green;
    font-size: 25px;
    margin-top: 5px;
    margin-bottom: 5px;

}

.insertt {
    margin-left: 40%;
}

.i {
    margin-left: 30px;

}


.submit:link,
.submit:visited {
    background-color: #adabae;
    color: chocolate;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 100%;




}

.submit:hover,
.submit:active {
    background-color: #a3c585;
    color: #F2E6DA;
}

.submit {
    margin-left: 50%;
    margin-top: 4%;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 110px;
    border-radius: 10px;
    background-color: #adabae;
    color: #282828;
    box-shadow: 4px 4px 5px grey;
    border: 0px transparent;
    font-weight: 10px;
    font-size: 100%;
    padding: 10px;



}

.submit:hover {
    background-color: #a3c585;
    color: #F2E6DA;
}

.view {
    margin-left: 8%;

}

.logout {
    margin-left: 10%;

}

.sp {
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Slab', serif;
}


input {
    background-color: #eeeeee;
    border: transparent;
}

.i {
    width: 90%;
}

.price {
    margin-left: 70px;
}

.data {

    font-size: 30px;
    border-bottom: 2px solid #d7b546;


    margin-left: 80px;
    text-align: center;
    margin-top: 50px;
}

.admin {
    font-size: 30px;
    margin-left: 20px;
    margin-right: 18%;
    color: #194569;
}

.navtit {
    color: #194569;
    font-size: 20px;
    margin-right: 20px;
}

.admin:hover,
.navtit:hover {
    color: #194569;
    text-shadow: 2px 2px 2px black;
    scale: 1.2;
}

.card {
    background-color: #dadedf;

}

.container {
    color: #282828;
}

.texarea {
    background-color: #eeeeee;
    color: #194569;
}

.bgimage {
    width: 20px;
    height: 20px;
}
</style>


<body>
    <div class="navigation">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand admin" href="./adash.php">
                <span class="material-symbols-outlined">

                    shield_person
                </span>
                <?php
                 
                    if(isset($_SESSION['ua'])){
                        $username=$_SESSION['ua'];
                        echo $username;
                    }
                      
        
                    ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link navtit" href="./insert.php">Insert Platforms<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtit" href="./view.php">View Platforms</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navtit" href="./viewhis.php">View History </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtit" href="./adlogout.php" style="color:red">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <p>Inserting data</p>
            <thead>
                <tr>
                    <th>Platform Name</th>
                    <th>Constant Value</th>
                    <th>Description</th>
                    <th>Platform Image </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <input type="text" name="name"></td>
                    <td> <input type="text" name="price"></td>
                    <td> <textarea name="description" class="texarea"></textarea></td>
                    <td><input type="file" name="img" class="i"></td>
                </tr>

            </tbody>


        </table>

        <div class="bestt">

            <!---->
            <button type="button" class="btnn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" name="finish"
                class="btnn">
                Finish
            </button>



            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Insert New Data</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Platform information is successfully inserted.<i class='fa-solid fa-check'></i>
                            <input type="submit" name="submit" class="btnn" style="width:140px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php 
            include 'Connect.php';
            $sql = "INSERT INTO home(Hname, Hcal, Hdesc, Himg)
                    VALUES(?, ?, ?,?)";
            $sq = $ab->prepare($sql);
            if (isset($_POST['submit'])) {
        
                if (isset($_FILES['img'])) {
                    $error = array();
                    $filename = $_FILES['img']['name']; //filename.jpg
                    $filesize = $_FILES['img']['size']; //2979879
                    $filetype = $_FILES['img']['type']; //filename/jpg
                    $filetmp = $_FILES['img']['tmp_name'];
    
                    $file_ex = explode("/", $filetype);
                    $filex = strtolower(end($file_ex));
    
                    $extension = array("jpg", "png", "jpeg","gif","webp","jfif");
    
                    if (in_array($filex, $extension)==FALSE) {
                        $error[] = "File type is wrong";
                    }
                    elseif ($filesize>2097152) {
                        $error[] = "File size is too big";
                    }
                    elseif (empty($error)==TRUE) {
                        move_uploaded_file($filetmp, "../Image/".$filename);
                    }
                }
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                     $description = $_POST['description'];
                    $img = $filename;
                if ($sq->execute(array($name,$price,$description,$img))) {
                }
            }
        ?>
    </form>
    <div class="bgimage">
        <img src="../Image/Data processing-amico.png"
            style="width:280px;height:280px; margin-left:1150px;margin-top:10px;">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>