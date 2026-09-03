<?php

$host="localhost";
$user='root';
$password="";
$db_name="testdb";

try{
    $conn=new PDO("mysql:host=$host;dbname=$db_name",$user,$password);
    // // $sql="Create dataBase testdb"; -- na vyn kur njeher kur e krijojme datenbazen
    // $sql="CREATE TABLE users (id int(6) not null AUTO_INCREMENT PRIMARY KEY,
    // username varchar(30) not null,
    // password varchar(30) not null,
    // age int(30))";

    $sql="INSERT INTO users (username,password,age) VALUES ('Ernes Kurteshi','Genius123!',17);";
    $conn->exec($sql);
    echo "New row is inserted succesfully!";
}catch(Exception $e){
    echo "Something went wrong!";
}

?>