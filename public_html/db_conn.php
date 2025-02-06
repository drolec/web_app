<?php

$sName = "mysql";
$uName = "jan_drolec";
$pass = "skrivnost";
$db_name = "todo";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#    echo "Connection successful!";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
