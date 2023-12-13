<?php
include 'Connect.php';
$id=$_POST['id'];
$name = $_POST['name'];

$price = $_POST['price'];
$description = $_POST['desc'];


$oldimg = $_POST['oldimg'];
$newimg = $_FILES['newimg']['name'];
if($newimg != ""){
    $updatephoto = $newimg;
   // move_uploaded_file($FILES['newimg']['tmp_name'], "imagefiles/$newimg");
    move_uploaded_file($_FILES['newimg']['tmp_name'], "./imagefiles/".$newimg);

}
else{
    $updatephoto = $oldimg;
}

$sql = $ab->prepare("UPDATE home SET Himg='$updatephoto', Hname='$name',Hdesc='$description', Hcal='$price'
 WHERE HID='$id'");
$sql->execute();
 header("location:View.php");
?>