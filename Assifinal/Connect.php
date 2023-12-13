<?php 
try{
    $ab = new PDO("mysql:host=localhost;dbname=caremit", "root", "");
    $ab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
}
catch(PDOException $e){
    echo $e->getMessage();
}