<?php
session_start();
include 'Connect.php';
  $sql = "INSERT INTO customerlogin(cnamee, cpwdd,cemaill)
        VALUES(?, ?,?)";
$sq = $ab->prepare($sql);
if (isset($_POST['submit'])) {
    $name = $_POST['cname'];
    $pwd = $_POST['cpwd'];
    $email = $_POST['cemail'];
     if ($sq->execute(array($name,$pwd,$email))) {
        header("Location:cuslogin.php");
        
    }
    else{
        header("Location:signin.php");
    }
}

?>