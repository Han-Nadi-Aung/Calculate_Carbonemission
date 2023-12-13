<?php
include 'Connect.php';

  session_start();
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100;400&display=swap');

table {
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;

    width: 100%;
    text-align: center;
    border-collapse: collapse;
    border: 1px solid black;
    font-size: 10px;
    column-width: 10px;
    margin: 15px 60px;


}

body {
    margin: 0;
    padding: 0;
    background-color: #eeeeee;

}

th {
    font-size: 30px;
    background-color: #eeeeee;

    padding: 10px;
    color: #194569;
    border-bottom: 2px solid #E6D6BE;

}

table a:link,
table a:visited,
.foot a:link,
.foot a:visited {
    background-color: #E7BB2C;
    color: #282828;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
    box-shadow: 2px 2px 5px grey;
}



table a:hover,
table a:active,
.foot a:hover,
.foot a:active {
    background-color: #688F4E;
    color: white;
    scale: 1.1;
    box-shadow: 2px 2px 6px black;
}

.ila:link,
.ila:visited {
    background-color: grey;
    color: #282828;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;

}

.ila:hover,
.ila:active {
    background-color: #f01e2c;
}

.data {
    color: #194569;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 45px;
    text-align: center;
    padding-top: 10px;
    margin-top: -10px;


}

td {
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-weight: 100;
    padding-left: 40px;
    padding-right: 40px;
    color: black;



}

.insert,
.logout {
    background-color: #eeeeee;
    color: #194569;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    margin-left: 40%;
    margin-bottom: 30px;
}

.insert:hover {
    background-color: #688F4E;
}

.logout {
    margin-left: 200px;
}



body {
    margin: 0;
    padding: 0;
    width: 92%;
    background-color: #eeeeee;
    color: #194569;
}

.data {

    font-size: 30px;
    border-bottom: 2px solid #d7b546;
    width: 98%;
    margin-left: 80px;
    text-align: center;
    margin-top: 40px;
}

.admin {
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 30px;
    margin-left: 20px;
    margin-right: 20%;
    color: #194569;
}

.navtit {
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    color: #194569;
    font-size: 20px;
    margin-right: 30px;
}

.card {
    background-color: #194569;

}

.container {
    color: #eeeeee;
}

.admin:hover,
.navtit:hover {
    color: #194569;
    text-shadow: 2px 2px 2px black;
    scale: 1.2;
}

html::-webkit-scrollbar {
    width: 10px;
}

html::-webkit-scrollbar-track {
    background: #194569;
}

html::-webkit-scrollbar-thumb {
    background: #eeeeee;
    border-radius: 5rem;
}

html::-webkit-scrollbar-thumb:hover {
    background: silver;
}

.image {
    margin-bottom: 10px;
    margin-left: 100px;
}

tr {
    margin-bottom: 10px;
    border-bottom: 1px solid #194569;
}

tr:nth-child(even) {
    background-color: #cadbe7;
}

.des {
    width: 10px;
}

#navbarNav:hover {
    color: #194569;
}

.viewitemm span {
    background-color: #cadbe7;
    border-radius: 100%;
}

/*search*/
.topnav {
    overflow: hidden;
    background-color: #e9e9e9;
}

.topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
    background-color: #2196F3;
    color: white;
}

.topnav .search-container {
    float: left;
    margin-left: 80px;
}

.topnav input[type=text] {
    padding: 6px;
    margin-top: 8px;
    font-size: 27px;
    border: none;
}

.topnav .search-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background: #ddd;
    font-size: 27px;
    border: none;
    cursor: pointer;
}

.topnav .search-container button:hover {
    background: #ccc;
}
</style>

<body>
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

    <div class="data">View History</div>
    <?php
            
    include 'Connect.php';   
     if(isset($_POST['search'])){            
    $username = $_POST['search']; 
        $sql = $ab->prepare("SELECT * FROM usagehistory WHERE cnamee LIKE '%$username%'");
        $sql->execute();
    }
    else{
          $sql = $ab->prepare("SELECT * FROM usagehistory");
        $sql->execute();
    }
    $sql = $ab->prepare("SELECT DISTINCT c.ccid, cnamee, cemaill FROM customerlogin c, usagehistory u WHERE c.ccid = u.ccid");
    $sql->execute();
    ?>

    <table border="1">
        <br><br>

        <tr>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Information</th>

        </tr>
        <?php 
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
                 
        ?>
        <tr>

            <form method="post" action="./viewhisdetail.php">

                <td><?php echo $cnamee;?></td>
                <td> <?php echo $cemaill;?></td>

                <td>
                    <div class="btn">
                        <a href="./viewhisdetail.php?vhis=<?php echo $ccid;?>" class="viewitemm"><span
                                class="material-symbols-outlined">
                                info
                            </span></a>
                    </div>
                </td>
                <?php }?>
                <input type="hidden" name="name" value="<?php echo $ccid;?>
                   
                
                
            </form>
          
        </tr>
       
    </table>
   
   

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                    crossorigin="anonymous">
                </script>
</body>


</html>