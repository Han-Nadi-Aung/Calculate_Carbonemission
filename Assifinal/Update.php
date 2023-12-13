<?php
include "Connect.php";
$uid = $_GET['uid'];
$sql = $ab->prepare("SELECT * FROM home WHERE HID=$uid"); #provide data which is same with id
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
extract($row);
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100;400&display=swap');

.container {
    border: 5px grey;
    margin-left: 5%;
    margin-right: 45%;
}

label,
input {
    margin-right: 10px;
    margin-bottom: 20px;
    margin-top: 10px;
    margin-left: 15px;
    font-size: 20px;
    text-align: center;
}

label {
    margin-right: 20px;
}

.title {
    color: #282828;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 35px;
    text-align: center;
    margin-bottom: 45px;
}

.a {
    margin-left: 30px;
}

.l {
    margin-left: 17px;
}

.p {
    margin-left: 80px;
}

.pa {
    margin-left: 5px;
    margin-bottom: 5px;
}

.nn {
    margin-left: 30px;
}

.o {
    text-align: center;
    margin-left: 40%;
    padding: 5px;
    border-radius: 6px;

}

.o:hover {
    background-color: green;

}

input {
    border-radius: 10px;

}

.atext {
    margin-left: 50px;
}

.hna {
    margin-left: 25px;
}

.image {
    width: 30px;
    height: 30px;
}
</style>
<form method="POST" action="updateprocess.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $HID;?>">
    <div class="title">Do you want to update " <?php echo $Hname?>" Platform Information?</div>
    <div class="container">

        <div>
            <label for="">Enter Platform Name</label>
            <input type="text" name="name" placeholder="name" class="hna" value="<?php echo $Hname;?>">
        </div>
        <div>
            <label for="">Enter constant value</label>
            <input class="a" type="text" name="price" placeholder="Value" value="<?php echo $Hcal;?>">
        </div>
        <div>
            <label for="">Enter Description</label>
            <textarea
                style="height: 160px; width: 600px; resize: none;border-color:black;font-size:20px;overflow:scroll;"
                name="desc"><?php echo $Hdesc; ?></textarea>

        </div>
        <div>
            <label for="" class="si">Stored Image</label>
            <img src="../Image/<?php echo $Himg ?>" class="p" width="300" ; height="200" ;><br>
            <input type="hidden" name="oldimg" value="<?php echo $Himg;?>"><br>
            <label for="">Update New Image </label>
            <input type="file" name="newimg" class="nn"><br><br>

        </div>

        <input type="submit" name="update" value="UPDATE" class="o">

    </div>


</form>