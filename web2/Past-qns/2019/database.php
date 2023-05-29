<?php
$conn = new mysqli("localhost", "root", "", "db");

 $sql = "create database if not exists db";

$result = $conn->query($sql);

 if(!$result)
 {
    echo"Error";
 }


     //create table
     $sql = "create table if not exists bill (
        itemid int(4) primary key,
        itemdesc varchar(100) not null,
        rate int(6) not null,
        qty int(6) not null
    )";

    $result = $conn->query($sql);
    
    if(!$result)
 {
    echo"Error";
 }
 else
 {
    echo"Table created";
 }

 

?>