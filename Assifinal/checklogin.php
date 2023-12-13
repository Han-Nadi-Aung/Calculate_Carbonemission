<?php
session_start();
include 'Connect.php';
$sql = $ab->prepare("SELECT * FROM customerlogin");
$sql->execute();
 $cnamearr = array();
$cemailarr = array();
$cpwdarr = array();
$uu =$_POST['cidd'];
$ee =$_POST['cemaill'];
$pp = $_POST['cpwdd'];
while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    array_push( $cnamearr,$cnamee);
    array_push( $cemailarr,$cemaill);
    array_push($cpwdarr,$cpwdd);
}

if(in_array($uu,$cnamearr)&&in_array($ee,$cemailarr)&&in_array($pp,$cpwdarr)){
    $_SESSION['u'] = $uu;
   # $stmt = $ab->prepare("SELECT * FROM customerlogin WHERE cnamee=$uu");
  #  $stmt->execute();
  #  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   #     extract($row);
  #      $_SESSION['ID'] = $ccid;
 #   }
     header("Location:home.php");
}

else{
    header("Location:cuslogin.php");
}
?>