<?php
$host='localhost';
$user='root';
$pass="";

try{
    $conn=new PDO("mysql:host=$host",$user,$pass);

    $sql="CREATE DATABASE ora_fundit";
    $conn->exec($sql);

    echo "Database is created";

}catch(Exception $e){
    echo "Not connected: " .$e->getMessage();

}

?>