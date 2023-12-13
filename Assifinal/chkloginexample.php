<?php
session_start();
include 'Connect.php';
$name=$_POST['cidd'];
$password=$_POST['cpwdd'];
$email=$_POST['cemaill'];
$sql = $ab->prepare("SELECT * FROM customerlogin WHERE cnamee='$name' AND cpwdd='$password' AND cemaill='$email' ");
$sql->execute();
if($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $_SESSION['u'] = $row['cnamee'];
       $_SESSION['ID'] = $row['ccid'];
       header("Location:home.php");
}


else{
    header("Location:cuslogin.php");
}
?>