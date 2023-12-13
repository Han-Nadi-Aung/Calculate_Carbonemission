<?php
session_start();
include 'Connect.php';
$sql = $ab->prepare("SELECT * FROM admilogin");
$sql->execute();
 $anamearr = array();
$aemailarr = array();
$apwdarr = array();
$ua =$_POST['aidd'];
$ea =$_POST['aemaill'];
$pa = $_POST['apwdd'];
while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    array_push(  $anamearr,$Aname);
    array_push( $aemailarr,$Aemail);
    array_push($apwdarr ,$Apwd);
}

if(in_array($ua,$anamearr)&&in_array($ea,$aemailarr)&&in_array($pa,$apwdarr)){
       $_SESSION['ua'] = $ua;
     header("Location:view.php");
}

else{
    
     header("Location:admin.php");
}
?>