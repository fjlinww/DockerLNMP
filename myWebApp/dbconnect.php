<?php

$servername = "LNMP-mysql";
$dbName='docker_mysql';
$username = "admin";
$password = "123456";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
