<?php

$sn = "localhost" ;
$un = "root";
$p = "";
$db="amjad";


try {
    $conn=new PDO("mysql:host=$sn;dbname=$db",$un,$p);
    $conn->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    /* echo "done"; */
}
catch (PDOException $e) {
    echo "Ereur :". $e->getMessage();
}


?>