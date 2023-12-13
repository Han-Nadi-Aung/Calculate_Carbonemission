<?php
include 'Connect.php';
$did = $_GET['did'];
$sql = $ab->prepare("DELETE FROM home WHERE HID='$did'");
$sql->execute();
header('location:view.php');