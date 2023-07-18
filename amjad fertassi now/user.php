<?php

include("conn.php");

if (isset($_POST['submit'])) {
    $issm = $_POST["issm"];
    $code = $_POST["code"];
    $sql = "INSERT INTO tablaa (issm , code) values (:issm , :code)";
    $sql_run = $conn->prepare($sql);
    $data = [
        ":issm" => $issm ,
        ":code" => $code 
    ];
    $sql_run->execute($data);
    
}

?>

<html>
    <h1>hhhh</h1>
</html>